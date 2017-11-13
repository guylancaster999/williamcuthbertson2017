<?php 
require "pics.php";
session_start();
$_SESSION["gpics"]	= $gpics;	
$x 					= json_decode($gpics,true);
$sz					= count($x["gallery"]);
require "funcz/m.functionz.php";
print head("de","fotos","foto.php","Y");
?>
<body>
<div data-role="page" id="pageone">
	<div data-role="header">
		<?php print top("de","Fotos","Fotos");?>
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
		$copy 		= $y["copy"];
		
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
							photo($picLarge,$picSmall,"Photos",$picTtl,"m.foto.php","de","",$copy);
						print '</div>';
					$col		=2;
					$endblock	=true;
				break;
	  
				case 2:
					print '<div class="ui-block-b">';
					photo($picLarge,$picSmall,"Photos",$picTtl,"m.foto.php","de","",$copy);
					print '</div>';
					$col		=3;
					$endblock	=true;
					break;
				case 3:
					print '<div class="ui-block-c">';
					photo($picLarge,$picSmall,"Photos",$picTtl,"m.foto.php","de","",$copy);
					print '</div>';
					$endblock	= true;
					$col		= 4;
					break; 
			 case 4: 
				print '<div class="ui-block-d">';
				photo($picLarge,$picSmall,"Photos",$picTtl,"m.foto.php","de","",$copy);
				print '</div>';
				$endblock	= true;
				$col		= 1;
	    	}//switch col
			
    	}//switch p/t
	}//for
//	if ($endblock) print "</div></div>";
	?>
 </div>
 <div align='center'>Klicken Sie auf ein Foto in voller Größe zu sehen</div>
 </div>
 <div data-role="footer">
      <?php print foot();?>
  </div>
  </div> 
</body>
</html>