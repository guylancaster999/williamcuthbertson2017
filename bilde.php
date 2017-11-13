  <?php 
require "funcz/functionz.php";
print head("de","Shizzen");
require "xpics.php";
$x 					= json_decode($gpics,true);
$sz					= count($x["gallery"]);
 ?>
<body>
<div class="container">
  <div class="row">
    <div  <?php mnuClass();?>  >  
			<?php	print menu("de","Skizzen von Gosia Kulczyk",'bilde_e.php','bilde.php','bilde_ch.php'); ?>
	 </div>	  
      <div <?php mainClass();?> >
		<?php print  shead1("Skizzen von Gosia Kulczyk");?>       
      	 <main>
 			       <div class="row">
					<? 
					for ($i=0;$i<$sz;$i++)
					{ 	
						print '<div class="col-lg-2 col-md-2 col-sm-3 bordered">';
						displaySketch($i,"bilde.php","de",$gpics);
						print "</div>";
					}
					?>
			</div>		
 				<br/>
				<div class="alpha" >Klicken Sie auf die Fotografien in voller Größe zu sehen</div>
 				</main>
			    </div>
					</div>
			<?php print foot();	?>
		 </div> 
	<?php  print endPage();?>
</body>
</html>