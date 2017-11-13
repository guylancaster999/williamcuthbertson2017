<?php 
require "funcz/functionz.php";
print head("de","Sitemap");
?>
<body>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <?php
            print  menu("de","Sitemap");
			?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid"> <?php topRight();?>
                <div class="row">
                <div class="col-lg-12"> 
                    <h2>Sitemap</h2> 
                </div>
             </div>
            
                 </div>
            
                <div class="row">
                 
                <div class="col-lg-12">         
                       
<ul>
  <li><a href="index.php">Homepage</a></li>
  <li><a href="program.php"   title="Program">Programme</a></li>
  <li><a href="repertoire.php"  title="Repertoire">Repertoire</a></li>
  <li><a href="teaching.php"   title="Klavierunterricht und Begleitung">Unterricht</a>  </li>
  <li><a href="meisterkurse.php"  title="Meisterkurz">Meisterkurz 2015</a>
 
  </li>
  <li><a href="bio.php"  title="Biographie">Biographie</a><a href="bio_e.php"
 
  title="Musical Biography" ></a></li>
  <li><a href="concert.php"  title="Konzerte">Konzerte</a></li>
  <li><a href="video.php"
 
  title="Youtube Video">Video </a> </li>
  <li><a href="presse.php"   title="Presse">Presse</a> </li>
  <li> <a href="links.php" >Links </a></li>
  <li> <a href="foto.php"  title="Fotografien">Fotografien</a>  </li> 
  <li><a href="bilde.php"  title="Skizzen">Skizzen</a>
 
  </li>
  <li><a href="kontakt.php"  title="Kontakt">Kontakt</a></li>
  <li><a href="sitemap.php"  title="Sitemap">Sitemap</a><br/><br/></li>
</ul>
				<?php print foot();?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</body>

</html>
