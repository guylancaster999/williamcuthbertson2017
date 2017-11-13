<?php
	require "funcz/functionz.php";
	print head("en","Contacts");
 
 ?>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-2 col-md-2 col-lg-2" >  
		 <?php print menu("en","Contacts","kontakt_e.php","kontakt.php","kontakt_ch.php");?>
	</div>	  
      <div class="col-sm-10 col-md-10 col-lg-10">
		<?php print shead1( "Contacts",);?>       
 	 	 <main>
             <div class="row">
 			    <article>
             <div class="row">
                <div class="col-lg-8	 col-md-8 col-sm-8">
                <table class="table">
				<tr>
				<td><strong>Post</strong></td>
				<td>:</td>
				<td>William Cuthbertson<br/>
				Theodor-Heuss-Str.16<br/>
				79183 Waldkirch<br/>
				Baden-Württemberg<br/>
				Germany</td>
				</tr>
				<tr>
				<td  ><strong>Tel.</strong></td>
				<td>:</td>
				<td><a href="tel:+497681409260">0049-76-81-40-92-60</a></td></tr>
				<tr>
				<td  ><strong>E-Mail</strong></td>
				<td>:</td>
				<td  ><a href="mailto:w.cuthbertson@gmx.de">w.cuthbertson@gmx.de</a></td>
				</tr>
 				<tr>
						<td><strong>E-Mail (website)</strong></td>
						<td>:</td>
						<td><a href="mailto:guylancaster@hotmail.com">guylancaster@hotmail.com</a></td>
				</tr>
			</table>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <?php photorightnolink("FotoChopinKonzertSept2010_350.jpg","William%20Cuthbertson%20-%20Chopin%20Konzert%20Sept%202010");?>
			</div>
        </div>
        <div class="row">
            <div class="col-sm-12">
 		        	<br/><br/>
                    <div class="alpha">Your Message</div>
                    <a id="form"></a>
					<form action="do_contact_e.php" method="POST" title="Send us a message">
						<table class="table">
							<tr>
		    					<th>&nbsp;</th>
    							<th   id="error" class="error" ><?php print $_GET["error"];?></th>
       						 </tr>
							<tr>
							<td>Name:</td>
			<td><input type="text" id="sname" name="sname"  size="70" required value="<?php print $_GET["sname"]; ?>"/></td>
       </tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" required id="email" name="email" size="70" value="<?php print $_GET["email"]; ?>" /></td>

		</tr>
		<tr>
			<td>Phone:</td>
			<td><input type="text" id="phone"  name="phone" size="70"  value="<?php print $_GET["phone"];?>"/></td>

       </tr>
		<tr>
			<td>Subject:</td>
			<td> <input type="text" id="subject"  name="subject" size="70" required  value="<?php print $_GET["subject"];?>" /></td>

      	</tr>
		<tr>
			<td  >Enquiry:</td>
			<td><textarea rows="6" cols="60" id="message" name="message" required><?php print $_GET["message"];?></textarea></td>

		</tr>
		<tr>
			<td>&nbsp;</td>
			<th class="alpha"><input type="submit"  value="Send"/></th>
		</tr>
	</table>
</form>
<div class="smallprint">&nbsp;* Your email will not be passed to any third parties</div>
                </article>
				   
				   </div>
					</div>
				</main>
		<?php print foot();	?>	   
		 
		 </div>
		  	</div>
			</div>	
			</div>
		</div>
		  
	<?php  print endPage();?>
</body>
</html>

