<?php 
require "glinks.php";
	$x 					= json_decode($links,true);
	$sz					= count($x["links"]);
require "funcz/m.functionz.php";
print head("de","links","links.php","Y");
?>
<body>
<div data-role="page" id="pageone">
  <div data-role="header">
     <?php print top("de","Linken","Linken");?>
     </div>
	<div data-role="main" class="ui-content">
		<table CELLPADDING="10">
			<?php 
			for($i=0;$i<$sz;$i++)
			{
				$y 		= $x["links"][$i]; 
				$img	= $y["img"];
				$ttl	= $y["ttl"];
				$href	= $y["href"];
			    alink($img,$ttl,$href);
			}
		   ?>
			</table>
    </div>
  <div data-role="footer">
     <?php print foot();?>
  </div>
</div> 
</body>
</html>
