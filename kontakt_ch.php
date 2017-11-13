<?php
	require "funcz/functionz.php";
	print head("ch","联络我","kontakt_ch.php");
?> 
<body>
<div class="container">
  <div class="row">
    <div <?php mnuClass();?> >  
			<?php print menu("ch","联络我","kontakt_e.php","kontakt.php","kontakt_ch.php");?>
	</div>	  
      <div  <?php mainClass();?>>
		<?php print shead1("联络我");?>       
 	 	 <main>
             <div class="row">
               <div class="col-12 col-sm-12 col-md-12  col-lg-12">
			  
                    <table class="table">
						<tr>
						<td><strong>Post</strong></td>
						<td>:</td>
						<td>William Cuthbertson<br/>
						Theodor-Heuss-Str.16<br/>
						79183 Waldkirch<br/>
						Baden-Württemberg<br/>
						德国</td>
						</tr>
						<tr>
							<td><strong>Tel.</strong></td>
							<td> : </td>
							<td><a href="tel:+497681409260">+49 76 81 40 92 60</a></td>
						</tr>
						<tr>
							<td><strong>E-Mail</strong></td>
							<td> : </td>
							<td><a href="mailto:w.cuthbertson@gmx.de">w.cuthbertson@gmx.de</a></td>
						</tr>
						<tr>
							<td><strong>E-Mail (website)</strong></td>
							<td> : </td>
							<td><a href="mailto:guylancaster@hotmail.com">guylancaster@hotmail.com</a></td>
						</tr>
								 </table>
            </div>
             
        </div>
		
        <div class="row">
           <div class="col-lg-12  col-md-12 col-sm-12">
				<div class="alpha">你的信息</div>
					<a id="form"></a>
					<div class="alpha" style="color:#F00;"><?php print $_GET["error"];?></div>
					<form action="do_contact_ch.php" method="POST" title="Send me a message">
						<table class="table">
							<tr>
							<td>Name&nbsp;:&nbsp;</td>
							<td><input type="text" id="sname" name="sname"  size="70" required value="<?php print $_GET["sname"]; ?>"/></td>
						   </tr>
							<tr>
							<td>Email&nbsp;:&nbsp;</td>
							<td><input type="email" required id="email" name="email" size="70" value="<?php print $_GET["email"]; ?>" /></td>
							</tr>
							<tr>
							<td>Phone&nbsp;:&nbsp;</td>
							<td><input type="text" id="phone"  name="phone" size="70"  value="<?php print $_GET["phone"];?>"/></td>
						   </tr>
							<tr>
							<td>Subject&nbsp;:&nbsp;</td>
							<td> <input type="text" id="subject"  name="subject" size="70" required  value="<?php print $_GET["subject"];?>" /></td>
							</tr>
							<tr>
							<td  >Message&nbsp;:&nbsp;</td>
							<td><textarea rows="6" cols="60" id="message" name="message" required><?php print $_GET["message"];?></textarea></td>
							</tr>
							<tr>
							<td>&nbsp;</td>
							<th><input type="submit" value="发送"/></th>
							</tr>
						</table>
					</form>
					<br/>
					* 您的电子邮件不会传递给第三方。
			
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

