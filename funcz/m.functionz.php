<?php
function head($lan="de",$scrnTtl="Home",$url="",$mbl="N")
{
	$ret= '<!DOCTYPE html>';
   switch ($lan)
	{
	   case "de":
       $ret.='<html lang="de">';
	   break;
	  
		case "ch":
		$ret.=' <html lang="zh">';
 	   break;
	   
	   default:
		$ret.=' <html lang="en">';
	 }
	$ret.='<head>
  	<meta charset="utf-8"/> 
    <meta name="msvalidate.01" content="6E94CF0EA70F18D4781290A413CB5797" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   	<meta name="viewport" content="width=device-width, initial-scale=1" />
   	<meta name="author" content="Guy Lancaster" />
   	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
   	<link rel="icon" href="favicon.ico" type="image/x-icon" />';
    if (strlen($url)>0)	$ret.='<link rel="canonical" href="http://cuthbertson.de/'.$url.'" >';
	$ret.='<META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW">';
	switch ($lan)
	{
	   case "de":
		$ret.='<title>William Cuthbertson klassischer Pianist - '.$scrn.'</title>';
	 	break;
		
		case "ch":
		$ret.='<title>William Cuthbertson Classical Pianist - '.$scrn.'</title>';
	 	break;
		
		default:
		$ret.='<title>William Cuthbertson - Classical Pianist - '.$scrn.'</title>';   
	     }
	$ret.=' <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
           <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
           <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>';
	$ret.="<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT:400,700' rel='stylesheet' type='text/css'>";
	$ret.='<link rel="stylesheet" href="css/m.css">';
    $ret.='</head>';
    return $ret;
	}
function topRight($e="index_e.php",$d="index.php",$c="index_ch.php")
{
	$ret ='<div class="row">
           <div class="col-sm-2">'.langs($e,$d,$c).'</div>';
	$ret.='<div class="col-sm-8 col-8 col-lg-8 col-md-8"><h1>William Cuthbertson</h1></div>';
    $ret.='<div class="col-sm-2 col-2 col-md-2 col-lg-2 tog" >'.toggle().'</div>
          </div>';
	$ret.="<a id='top'></a>";
   print $ret;
}
function on($t)
{	
	$qt	="'";
    $ret =' onmouseover="location.assign('.$qt.$t.$qt.'); " ';
 	return ($ret);
}
function langs($e,$d,$c)
{   
    $e='http://cuthbertson.de/'.$e;
	$d='http://cuthbertson.de/'.$d;
	$c='http://cuthbertson.de/'.$c;
	$ret="<div class='langswap'>";
	$ret.='<a href="'.$e.'" title="English" ';
	$ret.= on($e);
	$ret.='>';
	$ret.='<img src="img/english.gif" alt="English" 	height="20"/>';
	$ret.='</a>';	
	$ret.='<a href="'.$c.'" title="Chinese" ';
	$ret.= on($c);
	$ret.='>';
    $ret.='<img src="img/chinese.GIF" alt="Chinese" height="20"/>';
	$ret.='</a>';	
	$ret.='<a href="'.$d.'" title="German" ';
	$ret.= on($d);
	$ret.='>';
    $ret.='<img src="img/deutsch.gif" alt="Deutsch"    height="20"/>';
	$ret.='</a>';
	$ret.="</div>";
 return $ret;
}
function abutton($url,$ttl)
{
	$tgt='http://cuthbertson.de/'.$url;
	$ret= '<li><a href="'.$tgt.'" title="'.$ttl.'" id="'.$ttl.'" ';
    $ret.= '>';
	$ret.= $ttl;
	$ret.= '</a></li>';
	return $ret;
}

function menu($lan)
{
	$ret="<nav>";
	switch($lan)
	{
		case "de":
		$ret.='<div data-role="navbar" data-grid="d">
		<ul>'.abutton('m.index.php','Homepage').
			abutton('m.program.php','Program').
			abutton('m.repertoire.php','Repertoire').
			abutton('m.teaching.php','Unterricht').
			abutton('m.kinder.php','Kinder').
		'</ul>
   </div>
   <div data-role="navbar" data-grid="d">
    <ul>'.abutton('m.meisterkurse.php','Meisterkurs').
		abutton('m.concert.php','Konzerte').
		abutton('m.video.php','Video').
		abutton('m.presse.php','Presse').
		abutton('m.foto.php','Fotografien').
	'</ul>
   </div>
   <div data-role="navbar" data-grid="d">
    <ul>'.abutton('m.bilde.php','Skizzen').
	     abutton('m.bio.php','Biographie').
		 abutton('m.links.php','Links').
		 abutton('m.kontakt.php','Kontakt').
		abutton('m.news.php','Aktuelles').
	 '</ul>
   </div>
   <div data-role="navbar" data-grid="d">
       <ul>'.  
	     abutton('m.index_e.php','English').
			abutton('m.index_ch.php','中文').
	'</ul>
   </div>';
   break;
   
   case "en":
   $ret='<div data-role="navbar" data-grid="d">';
	$ret.='<ul>'.abutton('m.index_e.php','Homepage').
		      abutton('m.program_e.php','Programme').
			  abutton('m.repertoire_e.php','Repertoire').
			  abutton('m.teaching_e.php','Teaching').
			  abutton('m.meisterkurse_e.php','Master Class').
		 '</ul> ';
		$ret.='</div>';
	    $ret.='<div data-role="navbar" data-grid="d">
		<ul>'.abutton('m.concert_e.php','Concerts').
			  abutton('m.video_e.php','Video').
			  abutton('m.presse_e.php','Press').
			  abutton('m.foto_e.php','Photographs').
		      abutton('m.bilde_e.php','Sketches'). 
			  '</ul> ';
		$ret.='</div>';
	    $ret.='<div data-role="navbar" data-grid="d">
		<ul>'.abutton('m.bio_e.php','Biography').
			  abutton('m.links_e.php','Links').
			  abutton('m.kontakt_e.php','Contact').
			  abutton('m.news_e.php','News').
			  abutton('m.index.php','Deutsch').
	 '</ul> ';
		$ret.='</div>';
	    $ret.='<div data-role="navbar" data-grid="d">
		<ul>'. abutton('m.index_ch.php','中文').		  
		'</ul>
   </div>';   
   
   break;
   
   case "ch":
   $ret='<div data-role="navbar" data-grid="d">';
	$ret.='<ul>'.abutton('m.index_ch.php','首页').
		      abutton('m.program_ch.php','节目').
			  abutton('m.repertoire_ch.php','剧目').
			  abutton('m.teaching_ch.php','钢琴课程').
			  abutton('m.meisterkurse_ch.php','大师班').
		 '</ul> ';
		$ret.='</div>';
	    $ret.='<div data-role="navbar" data-grid="d">
		<ul>'.abutton('m.concert_ch.php','音乐会').
			  abutton('m.video_ch.php','视频').
			  abutton('m.presse_ch.php','媒体评价').
			  abutton('m.foto_ch.php','照片').
		      abutton('m.bilde_ch.php','速写').  
			  '</ul> ';
		$ret.='</div>';
	    $ret.='<div data-role="navbar" data-grid="d">
		<ul>'.abutton('m.bio_ch.php','生平经历').
			  abutton('m.links_ch.php','链接').
			  abutton('m.news_ch.php','新闻').
			  abutton('m.kontakt_ch.php','链接').
			  abutton('m.index.php','Deutsch').
			  '</ul> ';
		$ret.='</div>';
	    $ret.='<div data-role="navbar" data-grid="d">
		<ul>'.  abutton('m.index_e.php','English').
		'</ul>
   </div>';   
   break;
   default:
   }
   	$ret.="<nav>";
	return $ret;
}
function  linkedPhoto($txt,$pic,$album,$fromUrl,$lan)
{
   $ret ='<a href="m.foto_large.php';
   $ret.='?lan='.$lan;
   $ret.='&amp;album='.$album;
   $ret.='&amp;photoTtl='.$txt;
   $ret.='&amp;fromUrl='.$fromUrl;
   $ret.='&amp;photoFile='.$pic;
   $ret.='">';
   $ret.= $txt;
   $ret.='</a>';
  print $ret; 
}
function exp_title($ttl,$lan="en")
{
	$ret=' title="'.$ttl.' - ';
    switch ($lan)
   	{
		case "de":
     	$ret.='Klicken für Bild in voller Größe zu sehen';
   		break;
		case "ch":
     	$ret.='点击查看原图';
   		break;
		default:
     	$ret.='Click to see full size';
	}
   	$ret.='" ';
	return $ret;
}
function  photo($pic,$pic_tn,$album,$photoTtl,$fromUrl,$lan,$cls="",$cpy="")
{
   $photoTtl=respace($photoTtl);
   $ret ='<a href="m.foto_large.php';
   $ret.='?lan='.$lan;
   $ret.='&amp;album='.$album;
   $ret.='&amp;photoTtl='.$photoTtl;
   $ret.='&amp;fromUrl='.$fromUrl;
   $ret.='&amp;photoFile='.$pic;
   $ret.='&amp;cpy='.$cpy;
   $ret.='" ';
   $ret.=exp_title($photoTtl,$lan);
   $ret.='>';
   $ret.= '<img src="img/'.$pic_tn.'" alt="'.$photoTtl.'" class="img-responsive  img-rounded '.$cls.'">';
   $ret.='</a>';
   print $ret; 
}
function  dophotorightlinked($pic,$ttl,$url)
{
     $ttl=	respace($ttl);
     $ret.= '<a href="'.$url.'" ';
	 $ret.=' title="'.$ttl.'" ';
     $ret.=' style="font-size:9pt">';
	 $ret.= '<img src="img/'.$pic.'" alt="'.$ttl.'" alialign="right" />';
     $ret.= '</a>';
	 return  $ret; 
}

function photorightlinked($pic,$ttl,$url)
{ 
	return  dophotorightlinked($pic,$ttl,$url);
}
function respace($c)
{
	return str_replace("%20", " ",$c);
}
function  photocenter($pic,$ttl)
{
	 $ttl=respace($ttl);
     $ret.= '<a href="#" title="'.$ttl.'" >';
	 $ret.= '<img src="img/'.$pic.'" alt="'.$ttl.'" class="picturecenter" />';
     $ret.= '</a>';
	 print $ret; 
}
function  photorightnolink($pic,$ttl)
{
	 $ttl=respace($ttl);
     $ret.= '<a href="#" title="'.$ttl.'" >';
	 $ret.= '<img src="img/'.$pic.'" alt="'.$ttl.'" align="right"  class="picturerightfs" />';
     $ret.= '</a>';
	 print $ret; 
}
function  photonolink($pic,$ttl)
{
     $ttl=respace($ttl);
     $ret.='<a href="#" ';
	 $ret.=' title="'.$ttl.'" ';
     $ret.=' >';
	 $ret.= '<img src="img/'.$pic.'" alt="'.$ttl.'" class="piccenter" >';
     $ret.= '</a>';
	 print $ret; 
}
function  photorightfs($pic,$pic_tn,$album, $photoTtl, $fromUrl, $lan)
{ 
  $photoTtl=respace($photoTtl);
   $ret ='<a href="m.foto_large.php';
  $ret.='?lan='.$lan;
  $ret.='&amp;album='.$album;
  $ret.='&amp;photoTtl='.$photoTtl;
  $ret.='&amp;fromUrl='.$fromUrl;
  $ret.='&amp;photoFile='.$pic;
  $ret.='" ';
  $ret.=exp_title($photoTtl,$lan);
  $ret.= '>';  
  $ret.= '<img src="img/'.$pic_tn.'" align="right" class="picturerightfs" alt="'.$photoTtl.'" />';
  $ret.='</a>'; 
  print $ret; 
}
function  photoright($pic,$pic_tn,$album, $photoTtl, $fromUrl, $lan)
{ 
	$photoTtl=respace($photoTtl);
    $ret ='<a href="m.foto_large.php';
	$ret.='?lan='.$lan;
	$ret.='&amp;album='.$album;
	$ret.='&amp;photoTtl='.$photoTtl;
	$ret.='&amp;fromUrl='.$fromUrl;
	$ret.='&amp;photoFile='.$pic;
	$ret.='" ';
  $ret.=exp_title($photoTtl,$lan);
  $ret.= '>';  
  $ret.= '<img src="img/'.$pic_tn.'" align="right" class="picright img-responsive" alt="'.$photoTtl.'" />';
  $ret.='</a>'; 
  print $ret; 
}
function top($lang,$ttl1,$ttl2)
{
	$ret='<h1>William Cuthbertson</h1>';
    $ret.=menu($lang,$ttl1);
	$ret.='<h2 align="center">'.$ttl2.'</h2>';
	$ret.='<a name="top" id = "top"></a>';
	return $ret;
}
function foot()   
{
	$qt="'";
	$ret='<footer>
	<div align="center">
     <a data-ajax="false" class="top ui-btn ui-icon-arrow-u ui-btn-icon-left"
	 data-role="button" href="#top">Top of page</a>
	 </div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
   <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['.$qt.'_setAccount'.$qt.','.$qt.'UA-3773540-43'.$qt.']);
  _gaq.push(['.$qt.'_trackPageview'.$qt.']);
  (function() {
    var ga = document.createElement('.$qt.'script'.$qt.'); ga.type = '.$qt.'text/javascript'.$qt.'; 
	ga.async = true;
    ga.src = ('.$qt.'https:'.$qt.' == document.location.protocol ? '.$qt.'https://ssl'.$qt.' : '.$qt.'http://www'.$qt.') + '.$qt.'.google-analytics.com/ga.js'.$qt.';
   var s = document.getElementsByTagName('.$qt.'script'.$qt.')[0]; s.parentNode.insertBefore(ga, s);
  })();
   $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    }); 
 </script>
 </footer>';
return $ret;
}
function alink($img, $ttl, $lnk)
{
print	'<a href="'.$lnk.'" title="'.$ttl.'"><img src="img/'.$img.'" alt="'.$ttl.'" width="150"></a> 
		<br/>
		<a href="'.$lnk.'"  title="'.$ttl.'" style="font-size:10pt">'.$ttl.'</a> 
<br/><br/>';
		return;
}
 ?> 