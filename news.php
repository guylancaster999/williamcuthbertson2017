	<?php
	require "funcz/functionz.php";
	require "gnews.php";
	$x 					= json_decode($news,true);
	$sz					= count($x["news"]);     

	function newsItem($pic="",$ttl,$txt )
	{
		echo '<li><article>';
		if (strlen($pic)>0)
		{
		 photorightnolink($pic,$ttl);
		}
		echo '<h4><b>'.$ttl.'</b></h4>'.$txt.'</article>
				<br/>
				<br class="brclear"/>
				<br class="brclear"/></li>';
		return;
	}
	print head("de","Aktuelles","",",Thai, Juror, Competion, Judge, Wettbewerb");
?>
<body> 
<div class="container">
  <div class="row">
    <div <?php mnuClass();?> >  
			<?php 
			print menu("de","Aktuelles",'news_e.php','news.php','news_ch.php');
			?>
	 </div>	  
      <div  <?php mainClass();?>>
		<?php print  shead1('Aktuelles');?>       
	        <main> 
             <div class="row">
               <div class="col-12 col-sm-12 col-md-12  col-lg-12">
			       
			<ul  style="margin-left:-30px; ">
			<?php 
				for ($i=0;$i<$sz;$i++)
				{ 	
					$y 		= $x["news"][$i]; 
					$ttl	= $y["ttl"];
					$txt	= $y["txt"];
					$img	= $y["img"];
					$imgLarge= $y["imgLarge"];
					newsItem($img,$ttl,$txt,$imgLarge);
				}
				?>
			</ul>
		    </div>
		</div>
		</main>
		<?php print foot();	?>	   
				 </div>
		  	</div>
			</div>	   
	<?php  print endPage();?>
</body>
</html>