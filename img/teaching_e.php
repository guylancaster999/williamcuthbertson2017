<?php 
require "funcz/functionz.php";
print head("en","Teaching");
?>
<body>
    <div id="wrapper">
      <div id="sidebar-wrapper">
            <?php print  menu("en","Teaching","teaching_e.php","teaching.php","teaching_ch.php"); ?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
			    <?php topRight();?>
                <div class="row">
                 <div class="col-lg-12"> 
                      <h2>Piano lessons, coaching and support</h2>
                   </div>
             </div>
            <div class="row">
                 <div class="col-sm-8">         
                    William Cuthbertson has extensive experience in  giving individual piano lessons to pupils of all ages and experience, from complete beginners to professional performers.
					<br />
					<br/>
					Cuthbertson teaches Professor Peter Feuchtwanger&rsquo;s  piano exercises in order to produce a natural and individual piano technique.  
                    With his differentiated methodological knowledge, he goes into the individual  needs of his students and encourages them to make good progress.
					William Cuthbertson also encourages his students to  produce a beautiful tone by analysing the &lsquo;musical sense&rsquo;, structures and  intentions of each work, examining their effect on the listener.
					<br/>
				 <br class="brclear"/>
				 <strong>Accompanying</strong>
				<br/> 
				<br />
				William Cuthbertson provides piano accompaniment and  additional coaching for performers on other instruments, for example in  preparation for examinations and competitions.
				</div>
				  <div class="col-sm-4">   
				 <?php photorightfs("foto3.JPG","foto3_240.jpg","Teaching",
				 "William%20Cuthbertson%20with%20student%20am%20Master%20Class","teaching_e.php","de","pictureright");?>
					 <br class="brclear"/>
					<br/> 
                   <?php photorightfs("Alban6.JPG", "Alban6_240.JPG","Teaching",
				   "William%20Cuthbertson (Piano) accompanies Alban (French Horn)","teaching_e.php","pictureright");?>
                  </div>
               </div>
					<div class="row">
					  <div class="col-sm-12">   
					<?php print foot(); ?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
	<?php  print endPage();?>	
 </body>
</html>