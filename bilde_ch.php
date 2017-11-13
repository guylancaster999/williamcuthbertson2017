<?php
	require "funcz/functionz.php"; 
	print head("ch","速写");
	require "xpics_ch.php";	
	$x 		= json_decode($gpics,true);
	$sz		= count($x["gallery"]);
 
 ?>
<body>
<div class="container">
  <div class="row">
    <div  <?php mnuClass();?> >  
			<?php	print menu("ch","速写  -  Gosia Kulczyk",'bilde_e.php','bilde.php','bilde_ch.php'); ?>
	 </div>	  
      <div  <?php mainClass();?>>
		<?php print  shead1("速写 -  Gosia Kulczyk");?>       
    		   <main>
 				   <div class="row">
					<? 					
					for ($i=0;$i<$sz;$i++)
					{ 	
						print '<div class="col-lg-2 col-md-2 col-sm-3 bordered">';
							displaySketch($i,"bilde_ch.php","ch",$gpics);
						print "</div>";
					}
					?>
			</div>			
		 </main>
 				<div class="alpha" >点击图片查看原图</div>
			</div>
		 </div>
		<?php print foot();	?>	   
  			</div>	
	 <?php  print endPage();?>
</body>
</html>