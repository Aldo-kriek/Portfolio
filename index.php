<?php

    session_start(); 


if(isset($_POST['submit']))
{
    $name= $_POST['name'];
    $email= $_POST['email'];
    $subject= $_POST['subject'];
    $message= $_POST['message'];
    
	$sql = "INSERT INTO profile (contact_name, contact_email, contact_subject, contact_message) values 
    ('$name', '$email', '$subject', '$message')";

    $result = mysqli_query($con,$sql);

    if($result)
    {
        header('location:index.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Home</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     

   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="stylesheet"Href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">
   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>	

	   		<div class="logo">
		         <a href="index.php">MENU</a>				 
		      </div>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll"  href="#about" title="">About</a></li>
						<li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>	
						<li><a class="smoothscroll"  href="#edu" title="">Education</a></li>						
						<li><a class="smoothscroll"  href="#portfolio" title="">Portfolio</a></li>			
						<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>	
									
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">
	   			<h5 class="animate__animated animate__heartBeat">Hello, World.</h5>
	   			<h1 class="animate__animated animate__heartBeat"> I'm Aldo Kriek </h1>
				<br>
	   			<p class="intro-position">
	   				<span class="animate__animated animate__bounce">Software Developer</span>	
					  		
	   			</p>
	   			<a class="button stroke smoothscroll" href="#about" title="">About Me</a>
	   		</div>  			
   		</div>   	
   	</div> 

	<!-- /intro-content --> 
	   <ul class="intro-social">   
		<li><a href="https://www.linkedin.com/in/aldo-kriek-69760996/"><i class="fa fa-linkedin"></i></a></li>
		<li><a href="mailto:noks88@gmail.com"><i class="fa fa-envelope"></i></a></li>
		<li><a href="https://github.com/Aldo-kriek"><i class="fa fa-github"></i></a></li> 		       					
		<li><a href="tel:+27822990779"><i class="fa fa-phone"></i></a></li>		   
      </ul> <!-- /intro-social --> 

   </section> <!-- /intro -->

   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>About</h5>
   			<h1 id="typewriter">Let me introduce myself.</h1><br>

			<div class="pic">
				<img src="images/portfolio/modals/profile_pic.jpg" alt="Profile Picture">
			</div>
			 
   			<div class="intro-info">
					<p class="lead">Hi, my name is Aldo and I am a software developer from South Africa. I enjoy building interfaces that are user friendly and simple to use. I’m excited about coding, designing and improving my development skills.
					
								<div class="intro-info">					
									 <p class="lead">I consider myself a reliable dedicated person who is self-motivated and willing to go the extra mile to achieve client
										 satisfaction. I believe teamwork is of great importance to achieve goals in the working environment. I enjoy
										 challenges and the ability to learn.</p>
								</div> 					
					</p>
   			</div>   			
   		</div>   		
   	</div> 

	<!-- /section-intro -->

   		<div class="row about-content">
   			<div class="tet">

			<p id="ali">	  
				  <img src="./images/portfolio/Code/html.JPG" class="skill_icon"></img> 
				  <img src="./images/portfolio/Code/CSS3.JPG" class="skill_icon"></img> 	
				  <img src="./images/portfolio/Code/JAVASCRIPT.JPG" class="skill_icon"></img>			
				  <img src="./images/portfolio/Code/PHP.JPG" class="skill_icon"></img> 
				  <img src="./images/portfolio/Code/android.JPG" class="skill_icon"></img>
				  <img src="./images/portfolio/Code/Java.JPG" class="skill_icon"></img> 
				  <img src="./images/portfolio/Code/React.JPG" class="skill_icon"></img>
				  <img src="./images/portfolio/Code/JQuery.JPG" class="skill_icon"></img>
				  <img src="./images/portfolio/Code/C.JPG" class="skill_icon"></img>
				  <img src="./images/portfolio/Code/Perl.JPG" class="skill_icon"></img>				 
				  <img src="./images/portfolio/Code/SQL.JPG" class="skill_icon"></img> 
		 	</p>
   		</div>
		   <div class="tet"><br>
   		</div>
   	</div>

   	<div class="row button-section">
		
   		<div class="col-twelve">
   			<a href="#contact" title="Hire Me" class="button stroke smoothscroll">Contact Me</a>
   			<a href="./PDF/Curriculum-Vitae-Aldo-Kriek (1).pdf" title="Download CV" class="button button-primary">Download CV</a>
   		</div>   		
   	</div>

   </section> <!-- /process-->    

   <!-- resume Section
   ================================================== -->
	<section id="resume" class="grey-section">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Resume</h5>
   			<h1 id="typewriter">More of my credentials.</h1>
   		</div>   		
   	</div> 
	
	<!-- /section-intro--> 
   	<div class="row resume-timeline">
   		<div class="col-twelve resume-header">
   			<h2>Work Experience</h2>
   		</div> 
	
	<!-- /resume-header -->

   		<div class="col-twelve">
   			<div class="timeline-wrap">
   				<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Business Connexion (Afrox)</h3>
	   					<p>Dec 2019 - Present</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>IT Customer Engineer</h4>
						<br>
						</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Business Connexion (Amadeus)</h3>
	   					<p>Jan 2017 - Dec 2019</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Systems Administrator</h4>
	   					<br>
						</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Telkom SA</h3>
	   					<p>Jan 2013 - March 2018</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Senior OPS Specialist</h4>
	   					<br>						
						</p>
	   				</div>
					   <div class="timeline-block">

						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>
						
					   <div class="timeline-header">
						<h3>Comtel Communications</h3>
						<p>May 2012 - Nov 2013</p>
					</div>

					<div class="timeline-content">
						<h4>Wireless Network Technician</h4>
						<br>					 
					 </p>
					</div>

					<div class="timeline-block">

						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>

					<div class="timeline-header">
						<h3>In Touch With World</h3>
						<p>March 2012 - May 2012</p>
					</div>

					<div class="timeline-content">
						<h4>IT Support Technician</h4>
				<br>
					</div>

					<div class="timeline-block">

						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>

					<div class="timeline-header">
						<h3>Motata </h3>
						<p>Jan 2008 - Feb 2012</p>
					</div>

					<div class="timeline-content">
						<h4>ADSL Technician</h4>
						<p><br>

					 </p>
					</div>
					<div class="timeline-block">

						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>

					<div class="timeline-header">
						<h3>Ice Blue Digital </h3>
						<p>Jan 2007 - Nov 2007</p>
					</div>

					<div class="timeline-content">
						<h4>IT Technician</h4>
						 <br>				 	
					</div>
					
	   			</div> <!-- /timeline-block -->


				
   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->

	  
  
   	
   		<div class="col-twelve resume-header">
<br><br>

			
   			<h2 id="edu">Education</h2>
			   <h1 id='typewriter'>More of my qualifications.</h1><br>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">
   			<div class="timeline-wrap">

   				<div class="timeline-block">
	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Systems Development</h3>
	   					<p>July 2020 - December 2022</p>						
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Boston Business College</h4>
	   					<p>National Diploma in Systems Development NQF 6. <br> 
						</p>						   
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>CompTIA N+</h3>
	   					<p>Feb 2007 - Nov 2008</p>				
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Boston Business College</h4>
	   					<p>Successfully completed CompTIA N+ Qualification.						
						</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>CompTIA A+</h3>
	   					<p>Feb 2006 - Nov 2007</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Boston Business College</h4>
	   					<p>Successfully completed CompTIA A+ Qualification.</p>					
	   				</div>

					   <div class="timeline-block">

						<div class="timeline-ico">
							<i class="fa fa-graduation-cap"></i>
						</div>
 
						<div class="timeline-header">
							<h3>Software Specialist</h3>
							<p>Jan 2006 - Nov 2007</p>
						</div>
 
						<div class="timeline-content">
							<h4>Boston Business College</h4>
							<p>Successfully completed Software Specialist Qualification.
							</p>
						</div>
						
						<div class="timeline-block">

							<div class="timeline-ico">
								<i class="fa fa-graduation-cap"></i>
							</div>	 
							<div class="timeline-header">
								<h3>Computer Clerk</h3>
								<p>Jan 2006 - Nov 2007</p>
							</div>
	 
							<div class="timeline-content">
								<h4>Boston Business College</h4>
								<p>Successfully completed Computer Clerk Qualification.</p>												
							</div>

							<div class="timeline-block">

								<div class="timeline-ico">
									<i class="fa fa-graduation-cap"></i>
								</div>
		 
								<div class="timeline-header">
									<h3>Office Assistant</h3>
									<p>Jan 2006 - Nov 2007</p>
								</div>
		 
								<div class="timeline-content">
									<h4>Boston Business College</h4>
									<p>Successfully completed Office Assistant Qualification.
									</p>
								</div>

								<div class="timeline-ico">
									<i class="fa fa-graduation-cap"></i>
								</div>

								<div class="timeline-block">

									<div class="timeline-ico">
										<i class="fa fa-graduation-cap"></i>
									</div>
			 
									<div class="timeline-header">
										<h3>High School</h3>
										<p>Jan 2005 - Dec 2005</p>
									</div>
			 
									<div class="timeline-content">
										<h4>Forest High School</h4>
										<p>Grade 12 Passed.<br></p>										
									</div>
			 
	   			</div> <!-- /timeline-block -->

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
		
	</section> <!-- /features -->

	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">
		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Portfolio</h5>
   			<h1 id="typewriter">Check Out Some of My Projects.</h1>
   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row portfolio-content">
   		<div class="col-twelve">

   			<!-- portfolio-wrapper -->
	         <div id="folio-wrapper" class="block-1-2 block-mob-full stack">
	         	<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/modals/Covid_original.JPG" alt="covid">
	                  <a href="#modal-01" class="overlay">	                  	           
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
		     					       <h3 class="folio-title">Contact Tracking Register</h3>	     					    
		     					    	 <span class="folio-types">
											Software Application<br>
											(JAVA, SQL)
		     					       </span>
		     					   </div>	                      	
	                     </div>                    
	                  </a>
	               </div>	               
	        		</div> <!-- /folio-item -->

	        		<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/modals/property_management.JPG" alt="property_management">
	               	<a href="#modal-02" class="overlay">              		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Property Maintenance</h3>	     					    
		     					    	<span class="folio-types">
											Software Application<br>
											(JAVA, SQL)
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/modals/Veh_1.JPG"alt="vehicle_monitoring_system">
	                  <a href="#modal-03" class="overlay">             		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Vehicle Monitoring System</h3>	     					    
		     					    	<span class="folio-types">
		     					       	  Web Application<br>
										  (HTML5, CSS, PHP, JAVASCRIPT)

		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/modals/basic_profile.JPG" alt="folio">
	                  <a href="#modal-04" class="overlay">                  	                 
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Web Portfolio</h3>	     					    
		     					    	<span class="folio-types">
		     					       	  Website<br>
											  (HTML5, CSS, PHP, JAVASCRIPT)
		     					      </span>		     		
		     					   </div>  	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->     

	        		<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/modals/crud_form.JPG" alt="crud">
	                  <a href="#modal-05" class="overlay">             		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Crud Application Form</h3>	     					    
		     					    	<span class="folio-types">
		     					       	  Software Application<br>
											  (C# & SQL)
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/Covers/calc.jpg" alt="calculator">
	                  <a href="#modal-06" class="overlay">
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Calculator</h3>	     					    
		     					    	<span class="folio-types">
		     					       	  Software Application <br>
										  (JAVA, SQL)
		     					      </span>		     		
		     					   </div>	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->       
	 

	            <!-- modal popups - begin
	            ============================================================= -->
	            <div id="modal-01" class="popup-modal slider mfp-hide">	

					<div class="description-box">
						<h4>Contact Tracking Register</h4></div>


				     	<div class="media">
				     		<img src="images/portfolio/modals/Covid_original.JPG" alt=""/>
				     	</div>      	

					   <div class="description-box">		      
					      <p>Application that helps reduce the spread of infections by capturing body tempretures of employees who enters into a work site building.  </p>

					      <div class="categories">Software Application</div>			               
					   </div>

			         <div class="link-box">
			            <a href="portfolio-details.html">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-01 -->

				   <div id="modal-02" class="popup-modal slider mfp-hide">	

					<div class="description-box">
						<h4>Property Management</h4></div>

				     	<div class="media">
				     		<img src="images/portfolio/modals/property_management.JPG" alt="" />
				     	</div>      	

					   <div class="description-box">				      		      
					      <p>Application to manage all repair services of property and estate owners.</p>

					      <div class="categories">Software Applcation</div>			               
					   </div>

			         <div class="link-box">
			            <a href="portfolio-details2.html">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-02 -->

				   <div id="modal-03" class="popup-modal slider mfp-hide">	

					<div class="description-box">
						<h4>Vehicle Monitoring System</h4></div>

				     	<div class="media">
				     		<img src="images/portfolio/modals/Veh_1.JPG" alt="" />
				     	</div>      	

					   <div class="description-box">					     		      
					      <p>Keep track of company vehicles that have been allocated to an employee.</p>

					      <div class="categories">Web Application</div>			               
					   </div>
 
			         <div class="link-box">
			            <a href="portfolio-details3.html">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a> 
			         </div>		      

				   </div> <!-- /modal-03 -->

				   <div id="modal-04" class="popup-modal slider mfp-hide">	

					<div class="description-box">
						<h4>Web Portfolio</h4></div>

				     	<div class="media">
				     		<img src="images/portfolio/modals/basic_profile.JPG" alt="" />
				     	</div>      	

					   <div class="description-box">	      
					      <p>Website portfolio that can display details and showcase skills .</p>

					      <div class="categories">Website</div>			               
					   </div>

			         <div class="link-box">
			            <a href="portfolio-details4.html">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-04 -->

				   <div id="modal-05" class="popup-modal slider mfp-hide">	

					<div class="description-box">
						<h4>CRUD Application Form</h4></div>

				     	<div class="media">
				     		<img src="images/portfolio/modals/crud_form2.JPG" alt="" />
				     	</div>      	

					   <div class="description-box">		      
					      <p>CRUD application that can create, update, edit and delete entries .</p>

					      <div class="categories">Software Application</div>			               
					   </div>

			         <div class="link-box">
			            <a href="portfolio-details5.html">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-05 -->

				   <div id="modal-06" class="popup-modal slider mfp-hide">	

					<div class="description-box">
						<h4>Calculator</h4></div>

				     	<div class="media">
				     		<img src="images/portfolio/modals/Calc.JPG" alt="" />
				     	</div><br>

					   <div class="description-box">		      
					      <p>Calculator with memory store/recall function.</p>
							<br>
					      <div class="categories">Software Application</div>			               
					   </div>

			         <div class="link-box">
			            <a href="portfolio-details6.html">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-06 -->

		  

				   <!-- modal popups - end
	            ============================================================= -->

	         </div> <!-- /portfolio-wrapper --> 

   		</div>  <!-- /twelve -->   

   	</div> <!-- /portfolio-content --> 
		
	</section> <!-- /portfolio --> 

   <!-- contact
   ================================================== -->
	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Contact</h5>
   			<h1 id="typewriter">I'd Love To Hear From You.</h1>
   			<p class="lead">Please leave a message below and i will get back to you ASAP.</p>

   		</div> 
   	</div> <!-- /section-intro -->

   	<div class="row contact-form">

   		<div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="sendEmail2.php" autocomplete="off">
      			<fieldset>

                  <div class="form-field">
 						   <input name="name" type="text" id="name" placeholder="Name" value="" minlength="2" required="" autocomplete="off">
                  </div>
                  <div class="form-field">
	      			   <input name="email" type="email" id="email" placeholder="Email" value="" required="" autocomplete="off">
	               </div>
                  <div class="form-field">
	     				   <input name="subject" type="text" id="subject" placeholder="Subject" value="" autocomplete="off">
	               </div>                       
                  <div class="form-field">
	                 	<textarea name="message" id="message" placeholder="Message" rows="10" cols="50" required=""></textarea autocomplete="off">
	               </div>    

				  
				  <div class="form-field">
                     <button class="submitform" href="index.php">Submit</button>
					
                     <div id="submit-loader">
                        <div class="text-loader" >Sending...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>

								
							</div>
                  </div>	

				  
      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">            	
            </div>            
            <!-- contact-success -->
      		<div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
			   
      		</div>

         </div> <!-- /col-twelve -->
   		
   	</div> <!-- /contact-form -->

   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Location</h5>

   			<p>
            South Africa,<br>
            Johannesburg<br> </p>
   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Me At</h5>
   			<p>noks88@gmail.com<br></p>
   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Call Me At</h5>

   			<p>	Mobile: (+27) 82 299 0779 <br></p>   	
   		</div>
   		
   	</div> <!-- /contact-info -->	
	</section> <!-- /contact -->

   <!-- footer
   ================================================== -->

   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social"> 
					<li><a href="https://www.linkedin.com/in/aldo-kriek-69760996/"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="mailto:noks88@gmail.com"><i class="fa fa-envelope"></i></a></li>
					<li><a href="https://github.com/Aldo-kriek"><i class="fa fa-github"></i></a></li> 		       					
					<li><a href="tel:+27822990779"><i class="fa fa-phone"></i></a></li>		
						      
			   </ul> 	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">		        	 
		        	<span>Design by <a href="#top">Aldo Kriek</a></span>	         	
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>


     <!-- Validation
   ================================================== --> 

   <script>
    
	// Validate name
   function validatename(field)
   {
	   return (field =="") ? "No name was entered. \n" : ""
   }

   // Validate email
   function validateemail(field)
   {
	   if(field == "" ) return "No email was entered.\n"
	   else if (!((field.indexOf(".") > 0 ) && (field.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(field))
	   return "email address is invalid.\n"
	   return""
   }

   	// Validate subject
	   function validatesubject(field)
   {
	   return (field =="") ? "No name was entered. \n" : ""
   }

		// Validate message
		function validatemessage(field) 
   {
	   return (field =="") ? "No message was entered. \n" :""
   }

</script>


</body>

</html>

