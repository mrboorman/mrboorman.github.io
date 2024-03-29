<!DOCTYPE html>
  <html>
  <head>
    <script>

        function getWidth(){
            /*alert(window.innerWidth || document.body.clientWidth);*/
        }
        function togglemenu(){
            if(document.getElementsByTagName("nav")[0].style.height == "auto"){
                document.getElementsByTagName("nav")[0].style.height = "80px";

            }
            else{
                document.getElementsByTagName("nav")[0].style.height = "auto";
            }
        }
    </script>
    <meta charset="utf-8">
    <title>ICTclass.ca</title>
    <link rel="stylesheet" href="style2020.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Nanum+Gothic|Open+Sans+Condensed:300|Raleway&display=swap" rel="stylesheet">
  </head>
  <body onload="getWidth();">
  <main>
      <header>
        <nav>
            <a id="button" onclick="togglemenu()">&#9776;</a>
            <div id="title"><a>ICTclass.ca</a></div>
            <div id="menu">

                <?php
                    include('menu.html')
                ?>

            </div>
        </nav>
          <div id="banner"></div>
          <div id="breadcrums">
            Welcome to Mr.Boorman's landing webpage for classes at Mount Douglas Secondary School.
          </div>
      </header>
      <div id="contenthome">

            <section id="notices">
            <?php
                include('notices.html')

            ?>
            </section>


<section id="contact">
          <h3>Contact &amp; Courses:</h3>
          <ul>
               <li>Mr. Boorman can be reached at: <strong style="color:blue;">cboorman@sd61learn.ca</strong></li>

                <li><b>2019/2020 ICT Courses (click image):</b><br><br>
                    <a href="http://borncg.com/ICT/images/ictcoursesw.png" target="_blank"><img src="http://borncg.com/ICT/images/ictcoursesw.png" alt="" style="max-width:100%;"></a>
                </li>
                </ul>
          </section>


          <div id="meme">
            <img src="memes/binarytshirt.jpg" alt="">
          </div>


          <!--<section id="resources">
                <?php
                include('resources.html')

                ?>

          </section>-->


<section id="rules">
<h3>Computer Lab Rules:</h3>
	  <ul style="font-size:20px;font-weight:bold;">
		<li>
			<h3>COVID, Health &amp; Safety:</h3>
			
			<ol>
				<li>Have clean hands. Use provided hand sanitizer.</li>
				<li>Don't be a space invader!</li>
				<li>Wear a mask.</li>
				<li>Log washroom trips on the provided sheet.</li>
				<li>Class-leaving procedure: Log off, then wipe down your station (keyboard, mouse, and all contacted hard surfaces) before you are dismissed.</li>
				<li>Know your school in-and-out doors. Don't linger in hallways.</li>
			</ol>
		
		</li>
		<li>
			<h3>General Conduct:</h3>
			
			<ol>
                <li>Students are expected to conduct themselves in a <a href="https://www.lexico.com/definition/cordial" target="_blank" style="color:blue;font-weight:bold;">cordial</a>, respectful manner that is conducive to their own and all members of the school community's well-being, functioning, and learning. This includes in-person and while using technology at school, home, and all other places.</li>
                
				<li><strong><u>Respect</u></strong> the people, the room, and the equipment in the lab.</li>
                
				<li>Be on time, and be logged in.</li>
                
				<li>When your attention is asked for, give your full attention.</li>
			</ol>
		
		</li>
		
		<li>
			<h3>Technology/Lab Use:</h3>
			 
			<ol>
				<li>Avoid drinks and food near computers.</li>
				<li><strong>Check</strong> daily if all equipment at your station is working properly and clean.</li>
				<li>Cell phones and electronics are to be OFF AND AWAY according to school policy.</li>
				<li>Lab computers are for school work ONLY.</li>
				<li>Save your files regularly on your H:\ drive.</li>
				<li>Log off your computer before you leave.</li>
				<li>Conversations about marks are to be face-to-face only, *not* digitally (email, classroom comments or otherwise). </li>
			</ol>
		
		</li>
		
		<li>
			<h3>Attendance, Absences, Material Covered &amp; Assignment Due Dates:</h3>
			
			<ol>
				<li>In-class attendance is mandatory. A lot of material is covered each day. You are responsible for learning the material missed in class. Use Google classroom postings as a starting point.</li>
				<li>Miss a class? rule-of-thumb: Bring a parent/guardian note the next day.</li>
				<li>Assignments have expected due dates, but Mr. Boorman is generally very flexible. Most assignments can be handed in late without penalty, ERXCEPT: time-sensitive quizzes, tests, presentations, group participation, etc. </li>
				<li>Students with a mark of less than 50% at the end of the term/quarter will recieve an F. Mr. Boorman will notify parents/guardians of students who are missing several assignments before an F is assigned.</li>
			</ol>
		
		</li>
	</ul>
	
	<span style="color:#000000;font-size:18px; display:block; margin-left:35px;font-weight:bold;">**Violation of Computer Lab Rules will result in all your school accounts being locked &amp; loss of computer privileges.</span><br/><br/>
</section>





      </div><!-- END OF CONTENT -->

  </main>
  </body>
  </html>
