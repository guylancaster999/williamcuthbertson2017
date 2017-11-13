<?php 
require "funcz/functionz.php";
print head("de","Homepage","index.php");
require "ghome.php";
$x 		= json_decode($home,true);
$sz		= count($x["home"]);     
 ?> 
<body> 
<div class="container">
  <div class="row">
      <div class="col-sm-4 col-md-3 col-lg-2" >  
			<?php print menu("de","Homepage",'index_e.php','index.php','index_ch.php'); ?>
	</div>
      <div class="col-sm-8   col-md-9 col-lg-10">
		<?php print shead1("Homepage");?>       
      	 <main>
		    <?php photocenter("William_Cuthbertson_Pianist.jpg", "William%20Cuthbertson%20am%20Klavier%201.3.2010%20-%20Photo%20by%20Hans%20Jürgen%20Kugler%201.3.2010");?>
				<ul style="margin-left:-40px;"> 
				<?php 
				for ($i=0;$i<$sz;$i++)
				{ 	
						$y 		= $x["home"][$i]; 
						$txt	= $y["txt"];
						$ttl	= $y["ttl"];
						print "<li><article><h4><b>".$ttl."</b></h4>";
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