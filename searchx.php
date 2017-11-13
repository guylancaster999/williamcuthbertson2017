<html>
<head>
</head>
<body>
Search
 <?php
 var_dump($_POST);
// require "funcz/functionz.php";
print "s=".$_POST["s"];
//search($_POST["s"],$_POST["lan"]);
?>
 </body>
</html>

<?php
/*

function curl_download($Url)
{
    if (!function_exists('curl_init'))
	{
        die('Sorry cURL is not installed!');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_REFERER, "cuthbertson.de");
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.130 Safari/537.38");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
function search($s,$lan)
{
	$pgfound	= "";
	$aCount		= 0;
	$aBestPgTxt	= "";
	$aBestPgPtr	= "";
	$aFound		= array(0,0,0,0,0,0,0,0,0,0,0,0,0,0);

	switch($lan)
	{
		case "de":
		$aPgURL	      = array('index.php','program.php','repertoire.php','teaching.php','kinder.php','meisterkurse.php','concert.php','video.php','presse.php','foto.php','bilde.php','bio.php','links.php','kontakt.php');
		$aPgTitle	    = array('Homepage','Program','Repertoire','Untericht','Kinder','Meisterkurs','Konzerte','Video','Presse','Fotos','Shizzen','Biographie','Links','Kontakt');
		$searchTitle  ="Suche";
		$notFound     ="nicht gefunden";
		$searchResults="Suchergebnisse für";
		break;

		case "ch":
		$aPgURL	      = array('index_ch.php','program_ch.php','repertoire_ch.php','teaching_ch.php','meisterkurse_ch.php','concert_ch.php','video_ch.php','presse_ch.php','foto_ch.php','bilde_ch.php','bio_ch.php','links_ch.php','kontakt_ch.php');
		$aPgTitle	    = array('Homepage','Program','Repertoire','Untericht','Masterclass','Concerts','Video','Press','Photos','Sketches','Biography',	'Links','Contact');
		$searchTitle  ="搜";
		$notFound	    ="未找到";
		$searchResults= "搜索结果 ";
		break;

		default:
		$aPgURL	      = array('index_e.php','program_e.php','repertoire_e.php','teaching_e.php','meisterkurse_e.php','concert_e.php','video_e.php','presse_e.php','foto_e.php','bilde_e.php','bio_e.php','links_e.php','kontakt_e.php');
		$aPgTitle	    =array('Homepage','Programme','Repertoire','Teaching','Masterclass','Concerts','Video','Press','Fotos','Sketches','Biography','Links','Contact');
		$searchTitle  ="Search";
		$notFound	    ="not found";
		$searchResults="Search results for";
	}

	for ($i=0; $i<count($aPgTitle); $i++)
	{
		$url	   = $aPgURL[$i];
    $pgtxt	 = curl_download("cuthbertson.de/".$url);
    $startPos= strpos ($pgtxt, "<body>");
    $pgtxt  = substr($pgtxt,$startPos);
    $pos= stripos( strtoupper ($pgtxt),  strtoupper ($s));
	if ($pos!= false)
  	{
			$aCount++;
			$aFound[$i]	= 1;
			$aBestPgTxt	= $pgtxt;
			$aBestPgPtr	= $i;
		}
	}
 	switch($aCount)
	{
	case 0: print head($lan,$searchTitle,"index.php");
	?>
	<body>
		<div id="wrapper">

		<div id="sidebar-wrapper">
            <?php print menu($lan,$searchTitle);?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
               <?php topRight();?>
                <div class="row">
                <div class="col-lg-12">
                   <h2><?php print $searchTitle;?></h2>
                </div>
             </div>
             <div class="row">
               <div class="col-lg-12">
					<?php print "<br/>".$s." ".$notFound;	?>
				</div>
              </div>
					 </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
 </body>
</html>
<?php
	break;

	case 1:
	print $aBestPgTxt;
	break;

	default:
	print head($lan,$searchTitle,"search.php");
	?>
	<body>
		<div id="wrapper">
		<div id="sidebar-wrapper">
            <?php print menu($lan,$searchTitle);?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
               <?php topRight();?>
                <div class="row">
                <div class="col-lg-12">
                      <h2><?php print $searchTitle;?></h2>
                </div>
             </div>
             <div class="row">
               <div class="col-lg-12">
				<?php
				print $searchResults." ".$s;
				print "<ul>";
				for ($i=0; $i<count($aPgTitle); $i++)
				{
					if ($aFound[$i]==1)
					{
						print'<li><a href="'.$aPgURL[$i].'">'.$aPgTitle[$i].'</a></li>';
					}
				}
				print "</ul>";
			}
			?>
			</div>
            </div>
 			   <?php print foot();?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
		<?php  print endPage();?>
*/
</body>
</html>
