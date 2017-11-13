<?php 
require "funcz/functionz.php";
print head("en","Sketches");
session_start();
$gpics='{"gallery":[ 
{"flag":"P","grpTtl":"Sketches%20by%20Gosia%20Kulczyk","picLarge":"1.png","picSmall":"1_tn.png","picTtl":"Picture%201"},	
{"flag":"P","grpTtl":"Sketches%20by%20Gosia%20Kulczyk","picLarge":"2.jpg","picSmall":"2_tn.jpg","picTtl":"Picture%202"},	
{"flag":"P","grpTtl":"Sketches%20by%20Gosia%20Kulczyk","picLarge":"4.jpg","picSmall":"4_tn.jpg","picTtl":"Picture%203"},	
{"flag":"P","grpTtl":"Sketches%20by%20Gosia%20Kulczyk","picLarge":"6.jpg","picSmall":"6_tn.jpg","picTtl":"Picture%204"},	
{"flag":"P","grpTtl":"Sketches%20by%20Gosia%20Kulczyk","picLarge":"7.png","picSmall":"7_tn.jpg","picTtl":"Picture%205"},	
{"flag":"P","grpTtl":"Sketches%20by%20Gosia%20Kulczyk","picLarge":"8.jpg","picSmall":"8_tn.jpg","picTtl":"Picture%206"},	
{"flag":"P","grpTtl":"Sketches%20by%20Gosia%20Kulczyk","picLarge":"3.jpg","picSmall":"3_tn.jpg","picTtl":"Picture%207"},	
{"flag":"P","grpTtl":"Sketches%20by%20Gosia%20Kulczyk","picLarge":"5.jpg","picSmall":"5_tn.jpg","picTtl":"Picture%208"}
]}';
$_SESSION["gpics"]	=$gpics;	
$x 					= json_decode($gpics,true);
$sz					= count($x["gallery"]);
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("en","Skizzen","bilde_e.php","bilde.php","bilde_ch.php");?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid"> 
			    <?php topRight();?>
                <div class="row">
                <div class="col-lg-12"> 
                      <h2>Sketches &ndash; by Gosia Kulczyk</h2> 
                </div>
             </div>
<div class="row">
					<? 
					
					for ($i=0;$i<$sz;$i++)
					{ 	
						print '<div class="col-lg-2 col-md-3 col-sm-4 bordered">';
						displayPic($i,"bilde_e.php","en");
						print "</div>";
					}
					?>
			</div>				
			<br/>
 <div class="alpha" >Click on Pictures to see larger image</div>
<?php print foot();?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
	<?php  print endPage();?>
</body>
</html>

