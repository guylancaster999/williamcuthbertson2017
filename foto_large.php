<?php 
require "funcz/functionz.php";
$lan		=$_REQUEST["lan"];
$album   	=$_REQUEST["album"];
$photoFile  =$_REQUEST["photoFile"];
$photoTtl	=addSp($_REQUEST["photoTtl"]);
$fromUrl	=$_REQUEST["fromUrl"];
print head("de","homepage");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php
            print  menu($lan,$albumTtl,"foto_e.php","foto.php","foto_ch.php");
			?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
            <?php topRight();
			shead(  $photoTtl);?> 
			<main>
              <div class="row">
                <div class="col-lg-12">         
					  <a href="<?php print $fromUrl; ?>"><img src="img/<?php print $photoFile;?>" class="img-responsive img-rounded " alt="<?php print $photoTtl;?>"/></a>
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
					</main>
					<?php print foot();?>
					 </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->

	<?php  print endPage();?>
	</body>
</html>
