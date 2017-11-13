<?php 
require "funcz/functionz.php";
print head("en","Sitemap");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php
            print  menu("en","Sitemap");
			?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid"><?php topRight();?>
                <div class="row">
                <div class="col-lg-12"> 
                      <h2 align="center">Sitemap</h2> 
                </div>
             </div>
            
                 </div>
            
                <div class="row">
                 
                <div class="col-lg-12">         <ul>
<li><a href="index_e.php" title="homepage">Homepage</a></li>
<li><a href="program_e.php" title="Program">Programme</a></li>
<li><a href="repertoire_e.php" title="Repertoire">Repertoire</a> </li>
<li><a href="teaching_e.php" title="teaching &amp; accompanying"> Teaching</a>
  </li>
<li><a href="masterclasses_e.php"   title="Master Class">Master Class 2015</a> 
 </li>
<li><a href="bio_e.php"   title="Musical Biography" >Biography </a></li>
<li><a href="concert_e.php"   title="Concerts">Concerts </a> </li>
<li><a href="video_e.php"   title="Video">Video</a></li>
<li><a href="presse_e.php"   title="Press Reviews">Press</a></li>
 
<li><a href="links_e.php" >Links </a></li>
<li>
<a href="bilde_e.php" >Sketches</a></li>
<li>
<a href="foto_e.php" >Photographs</a>
 </li>
<li>
<a href="kontakt_e.php"
 
  title="Contact Details">Contact</a></li>
  <li><a href="sitemap_e.php"
 
  title="Sitemap">Sitemap</a><br/><br/></li>
</ul>
                <?php  
				print foot();
				?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>
