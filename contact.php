<?php include("header.php"); ?>

<header>
<div class="row">
	<div class="large-3 columns">
		<a href="index.php"><img src="img/Building_MuniTrans.png"/></a>
	</div>
	<div class="row">
		<div class="large-5 columns">
			<h3 style="color:white;text-shadow: 1px 0px #000000;">Christopher T. Nichols, D.D.S.</h3>
			<h5 class="subheader" style="color:white; margin-top:-0.8em;">Family and Cosmetic Dentistry</h5>
		</div>
		<div class="large-3 columns" style="margin-top: 0.7em;">
			<h6 class="subheader" style="color:white;margin-top:-0.2em;">1539 Taraval Street Suite 201</h6>
			<h6 class="subheader" style="color:white;margin-top:-0.4em;">San Francisco,CA 94116</h6>
			<h6 class="subheader" style="color:white;margin-top:-0.4em;">415-661-3989</h6>
		</div>
	</div>
</div>
<header>
<div class="row">
<nav class="top-bar">
<img style="z-index:-1;position:absolute; bottom:-28px;"src="img/shadow.png"/>
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
    </li>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href=""><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Left Nav Section -->
    <ul class="left">
     <li><a href="index.php">Home</a></li>
         <li class="divider"></li>
      <li><a href="team.php">Team</a></li>
      <li class="divider"></li>
      <li><a href="appointments.php">Appointments and Hours</a></li>
      <li class="divider"></li>
      <li><a href="services.php">Services</a>
      </li>
      <li class="divider"></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
     </section>
</nav>
</div>
<section id="mainContent">
<div class="row">
<img src="img/GoldenGatePainting.gif"/>
</div>


<div style="padding-top:20px;" class="row">
	<div class="large-8 columns">
	<h3>Contact Us</h3>
		<form class="custom" action="http://www.diskhero.com/remailer/remailer.cfm" method="post" name="C Nichols DDS From" id="CNicholsDDSFrom">
		<INPUT TYPE=HIDDEN NAME="allowedUse" VALUE = "allowedUse">
		 <input type="hidden" name="Emailto" value = "info@CNicholsDDS.com" />
		 <input type="hidden" name="Subject" value = "Contact Us Message from CNicholsDDS.com web site." />
		 <input type="hidden" name="RedirectURL" value="http://www.cnicholsdds.com/new/thankyou.php" />
		 <input type="hidden" name="CompanyID" value = "Dr Nichols DDS" />
		 <input type="hidden" name="MessageHeader" value = "A Contact Us Message has just been submitted from your site.  The sender included the following information:" />
		 <input type="hidden" name="MessageFooter" value = "From your friends at Disk Hero.  <BR>Have a great day!" />
		 <input type="hidden" name="SendHTMLMail" value = "1" />
		 <input type="hidden" name="SendReply" value = "1" />
		 <input type="hidden" name="ReplyFrom" value = "info@CNicholsDDS.com" />
		 <input type="hidden" name="ReplySubject" value = "C Nichols DDS" />
		 <input type="hidden" name="ReplyText" value = "Thank you for visiting CNicholsDDS.com. We will contact you as appropriate based upon your comment or question!" />
		 <input type="hidden" name="name_required" value = "Please enter your name!" />
		 <input type="hidden" name="emailfrom_required" value = "Please enter your email address!" />
		 <input type="hidden" name="phone_required" value = "Please enter your phone number!" />

    			<div class="row">
      				<div class="large-8 columns">
       					 <label>Your Name:</label>
       					 <input type="text" name="name" id="name2" placeholder="First Name and Last Name">
      				</div>
    			</div>

    	<div class="row">
   		   <div class="large-4 columns">
       			 <label>Email:</label>
       			 <input type="text" name="emailfrom" id="emailfrom" placeholder="john@example.com">
   		   </div>
  	    <div class="large-4 columns">
       			 <label>Day time Telephone:</label>
      			  <input type="text" name="phone" id="phone" placeholder="(xxx) xxx-xxxx">
      	</div>
     		 <div class="large-4 columns">
      		  <div class="row collapse">
       			 </div>
     		 </div>
    </div>
<div class="row">
<div class="large-6 columns">
<label>How did you about us?</label>
<input type="text" name="heard" id="heard" placeholder="Friend, Yelp, Google, etc">
</div>
</div>
    		<div class="row ">
      			<div class="large-12 columns">
        			<label>Your message, question or comment:</label>
       			 <textarea name="message" id="message" placeholder="Your message here"></textarea>
      			</div>
    		</div>
    		
    		<div class="row">
    		      			<div class="large-12 columns">
    		
<p>Would you like an appointment?</p>
<label for="radio1"><input name="appointment" value="yes" type="radio" id="radio1" style="display:none;" CHECKED><span class="custom radio checked"></span> Yes</label>
 <label for="radio2"><input name="appointment" value="no" type="radio" id="radio1" style="display:none;"><span class="custom radio"></span> No</label>        
        </div>
    		</div>
    		</br>
    		<div class="row">
 				      			<div class="large-12 columns">
 				
    		<p>Would you like us to call you?</p>
    		 <label for="radio3"><input name="call" value="yes" type="radio" id="radio2" style="display:none;" CHECKED><span class="custom radio checked"></span> Yes</label>
    		  <label for="radio4"><input name="call" type="radio" value="no" id="radio2" style="display:none;"><span class="custom radio"></span> No</label>         		
    		    		    		</div>
    			    			
    		
    		<div style="padding-top:40px;" class="large-6 columns left">
    		 <input type="submit" name="Submit" class="button postfix" value="Submit">
    		 </div>
    		</div>
    		
	</form>
	    			
	    				    			
	</div>
	<div class="large-4 columns">
	<img style="margin-top:1.5em;margin-left:auto; margin-right:auto;display:block;" src="img/Building.jpg"/>
		<div class="panel" style="margin-top:1.5em;">
		<h6>Christopher T. Nichols, D.D.S.</h6>
		<p style="margin-top:-0.3em;">1539 Taraval Street, Suite 201</br>San Francisco, CA 94116</p>
		<pstyle="margin-top:-0.2em;">Phone: 415-661-3989</p>
		<pstyle="margin-top:-0.2em;">Fax: 415-661-0479</p>
		
		<p><a href="https://www.google.com/maps?daddr=1539+Taraval+Street,+Suite+201,+san+francisco,+CA+94116&hl=en&sll=37.7577,-122.4376&sspn=0.181318,0.275002&mra=ls&t=m&z=12">get directions</a></p>
		<p style="margin-top:5%;"><b>FREE Parking</b>: Available on the side streets without meters</p>
		<p><b>MUNI</b>: The L Taraval Stop is at the corner of Taraval and 26th</p>
		</div>

<iframe width="300" height="300" frameborder="0" scrolling="no" marginheight="1" marginwidth="0" style="margin-left:1%;" src="https://www.google.com/maps?daddr=1539+Taraval+Street,+Suite+201,+san+francisco,+CA+94116&amp;hl=en&amp;sll=37.7577,-122.4376&amp;sspn=0.181318,0.275002&amp;mra=ls&amp;t=m&amp;ie=UTF8&amp;ll=37.757687,-122.43782&amp;spn=0.16286,0.205307&amp;z=11&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?daddr=1539+Taraval+Street,+Suite+201,+san+francisco,+CA+94116&amp;hl=en&amp;sll=37.7577,-122.4376&amp;sspn=0.181318,0.275002&amp;mra=ls&amp;t=m&amp;ie=UTF8&amp;ll=37.757687,-122.43782&amp;spn=0.16286,0.205307&amp;z=11&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>

</div>


</section>
 
<?php include("footer.php"); ?>