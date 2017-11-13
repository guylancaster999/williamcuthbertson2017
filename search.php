<?php
require "funcz/functionz.php";
$lan	=$_POST["lan"];
switch($lan)
{
	case "de":	print head("de","Homepage","index.php");
	            break;
	case "en":	print head("en","Homepage","index_e.php");
	            break;
	case "ch":	print head("ch","Homepage","index_ch.php");
	            break;
}
		
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
		$aPgURL	      = array('index.php','news.php','program.php','repertoire.php','teaching.php','kinder.php','meisterkurse.php','concert.php','video.php','presse.php','foto.php','bilde.php','bio.php','links.php','kontakt.php');
		$aPgTitle	  = array('Homepage','News','Program','Repertoire','Untericht','Kinder','Meisterkurs','Konzerte','Video','Presse','Fotos','Shizzen','Biographie','Links','Kontakt');
		$searchTitle  ="Suche";
		$notFound     ="nicht gefunden";
		$searchResults="Suchergebnisse für";
		break;

		case "ch":
		$aPgURL	      = array('index_ch.php','news_ch.php','program_ch.php','repertoire_ch.php','teaching_ch.php','meisterkurse_ch.php','concert_ch.php','video_ch.php','presse_ch.php','foto_ch.php','bilde_ch.php','bio_ch.php','links_ch.php','kontakt_ch.php');
		$aPgTitle	  = array('Homepage',"News",'Program','Repertoire','Untericht','Masterclass','Concerts','Video','Press','Photos','Sketches','Biography',	'Links','Contact');
		$searchTitle  ="搜";
		$notFound	    ="未找到";
		$searchResults= "搜索结果 ";
		break;

		default:
		$aPgURL	      = array('index_e.php','news_e.php','program_e.php','repertoire_e.php','teaching_e.php','meisterkurse_e.php','concert_e.php','video_e.php','presse_e.php','foto_e.php','bilde_e.php','bio_e.php','links_e.php','kontakt_e.php');
		$aPgTitle	  =array('Homepage','News','Programme','Repertoire','Teaching','Masterclass','Concerts','Video','Press','Photos','Sketches','Biography','Links','Contact');
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
switch ($aCount)
{
	case 0:print $s." Not found";
	break;
	
	default:
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
}	
	
?> 
<body>
<div class="container-fluid">
	<div class="row">
         	<?php print  menu("de","Homepage",'index_e.php','index.php','index_ch.php');?>
			    	<?php shead('Search Results');?> 
	 		   <main>
             <div class="row">
               <div class="col-12 col-sm-12 col-md-12  col-lg-12">
			   <?php 
			   $s	=$_POST["s"];
			   $lan	=$_POST["lan"];
			   print search($s,$lan);
			    ?>
         </div>
		 </div>
           </main>
		<?php print foot();	?>	   
			</div>
		</div>
		 </div>
		  	</div>
			</div>	
 	<?php  print endPage();?>
</body>
</html>
