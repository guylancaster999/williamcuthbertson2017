 <?php 
require "pics_e.php";
session_start();
$_SESSION["gpics"]	= $gpics;	
$x 					= json_decode($gpics,true);
$sz					= count($x["gallery"]);
require "funcz/m.functionz.php";
print head("ch","照片","foto_ch.php","Y");
?>
<body> 
<div data-role="page" id="pageone">
	<div data-role="header">
		<?php print  top("ch","照片","照片");?>
	</div>
    <br/>
<?php
	$col		= 1;
	$endblock	= false;
	
	for ($i=0;$i<$sz;$i++)
	{ 	
		$y 			= $x["gallery"][$i]; 
		$picSmall	= $y["picSmall"];
		$picLarge	= $y["picLarge"];
		$picTtl		= $y["picTtl"];
		$flag		= $y["flag"];
		$copy		= $y["copy"];
		
		switch($flag)
		{
			case "T":
			
			if ($endblock) print '</div>
			</div>';
		    print '<div data-role="header" align="center">'.$picTtl.'</div>';
			$endblock	= false;
			$col		= 1;
			break;
				
			case "P":
				switch($col)
				{
				case 1:
					if ($endblock)
					{
						print '</div></div>';
						$endblock	= false;
					}
					print '<div data-role="main" class="ui-content">
						<div class="ui-grid-c">
						<div class="ui-block-a">';
					photo($picLarge,$picSmall,"照片",$picTtl." ".$copy,"m.foto_ch.php","ch");
					print '</div>';
					$col		=2;
					$endblock	=true;
				break;
	  
				case 2:
					print '<div class="ui-block-b">';
					photo($picLarge,$picSmall,"照片",$picTtl." ".$copy,"m.foto_ch.php","ch");
					print '</div>';
					$col		=3;
					$endblock	=true;
					break;
				case 3:
					print '<div class="ui-block-c">';
					photo($picLarge,$picSmall,"照片",$picTtl." ".$copy,"m.foto_ch.php","ch");
	
					print '</div>';
					$endblock	= true;
					$col		= 4;
					break;
			 case 4:
				print '<div class="ui-block-d">';
				photo($picLarge,$picSmall,"照片",$picTtl." ".$copy,"m.foto_ch.php","ch");
				print '</div>';
				$endblock	= true;
				$col		= 1;
	    	}//switch col
			
    	}//switch p/t
	}//for
//	if ($endblock) print "</div></div>";
	?>
 </div>
 <div align='center'>Click on images to see full size</div>
 </div>
 <div data-role="footer">
      <?php print foot();?>
  </div>
  </div> 
</body>
</html>