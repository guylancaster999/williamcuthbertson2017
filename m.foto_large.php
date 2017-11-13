<?php 
require "funcz/m.functionz.php";
$lan		=$_REQUEST["lan"];
$back		=" - ".($lan=="de"?"Klicken Sie zur Galerie zurückzukehren":"Click to return to gallery");
$album   	=$_REQUEST["album"];
$copy   	=$_REQUEST["copy"];
$photoFile  =$_REQUEST["photoFile"];
$photoTtl	=$_REQUEST["photoTtl"];
$fromUrl	=$_REQUEST["fromUrl"];
print head("de","homepage");
?>
<body>
<div data-role="page" id="pageone">
  <div data-role="header">
       <?php print top($lan,"Picture","Photo");?>
	  </div>
	  <div data-role="main" class="ui-content">

			<div class="row">
                <div class="col-lg-12"> 
                    <h2><?php print $photoTtl;?></h2> 
                </div>
				<br/>
              <div class="row">
                <div class="col-lg-12">         
					  <a title="<?php print $photoTtl.$back;?>" href="<?php print $fromUrl;?>">
					   <img src="img/<?php print $photoFile;?>"
					   class="img-responsive ui-corner-all picturecenter" alt="<?php print $photoTtl.$back;?>"/>
					   </a>
					 <br/>
					 <?php if (strlen($copy)>0)print '<div style="text-align:center; font-size:9pt;font-weight:bold;">'.$copy.'</div>';?>
					<br />
					<div class="alpha">
					<?php
					switch($lan)
					{case "de":
					   print "Klicken Sie auf das Foto, um zurückzukehren.<br/>";
					   break;
					   
					   case "ch":
					   print  "点击照片返回<br/>";
					   break;
					default:
					  print "Click on the Photo to return<br/>";
					}
					?><br/>
					</div> 					 
		<div data-role="footer">
     <?php print foot();?>
  </div>
</div>
</body>
</html>