<?php 
require "funcz/m.functionz.php";
$lan		=$_REQUEST["lan"];
$album   	=$_REQUEST["album"];
$photoFile  =$_REQUEST["photoFile"];
$photoTtl	=$_REQUEST["photoTtl"];
$fromUrl	=$_REQUEST["fromUrl"];
print head("de","Foto","foto_large.php","Y");
?>
<body>
<div data-role="page" id="pageone">
  <div data-role="header">
    <?php print top("de","Foto",$photoTtl);?>
   </div>
  <div data-role="main" class="ui-content" align="center">
    <a href="<?php print $fromUrl?>" title="<?php print $photoTtl;?>">
		<img src="img/<?php print $photoFile;?>" alt="<?php print $photoTtl;?>" width="640"/>
	</a>
 <br/>
<br />
<div class="alpha">
<?php
switch($lan)
{
	case "de":
       print 'Klicken Sie <a href="'.$fromUrl.'" title="'.$photoTtl.'">hier</a>  um zurückzukehren';
	break;
    default:
	     print 'Click <a href="'.$fromUrl.'" title="'.$photoTtl.'">here</a> to return.';
}
?>
<br/><br/>
</div>                 
</div>
 <div data-role="footer">
      <?php print foot();?>
  </div>
</div>
</body>
</html>