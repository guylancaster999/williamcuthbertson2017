<?php 
session_start();  
$gpics ='{"gallery":[';
$gpics.='{"flag":"T","picTtl":"Meisterkurse 2016"},	
{"flag":"P","grpTtl":"Meisterkurse:2016","picLarge":"17thmasterclass_1.jpg","picSmall":"17thmasterclass_1_120.jpg","picTtl":"William Cuthbertson mit Student","copy":"Foto:Sanja Stefanovic"},
{"flag":"P","grpTtl":"Meisterkurse:2016","picLarge":"17thmasterclass_2.jpg","picSmall":"17thmasterclass_2_120.jpg","picTtl":"William Cuthbertson mit Studenten","copy":"Sanja Stefanovic"},
{"flag":"P","grpTtl":"Meisterkurse:2016","picLarge":"17thmasterclass_3.jpg","picSmall":"17thmasterclass_3_120.jpg","picTtl":"William Cuthbertson mit Studenten","copy":"Foto:Sanja Stefanovic"},';
$gpics.='{"flag":"T","picTtl":"Konzerte 2016"},
{"flag":"P","grpTtl":"Konzerte 2016","picLarge":"2006_1.jpg","picSmall":"2006_1_120.jpg","picTtl":"Stiftung Beatus, Sigriswil, Schweiz"},
{"flag":"P","grpTtl":"Konzerte 2016","picLarge":"novgorod1.png","picSmall":"novgorod1_tn.png","picTtl":"Novgorod,Russland"},
{"flag":"P","grpTtl":"Konzerte 2016","picLarge":"Fr08Juli2016.jpg","picSmall":"Fr08Juli2016_tn.jpg","picTtl":"Elztal Museum Concert","copy":"Foto: Badische Zeitung, G. Zahn"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"tanzrhymiker.png","picSmall":"tanzrhymiker_120.png","picTtl":"Tanzrhythmiker, Waldkirch"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"masterclass2016concert.jpg","picSmall":"masterclass2016concert_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - William Cuthbertson"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"memorial2016_1.jpg","picSmall":"memorial2016_1_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - Agnes Joshi"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"memorial2016_2.jpg","picSmall":"memorial2016_2_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - Daniel Kasparian"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"memorial2016_3.jpg","picSmall":"memorial2016_3_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - Masako Kamikawa"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"memorial2016_4.jpg","picSmall":"memorial2016_4_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - Anne Roth"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"memorial2016_5.jpg","picSmall":"memorial2016_5_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - Manfred Seeween"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"memorial2016_6.jpg","picSmall":"memorial2016_6_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - Ina Birk"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"memorial2016_7.jpg","picSmall":"memorial2016_7_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - Marianne Schr&ouml;der"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"memorial2016_8.jpg","picSmall":"memorial2016_8_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - Nina Attorf"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"memorial2016_9.jpg","picSmall":"memorial2016_9_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - Fedra und Stefan Blido"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"memorial2016_10.jpg","picSmall":"memorial2016_10_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - Klaus Cutik"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"memorial2016_11.jpg","picSmall":"memorial2016_11_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch- Sanja Stefanovic + Sophia Grech"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"memorial2016_13.jpg","picSmall":"memorial2016_13_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - Alexander Reitenbach"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"memorial2016_14.jpg","picSmall":"memorial2016_14_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - Jean-Jacques Dunki"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"memorial2016_15.jpg","picSmall":"memorial2016_15_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - Paul Cibis und Mayuko Vetter"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"memorial2016_16.jpg","picSmall":"memorial2016_16_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - Saeko Saito"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"memorial2016_17.jpg","picSmall":"memorial2016_17_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - Andrew Kraus"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"memorial2016_18.jpg","picSmall":"memorial2016_18_120.jpg","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - Jorrit Van den Hamm"},
{"flag":"P","grpTtl":"Konzerte:2016","picLarge":"emmastratton.png","picSmall":"emmastratton_120.png","picTtl":"Peter Feuchtwanger Gedankkonzert, Waldkirch - Emma Stratton - Andaluza and Allegro de Concerto by E.Granados."},';
$gpics.='{"flag":"T","picTtl":"Konzerte 2015"},	
{"flag":"P","grpTtl":"Konzerte 2015","picLarge":"21april2015.jpg","picSmall":"21april2015_120.jpg","picTtl":"Preludes%20by%20Chopin%20and%20Scriabin","copy":"Photo%20Badischer%20Zeitung"},		
{"flag":"P","grpTtl":"Konzerte 2015","picLarge":"bz2015-1.jpg","picSmall":"bz2015-1-120.jpg","picTtl":"Benefizkonzert mit Klassik und Chansons zugunsten der Renovierung des Gemeindezentrums","copy":"Foto Badischer Zeitung"}';  
$gpics.=',{"flag":"T","picTtl":"Meisterkurs 2015"},
{"flag":"P","grpTtl":"Meisterkurse 2015", "picLarge":"masterclass2015_1.jpg","picSmall":"masterclass2015_1_tn.jpg","picTtl":"William mit Student"},
{"flag":"P","grpTtl":"Meisterkurse 2015","picLarge":"masterclass2015_2.jpg","picSmall":"masterclass2015_2_tn.jpg","picTtl":"William mit Studenten"},	
{"flag":"P","grpTtl":"Meisterkurse 2015", "picLarge":"masterclass2015_3.jpg","picSmall":"masterclass2015_3_tn.jpg","picTtl":"William mit Student"},	
{"flag":"P","grpTtl":"Meisterkurse 2015", "picLarge":"masterclass2015_4.jpg","picSmall":"masterclass2015_4_tn.jpg","picTtl":"William mit Student"},	
{"flag":"P","grpTtl":"Meisterkurse 2015","picLarge":"masterclass2015_5.png","picSmall":"masterclass2015_5_tn.png","picTtl":"Studenten"},	
{"flag":"P","grpTtl":"Meisterkurse 2015","picLarge":"masterclass2015_6.png","picSmall":"masterclass2015_6_tn.png","picTtl":"Student"},	
{"flag":"P","grpTtl":"Meisterkurse 2015","picLarge":"masterclass2015_11.jpg","picSmall":"masterclass2015_11_tn.jpg","picTtl":"After Party"},	
{"flag":"P","grpTtl":"Meisterkurse 2015",  "picLarge":"masterclass2015_7.jpg", "picSmall":"masterclass2015_7_tn.jpg","picTtl":"Abschlusskonzert. TeilnehmerInnen kriegen Blumen"},	
{"flag":"P","grpTtl":"Meisterkurse 2015", "picLarge":"masterclass2015_8.jpg","picSmall":"masterclass2015_8_tn.jpg","picTtl":"Stefan Blido (Feuchtwanger Übungen)"},
{"flag":"P","grpTtl":"Meisterkurse 2015", "picLarge":"masterclass2015_9.jpg","picSmall":"masterclass2015_9_tn.jpg","picTtl":"Und wir kriegen ein nettes Geschenk. William Cuthbertson (Klavier)"},
{"flag":"P","grpTtl":"Meisterkurse 2015", "picLarge":"masterclass2015_10.jpg","picSmall":"masterclass2015_10_tn.jpg","picTtl":"Martina Barufke (Alexander Technik)"}';
$gpics.=',{"flag":"T","picTtl":"Unterricht 2015"}
,{"flag":"P","grpTtl":"Unterricht 2015","picLarge":"Vorspiel1.jpg","picSmall":"Vorspiel1_tn.jpg","picTtl":"Klavier Schüler"}
,{"flag":"P","grpTtl":"Unterricht 2015","picLarge":"Vorspiel2.jpg","picSmall":"Vorspiel2_tn.jpg","picTtl":"Klavier und Violin Schüler"},
{"flag":"P","grpTtl":"Unterricht 2015","picLarge":"Vorspiel3.jpg","picSmall":"Vorspiel3_tn.jpg","picTtl":"Klavierschüler"},
{"flag":"P","grpTtl":"Unterricht 2015","picLarge":"Abrsm1-1.jpg","picSmall":"Abrsm1-1_tn.jpg",	"picTtl":"Klavierschülerin mit Zertifikat"}';
$gpics.=',{"flag":"T","picTtl":"Meisterkurse 2014"},
{"flag":"P","grpTtl":"Meisterkurse 2014","picLarge":"foto1.JPG","picSmall":"foto1_tn.jpg","picTtl":"Peter Feuchtwanger,William Cuthbetson mit Studenten"},
{"flag":"P","grpTtl":"Meisterkurse 2014","picLarge":"foto2.JPG","picSmall":"foto2_tn.jpg","picTtl":"Peter Feuchtwanger,William Cuthbetson mit Student"},
{"flag":"P", "grpTtl":"Meisterkurse 2014","picLarge":"foto3.JPG","picSmall":"foto3_tn.jpg","picTtl":"William Cuthbetson mit Studenten"},
{"flag":"P","grpTtl":"Meisterkurse 2014","picLarge":"foto4.JPG","picSmall":"foto4_tn.jpg","picTtl":"Peter Feuchtwanger mit Student"},
{"flag":"P","grpTtl":"Meisterkurse 2014","picLarge":"foto5.JPG","picSmall":"foto5_tn.jpg","picTtl":"Peter Feuchtwanger,William Cuthbetson mit Studenten"},
{"flag":"P","grpTtl":"Meisterkurse 2014","picLarge":"foto6.JPG","picSmall":"foto6_tn.jpg","picTtl":"Peter Feuchtwanger,William Cuthbertson und Student"},
{"flag":"P","grpTtl":"Meisterkurse 2014","picLarge":"foto7.JPG","picSmall":"foto7_tn.jpg","picTtl":"William Cuthbetson mit Studenten"},
{"flag":"P","grpTtl":"Meisterkurse 2014","picLarge":"foto8.JPG","picSmall":"foto8_tn.jpg","picTtl":"William Cuthbertson"},
{"flag":"P","grpTtl":"Meisterkurse 2014","picLarge":"peterfeutchtwangerKaoruMaruyamawilliam.jpg","picSmall":"peterfeutchtwangerKaoruMaruyamawilliam_tn.jpg","picTtl":"Peter Feutchtwanger,Kaoru Maruyama und William Cuthbertson"}';
$gpics.=',{"flag":"T","picTtl":"Konzerte 2014"},
{"flag":"P","grpTtl":"Konzerte 2014","picLarge":"kulturwoche2014.jpg","picSmall":"kulturwoche2014_120.jpg","picTtl":"Waldkircher kulturwoche 2014","copy":"Photo Badische Zeitung"},
{"flag":"P","grpTtl":"Konzerte 2014","picLarge":"foto9.jpg","picSmall":"foto9_120.jpg","picTtl":"Waldkircher Musiker singen und spielen Musik von Mozart bis Bob Dylan"},
{"flag":"P","grpTtl":"Konzerte 2014","picLarge":"foto10.jpg","picSmall":"foto10_120.jpg","picTtl":"William Cuthbertson und Weimo Gao"},
{"flag":"P","grpTtl":"Konzerte 2014","picLarge":"foto12.jpg","picSmall":"foto12_120.jpg","picTtl":"Open Air Konzert mit den Waldkircher Tanzrhythmiker"},	
{"flag":"P","grpTtl":"Konzerte 2014","picLarge":"22october2014.jpg","picSmall":"22october2014_120.jpg","picTtl":"William Cuthbertson mit Sänger"},
{"flag":"P","grpTtl":"Konzerte 2014","picLarge":"chopin.jpg","picSmall":"chopin_120.jpg", "picTtl":"Chopin%20Konzert"},
{"flag":"P","grpTtl":"Konzerte 2014","picLarge":"concert_fb.jpg", "picSmall":"concert_fb_120.jpg","picTtl":"Konzert%20mit%20Weimo%20Gao"},
{"flag":"P","grpTtl":"Konzerte 2014","picLarge":"chopinetuden.jpg", "picSmall":"chopinetuden_120.jpg","picTtl":"Chopin Etuden","copy":"Foto Badische Zeitung"},';
$gpics.='{"flag":"T","picTtl":"Meisterkurs 2013"},	
{"flag":"P","grpTtl":"Meisterkurs:2013","picLarge":"14thMasterclass.jpg","picSmall":"14thMasterclass_120.jpg","picTtl":"Daniel Kasparian, Agnes Joshi-Meili, Elisa Neugart, Professor Peter Feuchtwanger, Masako Kamikawa, Urs Weilenmann und Christian Loeschke","copy":"Foto: Badische Zeitung, Eberhard Weiss"},
{"flag":"P","grpTtl":"Meisterkurs:2013","picLarge":"14thMasterclass-2.jpg","picSmall":"14thMasterclass-2_120.jpg","picTtl":"Masako Kamikawa spielte Chopins Rondo in Es-Dur","copy":"Foto: Badische Zeitung, Eberhard Weiss"}';
$gpics.=',{"flag":"T","picTtl":"Konzerte 2013"},
{"flag":"P","grpTtl":"Konzerte 2013","picLarge":"foto11.jpg","picSmall":"foto11_120.jpg","picTtl":"Gedichte von Wilhelm Busch, Musik von William Cuthbertson"}';
$gpics.=',{"flag":"T","picTtl":"Konzerte 2012"},
{"flag":"P","grpTtl":"Konzerte 2012","picLarge":"IMG_2402.JPG", "picSmall":"IMG_2402_120.jpg", "picTtl":"Nov.26th%202012%20in%20St.%20James,%20Piccadilly,%20London,%20England,%20wo%20William%20spielte%20Beethovens%20Hammerklavier-Sonate"},		
{"flag":"P","grpTtl":"Konzerte  2012","picLarge":"WilhelmBuschAbend.jpg","picSmall":"WilhelmBuschAbend_120.jpg","picTtl":"Wilhelm Busch Abend"},
{"flag":"P","grpTtl":"Concert 2012","picLarge":"yikisun.jpg","picSmall":"yikisun_120.jpg","picTtl":"Concert mit Sun Yiqi and William Cuthbertson"},
{"flag":"P","grpTtl":"Konzerte 2012","picLarge":"Gershwin2.JPG","picSmall":"Gershwin2_120.JPG","picTtl":"Rhapsody in Blue"},
{"flag":"P","grpTtl":"Konzerte 2012","picLarge":"NeuesBild.JPG","picSmall":"NeuesBild_120.JPG","picTtl":"Rhapsody in Blue"}';
$gpics.=']}';
$_SESSION["gpics"]	= $gpics; 
$x 					= json_decode($gpics,true);
$sz					= count($x["gallery"]);
require "funcz/functionz.php";
print head("de","Fotos");
?>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <?php print  menu("de","Fotografien","foto_e.php","foto.php","foto_ch.php");?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
               <?php topRight();?>
                <div class="row">
                <div class="col-lg-12"> 
                    <h2>Fotografien</h2> 
                </div>
             </div>
			<? 
					for ($i=0;$i<$sz;$i++)
					{ 	
						$y 			= $x["gallery"][$i]; 
						$picSmall	= $y["picSmall"];
						$picLarge	= $y["picLarge"];
						$flag		= $y["flag"];
						$copy		= $y["copy"];
 						switch($flag)
						{case "T":
						$grpTtl		= $y["picTtl"];					
							if ($i>0) print "</div>";
							print '<h3>'.$grpTtl.'</h3>
							<div class="row rowBorder">';
							break;
						default:
						 	$picTtl		= $y["picTtl"];					
							print '<div class="col-lg-2 col-md-3 col-sm-4 bordered">';
							displayPic($i,"foto.php","de");
							print "</div>";
						}
					}
					?>
				</div>
			<div class="alpha">Klicken Sie auf die Fotografien in voller Größe zu sehen</div>
			<?php print foot(); ?>
                    </div>
                </div>
            </div>
        </div>         <!-- /#page-content-wrapper -->
    </div>     <!-- /#wrapper -->
	<?php  print endPage();?>	
</body>
</html>