<?php
	require "funcz/functionz.php";
	print head("en","Teaching");
 ?>
<body> 
  <div class="container">
  <div class="row">
    <div <?php  mnuClass(); ?>>  
		 <?php print menu("en","Teaching","teaching_e.php","teaching.php","teaching_ch.php");?>
	</div>	  
      <div <?php  mainClass(); ?>>
		<?php print shead1("Teaching");?>        
	 		   <main>
             <div class="row">
               <div class="col-12 col-sm-12 col-md-12  col-lg-12">
				   <article>
				<h3><strong>Piano lessons, coaching and support</strong></h3>
				 
            <div class="row">
                 <div class="col-sm-8">         
                   William Cuthbertson has extensive experience in  giving individual piano lessons to pupils of all ages and experience, from complete beginners to professional performers.
					<br />
					<br/>
					Cuthbertson teaches Professor Peter Feuchtwanger&rsquo;s  piano exercises, which produce a natural and individual piano technique.  
                    With his differentiated methodological knowledge, he goes into the individual  needs of his students and encourages them to make good progress.
					William Cuthbertson also encourages his students to  produce a beautiful tone by analysing the &lsquo;musical sense&rsquo;, the structures and the intentions of each work, examining their effect on the listener.
					<br/>
				 <br class="brclear"/>
				 <strong>Accompanying</strong>
				<br/> 
				<br />
				William Cuthbertson provides piano accompaniment and  additional coaching for performers on other instruments, for example in  preparation for examinations and competitions.
				</div>
				  <div class="col-sm-4">   
				 <?php  photorightnolink("foto3_240.jpg", "William%20Cuthbertson%20with%20student%20am%20Master%20Class");?>
					 <br class="brclear"/>
					<br/> 
                   <?php  photorightnolink( "Alban6_240.JPG","William%20Cuthbertson (Piano) accompanies Alban (French Horn)");?>
                  </div>
               </div>
			   </article>
				   
				   </div>
					</div>
				</main>
		<?php print foot();	?>	   
		 
		 </div>
		  	</div>
			</div>	 
	<?php  print endPage();?>
</body>
</html>