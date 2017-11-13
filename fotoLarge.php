<?php 
require "funcz/functionz.php";
$lan		= $_REQUEST["lan"];
switch($lan)
{case "en":
  require "pics_e.php";
  $back=" - Click to return";
  break;
  case "de":
  require "pics.php";
  $back=' - Klicken Sie zur Galerie zurückzukehren.';
break;
	default:
	 require "pics_ch.php";
	$back=" - 点击返回图库";
 }
$photoPtr	= $_REQUEST["photoPtr"];
$fromUrl	= $_REQUEST["fromUrl"];
$picCtr		= $_REQUEST["picCtr"];
$cpy		= $_REQUEST["cpy"];
$x 			= json_decode($gpics,true);
$sz			= count($x["gallery"]);
$y 			= $x["gallery"][$photoPtr]; 
$picLarge	= $y["picLarge"];
$grpTtl 	= str_replace( "%20"," ",$y["grpTtl"]);
$picTtl		= str_replace( "%20"," ",$y["picTtl"]);
$prevFlag	= "T";
$prevPtr	= $photoPtr;
$prevArrrow ="";

while ($prevPtr>0 && $prevFlag=="T")
{
	$prevPtr--;
	$yPrev= $x["gallery"][$prevPtr]; 	
	$prevFlag	= $yPrev["flag"];
	$prevCpy	= $yPrev["cpy"];
}
if($prevFlag=="P")
{
  $prevArrow='<a href="fotoLarge.php';
  $prevArrow.='?lan='.$lan;
  $prevArrow.='&amp;photoPtr='.$prevPtr;
  $prevArrow.='&amp;fromUrl='.$fromUrl;
  $prevArrow.='&amp;cpy='.$prevCpy	.'" ';
  switch ($lan)
  {
    case "de":$prevArrow.=' title="Zurück" ';
	break;
	case "ch":$prevArrow.=' title="以前" ';
	break; 
	default:$prevArrow.=' title="Previous Photo" ';
  }
  $prevArrow.='>';
  $prevArrow.='<span class="glyphicon glyphicon-backward"></span>';
  $prevArrow.='</a> ';
}
$nextFlag	="T";
$nextPtr	=$photoPtr;
$nextArrrow="";

while ($nextPtr<$sz && $nextFlag=="T")
{
	$nextPtr++;
	$yNext		= $x["gallery"][$nextPtr]; 	
	$nextFlag	= $yNext["flag"];
	$nextCpy	= $yNext["cpy"];
}
if($nextFlag=="P")
{
  $nextArrow='<a href="fotoLarge.php';
  $nextArrow.='?lan='.$lan;
  $nextArrow.='&amp;photoPtr='.$nextPtr;
  $nextArrow.='&amp;fromUrl='.$fromUrl;
  $nextArrow.='&amp;cpy='.$nextCpy.'" ';
  switch ($lan)
  {
	  case "de":$nextArrow.=' title="Weiter" ';
	break;
	case "ch":$nextArrow.=' title="下一个" ';
	break;
	default:$nextArrow.=' title="Next" ';
  }
  $nextArrow.='>';
  $nextArrow.='<span class="glyphicon glyphicon-forward"></span>';
  $nextArrow.='</a>';
}
print head("de","homepage");
?>
<body>
 <div class="container">
  <div class="row">
    <div  <?php mnuClass();?>  >  
		<?php print menu($lan,$albumTtl,"foto_e.php","foto.php","foto_ch.php");?>
	</div>	  
     <div  <?php mainClass();?> >
	 <?php switch($lan)
					{
						case "en": print shead1('Photo '.$grpTtl);
						break;
						case "de": print shead1('Foto '.$grpTtl);
						break;
						default: print shead1('照片 '.$grpTtl);
					}
					 
	 ?>
    	<main>
 			<div class="row">
                <div class="col-1 col-md-1 col-lg-1"><?php print $prevArrow;?></div>
                <div class="col-lg-10 col-md-10 col-10"><h3><?php print $picTtl;?></h3></div>
				<div class="col-1 col-md-1 col-lg-1"><?php print $nextArrow;?></div>
              </div>
			  <BR/>
              <div class="row">
                <div class="col-lg-12">      				
					<a href="<?php print $fromUrl;  ?>" title="<?php print $picTtl.$back;?>">
							<img src="img/<?php print $picLarge;?>" class="img-responsive img-rounded picturecenter" alt="<?php print $picTtl;?>"/>
					</a>
				<br/>
				 <?php print '<div style="font-weight:600;font-size:9pt;margin-top:-20px;padding-left:140px;">'.$cpy.'</div>';?>
				<br/>	
		</main>
			<div class="row">
                <div class="col-1 col-md-1 col-lg-1"><?php print $prevArrow;?></div>
                <div class="col-lg-10 col-md-10 col-sm-6"><h3>
					<?php
					switch($lan)
					{case "de":
					   print "Klicken Sie auf das Foto, um zur Galerie zurückzukehren";
					   break;
					   case "ch":
					   print  "点击照片返回";
					   break;
					default:
					  print "Click on the Photo to return to Gallery";
					}
				?>
				</h3>
				</div>
				<div class="col-1 col-md-1 col-lg-1"><?php print $nextArrow;?></div>
		      </div>
					<?php print foot();?>
                     </div>
					</div>
				</div>
		  	</div>
			</div>
 	<?php  print endPage();?>
	</body>
</html>