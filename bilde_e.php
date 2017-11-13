<?php
	require "funcz/functionz.php";
	print head("en","Sketches");
    require "xpics_e.php";
	$x 					= json_decode($gpics,true);
	$sz					= count($x["gallery"]);
 ?>
<body>
<div class="container">
  <div class="row">
    <div <?php mnuClass();?> >  
			<?php	print menu("en","Sketches -  Gosia Kulczyk",'bilde_e.php','bilde.php','bilde_ch.php'); ?>
	 </div>	  
      <div <?php mainClass();?>>
		<?php print  shead1("Sketches -  Gosia Kulczyk");?>       
     <main>
		   <div class="row">
					<? 				
					for ($i=0;$i<$sz;$i++)
					{ 	
						print '<div class="col-lg-2 col-md-2 col-sm-3 bordered">';
						displaySketch($i,"bilde_e.php","en",$gpics);
						print "</div>";
					}
					?>
			</div>				
		</main>
		 	<br/>
			 <div class="alpha" >Click on Pictures to see larger image</div>
	   		   </div>
			</div>
		<?php print foot();	?>	   
			 </div>
	  <?php  print endPage();?>
</body>
</html>