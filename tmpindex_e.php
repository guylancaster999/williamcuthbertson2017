<?php
	require "funcz/functionz.php";
	 print head("en","Homepage","index_e.php");
	 require "ghome_e.php";
$x 		= json_decode($home,true);
$sz		= count($x["home"]); 
?> 
<body>
<div class="container">
	 <div class="row">
        <div <?php  mnuClass(); ?>>
               <?php print  menu("en","Homepage",'index_e.php','index.php','index_ch.php');?>
		</div>
	    <div <?php  mainClass(); ?>>
			<?php print shead1('Homepage');?> 
	 		 <main>
                 <?php photocenter("frontpagephoto.jpg", "William%20Cuthbertson%20am%20Klavier%201.3.2010%20-%20Photo%20by%20Hans%20Jürgen%20Kugler%201.3.2010");?>
                <ul>
				
				<?php 
				for ($i=0;$i<$sz;$i++)
				{ 	
					$y 		= $x["home"][$i]; 
					$txt	= $y["txt"];
					$ttl	= $y["ttl"];
					print "<li><article><h4>".$ttl."</h4>";
					print $txt."</article></li>";
				}
				?>
		 </ul>
   			</main>
		<?php print foot();	?>	   
		  </div>
	  	</div>
	</div>	
	 <?php  print endPage();?>
</body>
</html>