<html>
    <head>
        <title>
            Pradeepa
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Harmattan&display=swap" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="welcome-box">
            <div class="flex-cont">
                <div style="padding-top: 40px;">
                    Hi! My name is Pradeepa, and welcome to my webpage... 
                </div>
                <div>
                    <img src="image-me.jpg">
                </div>
            </div>
        </div>
        <div class="bar" id = "headerbar">
            <a href="#ed">Education</a>
            <a href="#projects">Projects</a>
            <a href="#interests">Interests & Hobbies</a>
            <a href="#aboutme" class="right">About</a>
        </div>
        <div class=text-box id=ed style="line-height: 15px;">
            <div style="margin-left: 35px;">
            <h3>Schooling</h3>
            <p>Dr.K.K.R's Gowtham (Gnt & Gdv)</p>
            <h3>Intermediate(11th & 12th)</h3> 
            <p>Sri Chaitanya Junior College, Gudavalli</p>
            <h3>Bachelor of Technology, CSE</h3>
            <p>Indian Institute of Technology, Guwahati</p>

            </div>
         </div>
        <div class=text-box id=projects>
            <ul type="none">
                <li>
                    <h3>Webportal for IITG students and Professors</h3>
                    <p>Developed a webportal using Django, HTML and CSS that can be used by the faculty and students of IITG to check their course contents, visit the webpages of teching faculties (web scraping), etc.</p>
                </li>
                <li>
                    <h3>Smart Medicine</h3>
                    <p>Assembling a Raspberry Pi, a camera and speakers, my team created a prototype of sorts that can help elder people to know the expiry date of their medicines, and can remind them when to take medinces after we manually set the schedule of pill taking. You can find a demo video of the project below. We used Python OCR for expiry detection.</p>
                    <p><a href="https://drive.google.com/file/d/1Zrw7ALJdKCJef8mRne0qN5_B6JBCtKsT/view?usp=sharing"> Click here</a> for a demo video</p>
                </li>
            </ul>
            <h2 style="margin-left:35px;">Theory-based Projects</h2>
            <ul type="none">
                <li>
                   <p> Accelerating critical-section access with iNPG and AVCR for NoC-based many cores.</p>
                </li>
                <li>
                    <p>Fuzzy logic - based Security Analysis in IoT based Systems</p>
                </li>
                <li>
                    <p>Literature Survey on Spatial Super Video Resolution Techniques.</p>
                </li>
                <li>
                    <p>Error Detection using Cyclic Redundancy Code</p>
                </li>
                <li>
                   <p> Simulation of Railway Gate Controller as a problem to verify the  reachability, safety and liveliness properties.</p>
                </li>
            </ul>
        </div>
        <div class="text-box">
            <h2>Skills</h2>
            <ul type="none">
                <li>Django (Python)</li>
                <li>Javascript (with a bit of React)</li>
                <li>Shell & Bash Scripting, Socket Programming</li>
                <li>Latex,VHDL,Haskell,Prolog</li>
                <li>Worked with tools like Xilinx, Wireshark, Bison, Flex, UPPAAL, etc. </li>
            </ul>
        </div>
        <div class="text-box" id="interests">
            <h2>Interests</h2>
            <ul type="none">
                <li>Avid reader</li>
                <li>Calligraphy & Lettering</li>
                <li>Dog Lover</li>
                <li>Blogging</li>
            </ul>
        </div>
        <div class="am-box" id="aboutme">
           
            My name is Pradeepa Seelam. My main interest is front-end web development, but I am interested in other fields of software development as well. I am passion-driven, hardworking and adaptable to the situation as it demands. 
            I believe that journey is as important as the destination itself. 
            <br>
        </div>
        <div class=fbar>
            <div class="right nor-font" style="">
                <p><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="" style="color: hsl(180, 50%, 77%);">pradeepa.seelam@gmail.com</a></p>
                <p><span class="fa fa-linkedin" aria-hidden="true"></span> <a href="https://www.linkedin.com/in/pradeepa-seelam-43947b150/" target="_blank" style="color: hsl(180, 50%, 77%);">LinkedIn</a></p>
                <p><span class="fa fa-github" aria-hidden="true"></span> <a href="https://github.com/pradeepa45" target="_blank" style="color: hsl(180, 50%, 77%);">Github</a></p>
            </div>
            <div class="flex-cont">
                <form action="https://formsubmit.co/2868eb31feb5f02f21a75f4756e8bcd9" method="POST">
                    <div class="flex-cont">
                        <div>
                            <h3 style="padding-left:75px;">Leave a message!</h3>
                            <input type="text" name="name" placeholder="Your Full Name" required> <br>
                        <input type="email" name="email" placeholder="Email Address" required> <br>
                        <input type="number" placeholder="Contact Number"> <br>
                        </div>
                        <div>
                            <textarea placeholder="Enter your message" name="message" rows="15" required></textarea><br>
                        </div>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
        <script>
            window.onscroll = function()
            {myFunction()};

            var header = document.getElementById("headerbar");
            var sticky = header.offsetTop;

            function myFunction(){
                if(window.pageYOffset > sticky){
                    header.classList.add("sticky");
                }
                else {
                    header.classList.remove("sticky");
                }
            }
        </script>
    </body>
</html>