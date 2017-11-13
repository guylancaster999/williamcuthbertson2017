<?php 
require "funcz/functionz.php";
print head("en","Sketches");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("en","Sketches");	 ?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
			  <?php topRight("bilde_e.php","bilde.php","bilde_ch.php");?>
              <div class="row">
                <div class="col-lg-12"> 
                    <h2 >Sketches &ndash; by Gosia Kulczyk</h2> 
                </div>
             </div>
             <div class="row">
               <div class="col-sm-12">		 
                <table class="table">
                <tr>
                <td><?php photo("1.png","1_tn.png","Sketches520by%20Gosia%20Kulczyk","Sketch%201","bilde_e.php","en");?> </td>
                <td><?php photo("2.jpg","2_tn.jpg","Sketches520by%20Gosia%20Kulczyk","Sketch%202","bilde_e.php","en");?></td>
                <td><?php photo("3.jpg","3_tn.jpg","Sketches520by%20Gosia%20Kulczyk","Sketch%207","bilde_e.php","en"); ?></td>
                <td><?php photo("6.jpg","6_tn.jpg","Sketches520by%20Gosia%20Kulczyk","Sketch%204","bilde_e.php","en");?></td>
                <td><?php photo("7.png","7_tn.jpg","Sketches520by%20Gosia%20Kulczyk","Sketch%205","bilde_e.php","en");?></td>
                </tr>
                <tr>
                <td> <?php photo("8.jpg","8_tn.jpg","Sketches520by%20Gosia%20Kulczyk","Sketch%206","bilde_e.php","en");?> </td>
                <td><?php photo("4.jpg","4_tn.jpg","Sketches520by%20Gosia%20Kulczyk","Sketch%203","bilde_e.php","en");?> </td>
                <td><?php photo("5.jpg","5_tn.jpg","Sketches520by%20Gosia%20Kulczyk","Sketch%208","bilde_e.php","en"); ?></td>
              <td></td>
               <td></td>
                </tr>
                </table>
                 <div class="alpha">Click on Pictures to see larger image</div>
			   
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
