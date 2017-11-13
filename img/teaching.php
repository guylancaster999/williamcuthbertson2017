<?php 
require "funcz/functionz.php";
print head("de","Unterricht");
?>
<body>
    <div id="wrapper">
      <div id="sidebar-wrapper">
            <?php  print  menu("de","Unterricht","teaching_e.php","teaching.php","teaching_ch.php"); ?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid"> 
			    <?php topRight();?>
                <div class="row">
                 <div class="col-lg-12"> 
                      <h2 >Klavierunterricht, Coaching und Begleitung</h2>
                   </div>
             </div>
            <div class="row">
                 <div class="col-lg-12">         
                     <?php photo("foto3.JPG","foto3_240.jpg","Unterricht",
					 "William%20Cuthbertson%20mit%20student%20am%20MeisterKurz","teaching.php","de","picturerightfs");?>
					<ul>
						<li>Verfügt über einen weitreichenden Erfahrungsschatz im Bereich Klavierunterricht mit Schüler und Schülerinnen alle Altersstufen. 
						<br/><br/>
						</li>
						<li>Anfängerschulung bis hin zum Coaching professioneller Pianisten 
						<br/><br class="brclear"/>
						</li>
						<li>Begleitung und musikalisches Coaching anderer Instrumente  
						<br/><br class="brclear"/>
						</li>
						<li>mit seinen differenzierten methodischen Kenntnissen geht er auf die individuellen Bedürfnisse seiner Schüler ein und fördert sie  in die gewünschte  Richtung.<br/><br/>
						</li>
						<li>Vermittelt eine natürliche und individuelle Klaviertechnik – Unterrichtet die Klavierübungen von Prof. Peter Feuchtwanger.
						<br/><br class="brclear"/>
						</li>
<li><?php photo("Alban6.JPG","Alban6_240.JPG","Unterricht","William (Klavier) begleitet Alban (Französisch Horn)","teaching.php","de","picturerightfs");?>
						Durch die Analyse des musikalischen Sinns, Strukturen und Intentionen der einzelnen Werke und die Überlegung wie diese auf die Hörer wirken, hilft William Cuthbertson  seinen Schülern die Stücke zu gestalten und einen schönen Klang  zu erzeugen.
						<br/><br/></li>
					</ul>
					<?php print foot(); ?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
		<?php  print endPage();?>
 </body>
</html>