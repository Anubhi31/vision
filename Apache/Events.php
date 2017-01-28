<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--Import materialize.css-->
        

        <!-- start: CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
        <!-- end: CSS -->
        
        <title>Events</title><link rel="icon" type="image/png" href="http://visionmanit.in/img/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<style type="text/css">
		/* Style the buttons that are used to open and close the accordion panel */
		button.accordionV {
			background-color: #fff;
			border-bottom: 1px solid #ddd;
			color: #444;
			cursor: pointer;
			padding: 18px;
            font-size: 18px;
			width: 100%;
			text-align: center;
			outline: none;
			transition: 0.4s;
		}

		/* Add a background color to the button when you move the mouse over it (hover) */
		button.accordionV:hover {
			background-color: #ddd;
		}

		/* Style the accordion panel. Note: hidden by default */
		div.panel {
			padding: 0px;
			display: block;
			max-height: 0px;
			overflow: hidden;
			transition: max-height 0.2s ease-out;
		}
            #noesis{}
            div.panel.active{
                max-height: 480px;
                padding: 5px;
        
            }/*
            @media only screen and(min-width:960px)
            
            {
                div.panel.active{
                
                }
            }*/
            @media screen and (max-width: 500px)
            
            {
                div.panel.active{
                max-height: 740px;
                }
            }
		</style>
	
		<!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

        <!--Other element insitialisations-->
        <script type="text/javascript" language="javascript">
            $( document ).ready(function(){
                var ini=0;
                $('.carousel').carousel(); //carousel init
				var acc = document.getElementsByClassName("accordionV");
				function toggleAccordion(acc,option) {
					
					var panel = acc.nextElementSibling;
					if (option == "close"){
					  panel.style.maxHeight = null;
					  panel.style.padding = "0px";
					  panel.classList.remove("active");
					} else {
					  panel.style.maxHeight = panel.scrollHeight-70 + 'px';
					  panel.style.padding = "5px";
					  panel.classList.add("active");
					} 
				}
				
				var i=0;
                var whatToDoBro; 
                 
                      whatToDoBro = "open";
					
				for (i = 0; i < acc.length; i++) {
				  acc[i].onclick = function(){
					var ID= this.id
                    var j;
                      ini++;
					var panel = this.nextElementSibling;
                      whatToDoBro="open";
					if(panel.style.maxHeight)
						whatToDoBro = "close";
					
					for(j = 0;j < acc.length; ++j)
						toggleAccordion(acc[j],"close");
					if(ini==1 && ID == "noesis")
                        whatToDoBro="close";
					toggleAccordion(this,whatToDoBro);
					
					
				  };
				}
            });
		</script>
	
    </head>

    <body>
        
        <header style="height:70px; box-sizing:content-box;">
        <!--start: Container -->
		<div class="container">   
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="Home.php"><img src="img/logo.png" style="width: 170px;height: 70px; margin-top:3px"></a>
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li><a href="Home.php">Home</a></li>
			              			<li><a href="About.php">About</a></li>
									<li><a href="Gallery.php">Gallery</a></li>
									<li class="active"><a href="Events.php">Events</a></li>
			              			<li><a href="Contact.php">Contact Us</a></li>
			              			<!--<li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="#">Action</a></li>
			                  				<li><a href="#">Another action</a></li>
			                  				<li><a href="#">Something else here</a></li>
			                  				<li class="divider"></li>
			                  				<li class="nav-header">Nav header</li>
			                  				<li><a href="#">Separated link</a></li>
			                  				<li><a href="#">One more separated link</a></li>
			                			</ul>
			              			</li>-->
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->	
        </header>
        
        <!-- starts: Collapsible -->         
        
            <!-- NOESIS : STARTS -->
           <div style="margin-bottom:160px">
            <button class="accordionV heading-collapsible" id="noesis">Noesis</button>

                <div class="panel active" >
                
                    <!-- Noesis Description -->
                    <div class="body-collapsible">
                        <p>
                            NOESIS is the signature event of Vision. It was started in year 2011 and still continues to be the biggest technical event of the institute after Technosearch, the annual technical festival of the college. It is a two day mega technical event conducted in mid September every year. In the past few years NOESIS received a great response. In year 2k16, it was conducted on 17th and 18th September. Students from various colleges enthusiastically participated in great number. There were more than 1000 participations. During NOESIS usually branch specific technical workshops are organised so as to acquaint students with the recent advancements in their branches giving them an edge over with hands on projects.
                        </p>
                    </div>

                    <br><br>
                    
                    <div class="carousel">
                        <!--<a class="carousel-item" href="#one!"><img src="http://lorempixel.com/800/400/food/1"></a>
                        <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/800/400/food/2"></a>
                        <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/800/400/food/3"></a>
                        <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/800/400/food/4"></a>-->
                        <div class="carousel-item" style="width:400px">
                            <div class="avatar view-team">
                                <img src="eImg/Noesis/python.png" alt="python">
                                <div class="mask">
                                    <h2 class="heading-carousel">Byte The Code</h2>
                                    <div class="body-carousel">
                                    <p>
                                        Byte the code is a workshop on python. In this workshop we aim to introduce students to the main structure and working of Python. This year it witnessed more than 400 participations. The highlight of the event was a project on web scrapping. To wrap things up there was a quiz which tested coding skills and intellect of the students, and the winners were awarded. The enthusiasm of students was overwhelming.     
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" style="width:400px">
                            <div class="avatar view-team">
                                <img src="eImg/Noesis/futurena.png" alt="futurena">
                                <div class="mask">
                                    <h2 class="heading-carousel">Futurena</h2>
                                    <div class="body-carousel">
                                    <p>
                                         Have you ever wondered how a small digital watch on your wrist works?? Or ever pondered to enter in the world of technology and go beyond theory? So here comes Futurena, branch specific technical workshop organized in Noesis so as to acquaint students with the recent advancements in electronics circuits  giving them an edge over with hands on projects in the workshop itself. 
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" style="width:400px">
                            <div class="avatar view-team">
                                <img src="eImg/Noesis/cad.png" alt="cad">
                                <div class="mask">
                                    <h2 class="heading-carousel">Auto-Cad</h2>
                                    <div class="body-carousel">
                                    <p>
                                        Were you ever good at drawing diagrams in the School? Ever thought of how the buildings or bridges are "Drawn"?Have a small glimpse of AutoCAD,which is a computer-aided drafting software program used to create blueprints for buildings, bridges, and computer chips, among other things.

                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" style="width:400px">
                            <div class="avatar view-team">
                                <img src="eImg/Noesis/aakriti.png" alt="Aakriti">
                                <div class="mask">
                                    <h2 class="heading-carousel">Aakriti</h2>
                                    <div class="body-carousel">
                                    <p>
                                        AAKRITI, a workshop organised to shape and mould the foundations of newly generated buds of CIVIL ENGINEERING. Its main focus was on creating an interactive session to enlighten Civil Engineering students about their branch and open up the new doors of excellence.
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" style="width:400px">
                            <div class="avatar view-team">
                                <img src="eImg/Noesis/aspentech.png" alt="aspentech">
                                <div class="mask">
                                    <h2 class="heading-carousel">Aspen-Tech</h2>
                                    <div class="body-carousel">
                                    <p>
                                        One of the workshops in Noesis, ASPEN-TECH is being organized every year. It’s a chemical engineering software but anyone who is interested to learn, can attend the event. The event is totally student interactive.               
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                    
                </div>
            <!-- NOESIS : ENDS -->

            <!-- TECHNO : STARTS -->
            <button class="accordionV heading-collapsible">TechnoSearch</button>
            <div class="panel">
                    <!-- Techno Description -->
                    <div class="body-collapsible">
                        <p>
                            Technosearch is the annual technical festival of NIT-BHOPAL which is held during the odd semester every year. The festival provides an opportunity to the many hundreds of aspiring young engineers to embrace success.VISION organized various events on discrete fields be it  electronics,electrical,coding,robotics, civil related events or even fun events. To name a few we had electrical and electronic based events like Circuitrun,Electrobuzz and Electrique ; Civil based event , Cantilever ; Coding events like Code Kriegers .We had a huge participation from colleges all over Bhopal.

                        </p>
                    </div>

                    <div class="carousel">

                        <div class="carousel-item" style="width:400px">
                            <div class="avatar view-team">
                                <img src="eImg/techno/code%20k.jpg" alt="CodeKriegers">
                                <div class="mask">
                                    <h2 class="heading-carousel">Code Kreigers</h2>
                                    <div class="body-carousel">
                                    <p> 
                                        Code Kreigers was started in year 2014. Code kreigers 3.0 was a massive success with more than 200 participations. It was a technical and fun event with 3 offline and 1 online round. The winners of online round were given direct entry to the second round of offline event. First round was a treasure hunt. Second round was a debugging round. Third round was coding round. Coding is not only about making complex code rather it's an art. Students enjoyed the exposure to the journey of coding world.  
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" style="width:400px">
                            <div class="avatar view-team">
                                <img src="eImg/techno/ROBO%20FIFA.jpg" alt="RoboFifa">
                                <div class="mask">
                                    <h2 class="heading-carousel">Robo Fifa</h2>
                                    <div class="body-carousel">
                                    <p>
                                        You have played a lot Of FIFA now on your laptops. Now get ready geeks, VISION brings you its biggest platform for FIFA fans. This is what you have to do... Design your own manual bots, Team up or play single, and crush your rivals with your amazing strategies. Time for video games is over. It’s time to get down on the field, show your strategic gameplay, tech-mind and team game to the world.

                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" style="width:400px">
                            <div class="avatar view-team">
                                <img src="eImg/techno/ELECTROBUZZ.jpg" alt="Elecrobuzz">
                                <div class="mask">
                                    <h2 class="heading-carousel">Electrobuzz</h2>
                                    <div class="body-carousel">
                                    <p>
                                        All that time when you have been watching those interesting TV series and movies, your parents must have told you to stop killing time. Now is your turn, gear up for the next version of ELECTROBUZZ with your Line followers. A flawless design will surely surpass the others. Complete the twisted path in time while playing our version of PICTIONARY. A combo of your tech creativity and knowledge of those so called ‘time wasting ‘ movies will take you to the finale where you will face those very best among all. 
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" style="width:400px">
                            <div class="avatar view-team">
                                <img src="eImg/techno/circuit%20run.jpg" alt="Circuit Run">
                                <div class="mask">
                                    <h2 class="heading-carousel">Circuit - Run</h2>
                                    <div class="body-carousel">
                                    <p>
                                        Bring out the Sherlock within you to decipher the brainstorming clues and also scratch your heads while we riddle you in the very first round. So brace your wits and buckle up, Knock down the questions and get down to the real hunt.                
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="carousel-item" style="width:400px">
                            <div class="avatar view-team">
                                <img src="eImg/techno/TECH-E.jpg" alt="Tech-Enigma">
                                <div class="mask">
                                    <h2 class="heading-carousel">Tech-Enigma</h2>
                                    <div class="body-carousel">
                                    <p>
                                        A fun -cum- technical event. Students are required to participate in a team of two. It consists of three rounds namely, BIZ round, Questionnaire, Brain Teaser. Make your way through the fun and witty questions of these rounds and get ready for the BIG PICTURE-‘The Brain Teaser’. It will be the ultimate test of your team work and circuit debugging skills                
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            
            <!-- TEHCHNO : ENDS -->
            
            <!-- WORKSHOP: BEGINS -->
            <button class="accordionV heading-collapsible">Workshops</button>
            <div class="panel">
                    <!-- WOrkshop Description -->
                    <div class="body-collapsible">
                        <p>
                            Vision had a flourishing adventure in the previous sessions organizing workshops with a wide range of topics starting from a basic WLT session to a whole new  level of an Inter-college  Arduino  workshop , involving students from all over Bhopal. Vision helped various participants to build their own bots, modify them and prepared to a level for competing at National Level techfest. Vision also provided insight in coding world through iniatiative such as Exploring C and Web Development using HTML &amp; CSS.
                        </p>
                        <br>
                    </div>

                    <div class="carousel">

                        <div class="carousel-item" style="width:400px">
                            <div class="avatar view-team">
                                <img src="eImg/wlt.jpg" alt="White Line Tracer Workshop">
                                <div class="mask">
                                    <h2 class="heading-carousel">White Line Tracer Workshop</h2>
                                    <div class="body-carousel">
                                    <p>
                                        One of the main workshops organized by VISION every year comprising of basic circuits on breadboard, sensors ,introduction to IC’s , etc. to hone interest towards Embedded Systems. Using these components we prepare the students to form an “Automatic White Line Tracer“ robot , which would further help them to compete in the competitions nationwide!.  
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" style="width:400px">
                            <div class="avatar view-team">
                                <img src="eImg/C%20workshop.jpg" alt="C-Workshop">
                                <div class="mask">
                                    <h2 class="heading-carousel">C Workshop</h2>
                                    <div class="body-carousel">
                                    <p>
                                        C Workshops are organized at the beginning of the session by the Computer Science team to guide the newcomers in the field of computer science. It’s a three day ride which begins with teaching the language from the most basic level .Students from every branch attended the workshop in order to get well acquainted with the basics of the language and move ahead in the world  of programming. VISION received a huge response from students outside MANIT.


                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" style="width:400px">
                            <div class="avatar view-team">
                                <img src="eImg/manual.jpg" alt="Manual Robot">
                                <div class="mask">
                                    <h2 class="heading-carousel">Manual Bot Workshop</h2>
                                    <div class="body-carousel">
                                    <p>
                                        Students from all branches participated for this workshop involving building of a manual bot controlled by a remote controller. Furthermore we had another session covering  theory and hands on of a “Wireless Remote Controlled” robot which introduced everyone with the concept of wireless communication. We had a huge participation of around 400 students .
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="carousel-item" style="width:400px">
                            <div class="avatar view-team">
                                <img src="eImg/arduino.jpg" alt="Arduino Workshop">
                                <div class="mask">
                                    <h2 class="heading-carousel">Arduino Workshop</h2>
                                    <div class="body-carousel">
                                    <p>
                                        This workshop was the best one of each session. Workshop on microcontroller ‘Arduino’ consists of participants from all colleges of Bhopal viz. LNCT, OCT, RITS to name a few. It was a platform for everyone to prepare them for participating in IIT Roorkee techfest Cognizance.Around 600 participations were noted with 450 from our college and 150 from other colleges in 2016. 
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" style="width:400px">
                            <div class="avatar view-team">
                                <img src="eImg/webDeve.jpg" alt="Web development:Wordpress">
                                <div class="mask">
                                    <h2 class="heading-carousel">Web-Development Workshop</h2>
                                    <div class="body-carousel">
                                    <p>
                                        Web development workshops are organized annually by the computer science and engineering team of VISION for the students inside and outside MANIT. These workshops are meant to guide the students in order to move ahead in the world of web development. These include sessions of   HTML  , CSS , Java Script and PHP for two consecutive days . VISION each year receives huge from students of various institutes.                  
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
           
            <!-- WORKSHOP : ENDS -->
        <a href="pastEvents.php" style="text-decoration:none; color:#444;"><button id="past-event" class="heading-collapsible">Past Events</button></a>
        </div>
        
        
        <!-- start: Footer Menu -->
        <div class="footer-bottom" style="text-align:center;padding-bottom: 3rem;padding-top: 24px;padding-bottom: 10px;font-size: 16px ;font-family: raleway-medium,sans-serif;background: #14181E;">
    <div class="row" >
        <div class="span3"><span>Sponsored by</span><br><img src="img/drrmztech.png"></div>
        <div class="copyright"> <span>&copy; Copyright Vision.</span><br><span>Designed and Maintained by Vision Web Team</span></div>
        
      </div>
    </div>
	<!-- end: Footer Menu -->

    </body>
</html>