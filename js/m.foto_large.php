<?php 
require "funcz/m.functionz.php";
$lan		=$_REQUEST["lan"];
$album   	=$_REQUEST["album"];
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
              <div class="row">
                <div class="col-lg-12">         
					  <a href="<?php print $fromUrl;  ?>"><img src="img/<?php print $photoFile;?>"   
							  class="img-responsive img-rounded picturecenter" alt="<?php print $photoTtl;?>"/></a>
					 <br/>
					<br />
					<div class="alpha">
					<?php
					switch($lan)
					{case "de":
					   print "Klicken Sie auf das Foto, um zurückzukehren";
					   break;
					   
					   case "ch":
					   print  "点击照片返回";
					   break;
					default:
					  print "Click on the Photo to return";
					}
					?></div> 
					 
		<div data-role="footer">
     <?php print foot();?>
  </div>
</div>
</body>
</html>