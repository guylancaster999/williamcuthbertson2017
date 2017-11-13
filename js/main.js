// JavaScript Document
function greyout(f1,f2)
{
	if (f1==f2)
	{
		ret = '<span class="gr">'+f1+'</span>';
	}
	else
	{
		ret = f1;
	}
	return ret;
}

 
function hdr(scrn,lan,ttl)
{
	var ret="";
	ret+='<!DOCTYPE html>';
	ret+='<html lang="en">';
	ret+='<head>';
	ret+='<title>William Cuthbertson - '+ttl+'</title>';
	ret+='<meta charset="utf-8">';
	ret+='<meta name="viewport" content="width=device-width, initial-scale=1">';
	ret+='<meta name="keywords" content="William , Cuthbertson, Pianist,'+ttl+'"/> ';
	ret+='<meta name="description" content="William , Cuthbertson, Pianist, '+ttl+'"/>';
	ret+='<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">';
	ret+='<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>';
	ret+='<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>';
	ret+='<link rel="stylesheet" href="css/main.css"/>';
	
switch (lan)
{case 'ch':
   ret+='<meta name="language" content="Chinese">';
   ret+='<meta http-equiv="content-language" content="ch">';
   ret+='<title>William Cuthbertson Classical Pianist - '+ttl+'</title>';
   ret+='<meta name="keywords" content=" 肖邦，贝多芬,   钢琴,  作曲家,  教师, Piano, Klavier, Chopin, Beethoven, William, Cuthbertson, Waldkirch, Konzerte,'+scrn+' " />';
	ret+='<meta name="description" content="William Cuthbertson - Classical Pianist, Composer, Teacher,'+scrn+' " />';
	ret+='</head>';
    ret+='<body lang="ch" ><a id="top"></a>';
    ret+='<div class="block1">&nbsp;</div>';
    ret+=' <h1>';
    ret+='<span class="straptext2"><a href="index_ch.php">William</a></span>';
    ret+='<span class="straptext3"><a href="index_ch.php">Cuthbertson</a></span>';
    ret+='<span class="linktext">';
    ret+='<br/>';
    ret+='<a href="program_ch.php" title="Program">'+greyout('节目',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="repertoire_ch.php" title="Repertoire">'+greyout('剧目',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="teaching_ch.php" title="Klavierunterricht, Coaching  und Begleitung">'+greyout('钢琴课程，辅导和伴奏',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="masterclasses_ch.php" title="Meisterkurse">'+greyout('大师班',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="bio_ch.php" title="Biographie">'+greyout('生平经历',scrn)+' </a>';
    ret+='<br/>';
    ret+='<a href="concert_ch.php" title="Konzerte">'+greyout('音乐会',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="video_ch.php" title="Youtube Video">'+greyout('视频',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="presse_ch.php" title="Presse">'+greyout('媒体评价',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="foto_ch.php" title="Fotografien">'+greyout('照片',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="bilde_ch.php" title="Skizzen">'+greyout('速写',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="links_ch.php" title="Links">'+greyout('链接',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="kontakt_ch.php" title="Kontakt">'+greyout('联系',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="sitemap_ch.php" title="Sitemap">'+greyout('网站地图',scrn)+'</a><br/><br/></span>';
    ret+='</h1>';
    ret+='<div class="flagpos0"><a href="index_ch.php" title="Chinese" class="languagex">中国</a></div>';
    ret+='<div class="flagpos1"><a href="index.php" title="Deutsch Sprache" class="language">Deutsch</a></div>';
    ret+='<div class="flagpos2"><a href="index_e.php"  title="English Language Version" class="language">English</a></div>';
    break;

case 'de':
    ret+='<meta name="language" content="Deutsch">';
    ret+='<meta http-equiv="content-language" content="de">';
	ret+='<title>William Cuthbertson klassischer Pianist - '+ttl+'</title>';
	ret+='<meta name="keywords" content="Piano, Klavier, Chopin, Beethoven, William, Cuthbertson, Waldkirch, Konzerte,'+scrn+' " />';
	ret+='<meta name="description" content="William Cuthbertson - Pianist, Komponist, Lehrer, Composer, Teacher,'+scrn+' " />';
	ret+='</head>';
	
    ret+='<body lang="de" ><a id="top"></a>';
    ret+='<div class="block1">&nbsp;</div>';
    ret+=' <h1>';
    ret+='<span class="straptext2"><a href="index.php" title="Homepage">William</a></span> ';
    ret+='<span class="straptext3"><a href="index.php" title="Homepage">Cuthbertson</a></span> ';
    ret+='<span class="linktext">';
    ret+='<br/>';
    ret+='<a href="program.php" title="Program">'+greyout('Program',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="repertoire.php" title="Repertoire">'+greyout('Repertoire',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="teaching.php" title="Klavierunterricht, Coaching  und Begleitung">'+greyout('Unterricht',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="kinder.php"   title="Klavierunterricht f&uuml; Kinder">'+greyout('Kinder',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="meisterkurse.php" title="Meisterkurse">'+greyout('Meisterkurse',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="bio.php" title="Biographie">'+greyout('Biographie',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="concert.php" title="Konzerte">'+greyout('Konzerte',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="video.php" title="Youtube Video">'+greyout('Video',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="presse.php" title="Presse">'+greyout('Presse',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="foto.php" title="Fotografien">'+greyout('Fotografien',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="bilde.php" title="Skizzen">'+greyout('Skizzen',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="links.php" title="Links">'+greyout('Links',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="kontakt.php" title="Kontakt">'+greyout('Kontakt',scrn)+'</a>';
    ret+='<br/>';
    ret+='<a href="sitemap.php" title="Sitemap">'+greyout('Sitemap',scrn)+'</a></span></h1>';
    ret+='<div class="flagpos0"><a href="index_ch.php" title="Chinese" class="languagex">中国</a></div>';
    ret+='<div class="flagpos1"><a href="index.php" title="Deutsch Sprache" class="languagex">Deutsch</a></div>';
    ret+='<div class="flagpos2"><a href="index_e.php"  title="English Language Version" class="language">English</a></div>';
    break;
	
case 'en':
 ret+='<title>William Cuthbertson - Classical Pianist - '+ttl+'</title>';   
 ret+='<meta http-equiv="content-language" content="en">';
 ret+='<meta name="language" content="English">';
 ret+='<meta name="keywords" content="Piano, Chopin, Beethoven, William, Cuthbertson, Waldkirch, Concerts,'+scrn+' " />';    
 ret+='<meta name="description" content="William Cuthbertson - Pianist, Accompanyist, Composer, Teacher,'+scrn+' " />';    
 ret+='</head>';
  ret+='<body lang="en"><a id="top"></a>';    
 ret+='<div class="block1">&nbsp;</div>';    
 ret+=' <h1>';    
 ret+='<span class="straptext2"><a href="index_e.php">William</a></span> ';    
 ret+='<br/>';    
 ret+='<span class="straptext3"><a href="index_e.php">Cuthbertson</a></span> ';    
 ret+='<span class="linktext">';    
 ret+='<br/> ';    
 ret+='<a href="program_e.php" title="Program">'+greyout('Programme',scrn)+'</a>';    
 ret+='<br/>';    
 ret+='<a href="repertoire_e.php" title="Repertoire">'+greyout('Repertoire',scrn)+'</a>';    
 ret+='<br/>';    
 ret+='<a href="teaching_e.php" title="teaching, coaching &amp; accompanying">'+greyout('Teaching',scrn)+'</a>';    
 ret+='<br/>';    
 ret+='<a href="masterclasses_e.php" title="Master Class">'+greyout('Master Class',scrn)+'</a>';    
 ret+='<br/>';    
 ret+='<a href="bio_e.php" title="Musical Biography">'+greyout('Biography',scrn)+' </a>';    
 ret+='<br/>';    
 ret+='<a href="concert_e.php" title="Concerts">'+greyout('Concerts',scrn)+' </a>';    
 ret+='<br/>';    
 ret+='<a href="video_e.php" title="Video">'+greyout('Video',scrn)+'</a>';    
 ret+='<br/>';    
 ret+='<a href="presse_e.php" title="Press Reviews">'+greyout('Press',scrn)+'</a>';    
 ret+='<br/>';    
 ret+='<a href="links_e.php" title="links">'+greyout('Links',scrn)+'</a>';    
 ret+='<br/>';    
 ret+='<a href="foto_e.php" title="Photographs">'+greyout('Photographs',scrn)+'</a>';    
 ret+='<br/>';    
 ret+='<a href="bilde_e.php" title="Sketches">'+greyout('Sketches',scrn)+'</a>';    
 ret+='<br/>';    
 ret+='<a href="kontakt_e.php" title="Contact Details">'+greyout('Contact',scrn)+'</a>';    
 ret+='<br/>';    
 ret+='<a href="sitemap_e.php" title="Sitemap">'+greyout('Sitemap',scrn)+'</a>';    
 ret+='<br/><br/>';    
 ret+='</span>';    
 ret+='</h1>';    
 ret+='<div class="flagpos0"><a href="index_ch.php" title="Chinese" class="language">中国</a></div>';    
 ret+='<div class="flagpos1"><a href="index.php" title="German" class="language">German</a></div>';    
 ret+='<div class="flagpos2"><a href="index_e.php" title="English Language Version" class="languagex">English</a></div>';
 break;
}
return ret;
}

function foot()
{
	var ret="";
    ret+='<br/><br/>';
    ret+='<div align="center"><a href="#top"><button type="button"  class="btn btn-default btn-sm"><span class="glyphicon glyphicon-arrow-up"></span> Up</button></a></div>';
document.write(ret);
}
 