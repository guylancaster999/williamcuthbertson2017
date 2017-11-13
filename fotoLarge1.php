<?php 
require "funcz/functionz.php";
session_start();
$lan		= $_REQUEST["lan"];
 
switch($lan)
{case "en":
  $back=" - Click to return";
  break;
  case "de":
  $back=' - Klicken Sie  zurückzukehren.';
break;
	default:
  $back=" - 点击返回图库";
 }
 
 $fromUrl	= $_REQUEST["fromUrl"];
 $cpy		= $_REQUEST["cpy"];
 $picLarge	= $_REQUEST["picLarge"];
 $photoTtl	= $_REQUEST["photoTtl"];
 print head("de","homepage");
?>
<body>

<div class="container">
  <div class="row">
    <div class="col-sm-2 col-md-2 col-lg-2" >  
			<?php 
			print menu("en","Bio",'bio_e.php','bio.php','bio_ch.php');
			?>
	 </div>	  
      <div class="col-sm-10   col-md-10 col-lg-10">
		<?php print  shead1('Photo');?>        
		 
			<main>	
             <div class="row">
               <div class="col-12 col-sm-12 col-md-12  col-lg-12">
			    <article>
				 
              <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12">       	 		
				<a href="<?php print $fromUrl;  ?>" 
					title="<?php print $photoTtl.$back;?>">
						<img src="img/<?php print $picLarge;?>" class="img-responsive img-rounded picturecenter" alt="<?php print $picTtl;?>"/>
					</a>
				<br/>
				 <?php print '<div style="font-weight:600;font-size:9pt;margin-top:-20px;padding-left:140px;">'.$cpy.'</div>';?>
				<br/>	
			<div class="row">
                 <div class="col-lg-10 col-md-10 col-sm-6"><h3>
					<?php
					switch($lan)
					{case "de":
					   print "Klicken Sie auf das Foto, um zurückzukehren";
					   break;
					   case "ch":
					   print  "点击照片返回";
					   break;
					default:
					  print "Click on the Photo to return ";
					}
				?>
				</h3></div>
 		      </div>
				 	<?php print foot();?>
                     </div>
					</div>
				</div>
		  	</div>
			</div>
		  	</div>
			</div>
	<?php  print endPage();?>
	</body>
</html>