<?php

    session_start();

?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <nav>
            <link href="PortfolioStyleSheet.css" rel="stylesheet" type="text/css"/>
            <link href="reset.css" rel="stylesheet" type="text/css"/>
        </nav>

        <title>MMM Portfolio</title>	
    </head>
    
    <body>

        <!--Start of nav bar-->
        <div id = "back-to-nav">

        <header>
            <div class = "container">

                <div id = "myname"><h1>Mohammad Muminul Islam</h1></div>

                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#aboutme">About Me</a></li>
                        <li><a href="#educationandqualifications">Education and Qualifications</a></li>
                        <li><a href="#skillsandachievements">Skills and Achievements</a></li>
                        <li><a href="#myexperience">Experience</a></li></html>
                        <li><a href="#myportfolio">Portfolio</a></li>
                        <li><a href="viewBlog.php">Blog</a></li>
                        <li><a href="#contactpage">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        </div>
        <!--End of nav bar-->

        <!--Start of homepage-->
        <div id = "home">

        <section class = "homepage">

            <div class = "container">

            <?php
                if(!isset($_SESSION['username'])){
                    echo '<a href="login.html"><button id="log-in-index">Log in/Register</button></a>';
                }
                else{
                    echo '<a href="logout.php"><button id="log-out-index">Log out</button></a>';
                }
            ?>

                <div id = "my-img"></div>

                <div id = "intro"><p>Hi,</br> I'm Mohammad.</br> I'm an aspiring </br> Software Developer.</p></div>

            </div>

        </section>

        </div>
        <!--End of homepage-->

        <!--Start of about me-->
        <div id = "aboutme">

        <section class = "aboutme">

            <div class = "container">

            <h2>About Me</h2></br></br>

            <p>
                I am a responsible and reliable person who has great communication and </br>
                organisational skills. When given a task, I can use my own initiative </br>
                and work as part of a team under pressure to meet challenging deadlines </br>
                and objectives. I possess the necessary enthusiasm, drive and motivation </br>
                required to achieve maximum potential in any work.</br></br></br></br>
                I am currently studying Computer Science Bsc at Queen Mary University of </br>
                London, and aspire to persue a career in Software Development and ultimately </br>
                prepare myself for future leadership positions.
            </p>

            <div id = "my-img2"></div>
            
            </div>
        
        </section>

        </div>
        <!--End of about me-->
        
        <!--Start of Education and Qualifications-->
        <div id = "educationandqualifications">

        <section class = "education-and-qualifications">

            <div class = "container">

                <h2>Education and Qualifications</h2></br></br>

                <ul>
                    <p>Education:</p></br>
                    <li>St. Augustines C of E High School: Sep 2011 – June 2016</li>
                    <li>St. Augustines C of E High School (Six form): Sep 2016 – June 2019</li></br></br></br>
                    <p>Qualifications:</p></br>
                    <li>GCSE Mathematics</li>
                    <li>GCSE Core Science</li>
                    <li>GCSE Double Science</li>
                    <li>GCSE ICT</li>
                    <li>GCSE Graphics</li>
                    <li>GCSE Geography</li>
                    <li>GCSE English Literature</li>
                    <li>GCSE English Language</li>
                    <li>GCSE Religious Studies</li>
                    <li>GCSE Spanish</li></br>
                    <li>A-level Mathematics</li>
                    <li>A-level Physics</li>
                    <li>A-level Chemistry</li>
                </ul> 

            </div>
        </section>

        </div>
        <!--End of Education and Qualifications-->

         <!--Start of Skills and Achievements-->
         <div id = "skillsandachievements">

         <section class = "skills-and-achievements">

            <div class = "container">

                <h2>Skills and Achievements</h2></br></br>

                <ul>
                    <p>Skills:</p></br>
                    <li>Java</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>Fluent in English and Bengali</li>
                    <li>Well honed communication and interpersonal skills</li>
                    <li>Polite and always punctual</li>
                    <li>Excellent skills in Numeracy and ICT (achieved A in both Maths and ICT GCSE's)</li></br></br></br>
                    <p>Achievements:</p></br>
                    <li>Acheived an A* in GCSE Graphics</li>
                    <li>Achieved an A* in A-level Mathematics</li>
                    <li>Created an Object Oriented Programming text-based adventure game using java</li>

                </ul>

                <figure> <div id = "maths-certificate-img"></div> </figure>

                <figcaption> A-level Mathematics Certificate </figcaption>

            </div>
        </section>

        </div>
        <!--End of Skills and Achievements-->

        <!--Start of Experience-->
        <div id = "myexperience">

        <section class = "experience">

            <div class = "container">

                <h2>Experience</h2></br></br>

                <ul>
                    <p> Bombay Flame Indian Cuisine</br>
                        Job role: Waiter</br>
                        Duration: Oct 2015 - March 2019</br>
                        Work duties:
                    </p></br></br>
                    <li>Providing direct attention to customer needs</li>
                    <li>Assisting cashier – handling cash, debit and credit card transactions</li>
                    <li>Dealing with customer queries (in regards to reservations, parties and complaints)</li>
                    <li>Cleaning and tidying shop floor</li></br></br></br></br>
                    <p>
                        Debenhams</br>
                        Job role: Sales Asistant</br>
                        Duration: Sep 2018 - Dec 2018</br>
                        Work duties:
                    </p></br></br>
                    <li>Process stock from delivery and to the shop floor accurately and efficiently</li>
                    <li>Ensuring excess stock is returned to the storerooms and processed correctly</li>
                    <li>Helping customers find specific items on the shop floor</li>
                    <li>Tidying up the shop floor, making sure that all items are arranged in an appropriate order</li></br></br></br></br>
                    <p>
                        Learning and Development Centre</br>
                        Job role: Assistant Tutor</br>
                        Duration: Sep 2015 - April 2016</br>
                        Work duties:
                    </p></br></br>
                    <li>Providing first class tuition</li>
                    <li>Preparing monthly lesson plan and assessment tests</li>
                    <li>Communicating effectively with foreign students</li>
                    <li>Dealing with queries from parents and providing feedback in regards to student progression</li></br>

                </ul>
            </div>
        </section>

        </div>
        <!--End of Experience-->
        
        <!--Start of Portfolio-->
        <div id = "myportfolio">
        <section class = "portfolio">

            <div class = "container">

                <h2>My Projects</h2></br></br>

                <figure id="adventure-game-img">

                <img src = "my-images/portfolio-img-1.jpg" height="400" width="500"> &nbsp;&nbsp;&nbsp;

                <img src = "my-images/portfolio-img-2.jpg" height="400" width="500">

                </figure>

                <figcaption>
                    Adventures Of Heroes is a multiple choice, OOP-based java game. The goal is to enter the Safe Haven (Town).
                    In order to do this, you have to fight a dragon, collect diamonds from it and then return these diamonds to the guardian.
                    Along this journey, you can pick up weapons, engage in battles with monsters and more.</br></br></br></br></br>
                </figcaption>

                <figure id = "quiz-img">
                     <img src = "my-images/portfolio-img-3.jpg" height="250" width="700">
                </figure>
           
                </br></br></br></br></br>
                
                <figcaption>
                    I designed a science-based short answer quiz using java, where the player gets points for correct answers, 
                    but they lose all their points if they choose an “impossible” answer: one that makes no sense.
                </figcaption>

            </br></br></br></br>

            </div>
        </section>

        </div>
        <!--End of Portfolio-->

         <!--Start of Contact-->
         <div id ="contactpage">

         <section class = "contact">

            <div class = "container">

                <h2>Contact</h2></br></br>

                <h4>
                    Get in touch
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Current location
                </h4>

                <footer>
                    
                <p id = "p1">
                    Email: <a href="mailto:mohammad.islam2000@outlook.com">mohammad.islam2000@outlook.com</a> </br></br>
                    Telephone: 07958524803 </br></br>
                </p>
                
                <p id = "p2">
                    London, UK
                </p>

                <a href="#back-to-nav">
                <button type = "button">Back To Home</button>
                </a>

            </br></br></br></br></br></br></br>

                <p id="copyright-p">
                    Copyright © 2020 Mohammad Muminul Islam
                </p>
                </footer>


            </div>
        </section>

        </div>
        <!--End of Contact-->




























