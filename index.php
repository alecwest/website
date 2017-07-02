<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="A portfolio / personal website">
    <meta name="author" content="Alec West">
    <link rel="icon" href="../../favicon.ico">

    <title>Alec West</title>

    <!-- Bootstrap core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- Fullpage.js CSS -->
    <link rel="stylesheet" type="text/css" href="bower_components/fullpage.js/jquery.fullPage.css" />
    
    <!-- Google ReCAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        /* Sections
         * --------------------------------------- */
        #section0, #section2{
            background-image: url(images/congruent_outline/congruent_outline.png);
            color: #EEEEEE;
        }
        #section1, #section3{
            background-image: url(images/concrete_seamless/concrete_seamless/concrete_seamless.png);
            color: #333333;
        }
        #fp-nav ul li, .fp-slidesNav ul li{
            background-color: white;
            border-radius: 100%;
            height: 18px;
            width: 18px;
        }
        #self{
            border-radius: 100%;
            margin: 0 auto;
        }
        .blackBar{
            width: 33%;
            border-bottom: 0.5em solid #333333;
            font-size: 0.5em;
            float: left;
        }
        #resume{
            position: fixed;
            z-index: 9999;
            right: 2em;
            bottom: 2em;
        }
        .slideHeader h1, .slideContent{
            text-align: left;
        }
        .workListItem, .volunteerListItem, .projectListItem{
            width: 100%;
            text-align: left;
            position: relative;
            display: block;
            box-sizing: border-box;
            border-bottom: 2px solid transparent;
        }
        .workListItem:hover, .workListItem.active, .volunteerListItem:hover, .projectListItem:hover, .projectListItem.active{
            border-bottom: 2px solid #333333;
        }
        .projectListItem:hover, .projectListItem.active{
            border-bottom: 2px solid #eeeeee;
        }
        .workListContent, .projectListContent{
            display: none;
        }
        .workListContent.active, .projectListContent.active{
            margin: 0 auto;
            display: block;
        }
        li{
            margin: 1em 0em;
        }
    </style>
</head>

<body>

<!--<ul id="menu">-->
<!--	<li data-menuanchor="firstPage"><a href="#firstPage">First slide</a></li>-->
<!--	<li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>-->
<!--	<li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>-->
<!--	<li data-menuanchor="4thpage"><a href="#4thpage">Fourth slide</a></li>-->
<!--</ul>-->

<div id="resume">
    <a href="#" class="btn btn-info btn-lg">
      <span class="glyphicon glyphicon-download"></span> My Resume
    </a>
</div>
    
<div id="fullpage">
    <div class="section" id="section0">
<!--        <img src="images/self.JPG" id="self" class="img-responsive"/>-->
        <h1>Alec West</h1>
        <h3>Tennessee Tech University '19</h3>
    </div>
    
    <div class="section active" id="section1">
        
        <div class="slide">
            <div class="row slideHeader">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <h1>About Me</h1>
                    <hr class="blackBar hidden-xs hidden-sm"/>
                </div>
            </div>
            <div class="row slideContent">
                <div class="col-xs-6 col-sm-6 col-md-3 col-md-offset-3">
                    <p>My name is Alec West and I am a junior studying Computer Science at Tennessee Tech University. While my interests fall more into the back-end/low-level area of things, I have found myself taking on just about any project thrown at me. I already have one co-op semester under my belt (two more to go) and am currently in a research internship with the school's computer science department.</p>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <p>I'm a person with a "can-do" attitude and overall desire to get stuff done right. Some of my personal strengths include being adaptable, open minded, and organized. When I'm not typing away at school or work, I'm often found playing card/board/video games with friends, playing cello with the University Orchestra, visiting family back in Chattanooga, or trying to raise my pug, Becky.</p>
                </div>
            </div>

        </div> <!-- section1 slide0 -->
        
        <div class="slide">
            
            <div class="row slideHeader">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <h1>Work Experience</h1>
                    <hr class="blackBar hidden-xs hidden-sm"/>
                </div>
            </div>
            <div class="row slideContent">
                <div class="col-xs-12 col-sm-12 col-md-3 col-md-offset-3">
                    <!-- When selected, content is displayed -->
                    <ul class="workList">
                        <li class="workListItem workListItem0">
                            <h3>PELI Compass Research Internship</h3>
                            <!-- TODO Make 'Current' automatically update once I graduate -->
                            <h4>2017 - Current</h4>
                        </li>
                        <li type="li" class="workListItem workListItem1">
                            <h3>Adtran Co-op</h3>
                            <h4>Fall 2016, Summer 2017, Spring 2018</h4>
                        </li>
                        <li type="li" class="workListItem workListItem2">
                            <h3>Cello Performance</h3>
                            <h4>2011 - 2016</h4>
                        </li>
                        <li type="li" class="workListItem workListItem3">
                            <h3>Retail</h3>
                            <h4>July 2013 - January 2015, Summer 2016</h4>
                        </li>
                        <li type="li" class="workListItem workListItem4">
                            <h3>Math Tutor</h3>
                            <h4>2014 - 2015</h4>
                        </li>
                    </ul    >
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <ul class="workList">
                        <li class="workListContent workListItem0">
                            <p>
                                PELI is a research/design project aimed to help improve nursing homes by providing helpful insight into residential preferences through machine learning. With the help of Ruby on Rails, our team is working to make this possible.
                            </p>
                        </li>
                        <li class="workListContent workListItem1">
                            <p>
                                Adtran is a telecom company based in Huntsville, AL. My time there thus far has given me a broad view of their products, and introduction to product testing through Python, Debian package architecture, YANG modelling, MOSAIC OS, and working as a member of a real team.
                            </p>
                        </li>
                        <li class="workListContent workListItem2">
                            <p>
                                Not long after starting the Cello, I began taking jobs playing in weddings, banquet quartets, school musicals, and theater company musicals on demand. Some of my early team experience and communcation with customers came from these jobs.
                            </p>
                        </li>
                        <li class="workListContent workListItem3">
                            <p>
                                My work in retail was my first introduction to the workplace. I learned to make myself more approachable, willing to help, and more engaging with my fellow employees and customers.
                            </p>
                        </li>
                        <li class="workListContent workListItem4">
                            <p>
                                While in Highschool, I acted as a private tutor to a few students for 6th grade math, geometry, algebra, and pre-calculus.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div> <!-- section1 slide1 -->
        
        <div class="slide">
            
            <div class="row slideHeader">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <h1>Education</h1>
                    <hr class="blackBar hidden-xs hidden-sm"/>
                </div>
            </div>
            <div class="row slideContent">
                <div class="col-xs-12 col-sm-12 col-md-3 col-md-offset-3">
                    <ul>
                        <li><h3>Tennessee Tech University</h3></li>
                        <li><h4>Class of 2019</h4></li>
                        <li><h4>Major - Computer Science</h4></li>
                        <li><h4>GPA - 3.94</h4></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <ul>
                        <li><h3>Classes Taken</h3></li>
                        <li><h4>Object Oriented Programming</h4></li>
                        <li><h4>Database Management and Design</h4></li>
                        <li><h4>Ethics and Professionalism</h4></li>
                        <li><h4>Unix Lab</h4></li>
                        <li><h4>Intro to Probability &amp; Statistics</h4></li>
                    </ul>
                </div>
            </div>
            
        </div> <!-- section1 slide2 -->
        
        <div class="slide">
            
            <div class="row slideHeader">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <h1>Volunteer Work</h1>
                    <hr class="blackBar hidden-xs hidden-sm"/>
                </div>
            </div>
            <div class="row slideContent">
                <div class="col-xs-12 col-sm-12 col-md-3 col-md-offset-3">
                    <ul class="volunteerList">
                        <li class="volunteerListItem">
                            <h3>Engineering Lab Helpdesk/Intern</h3>
                            <h4>2015 - Current</h4>
                        </li>
                        <li class="volunteerListItem">
                            <h3>Cookeville's "Heart of the City" Playground build</h3>
                            <h4>2015</h4>
                        </li>
                        <li class="volunteerListItem">
                            <h3>Cellist with Closed Door Entertainment</h3>
                            <h4>2015</h4>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <ul class="volunteerList">
                        <li class="volunteerListItem">
                            <h3>Played in Quartets for Chattanooga Elementary Schools</h3>
                            <h4>2013 - 2015</h4>
                        </li>
                        <li class="volunteerListItem">
                            <h3>String Theory Youth Initiative Website Management</h3>
                            <h4>2014 - 2015</h4>
                        </li>
                        <li class="volunteerListItem">
                            <h3>Youth Leadership Chattanooga Service Projects</h3>
                            <h4>2014</h4>
                        </li>
                    </ul>
                </div>
            </div>
        
        </div> <!-- section1 slide3 -->
        
    </div> <!-- section1 -->
    
    <div class="section" id="section2">
        
        <div class="row slideHeader">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <h1>My Projects</h1>
                <hr class="blackBar hidden-xs hidden-sm"/>
            </div>
        </div>
        <div class="row slideContent">
            <div class="col-xs-12 col-sm-12 col-md-3 col-md-offset-3">
                <ul class="projectList">
                    <li class="projectListItem projectListItem0">
                        <h3>Coursera Machine Learning Course</h3>
                        <h4>Summer 2017</h4>
                    </li>
                    <li class="projectListItem projectListItem1">
                        <h3>Weekly Study Room Reservations</h3>
                        <h4>Spring 2017</h4>
                    </li>
                    <li class="projectListItem projectListItem2">
                        <h3>Notes to Flash Card Converter</h3>
                        <h4>Spring 2017</h4>
                    </li>
                    <li class="projectListItem projectListItem3">
                        <h3>Website Design</h3>
                        <h4>2014 - Current</h4>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <ul class="projectList">
                    <li class="projectListContent projectListItem0">
                        <p>
                            Due to scheduling conflicts, I am unable to take the class offered by TTU, so I decided instead to take it online over the summer.
                        </p>
                    </li>
                    <li class="projectListContent projectListItem1">
                        <p>
                            I wrote and scheduled the execution of a python script that reserves a study room for me on two pre-selected days and times.
                        </p>
                    </li>
                    <li class="projectListContent projectListItem2">
                        <p>
                            This script converted class note text files into term/definition type note cards.
                        </p>
                    </li>
                    <li class="projectListContent projectListItem3">
                        <p>
                            While website design isn't really my strong point, I do occasionally find myself getting back into it. I've put together websites for a youth string group through wordpress, a senior project blog on drones, and of course this website!
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        
    </div> <!-- section2 -->
    
    <div class="section" id="section3">

        <div class="row slideHeader">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <h1>Contact Me  (WIP)</h1>
                <hr class="blackBar hidden-xs hidden-sm"/>
            </div>
        </div>
<!--
        <div class="row slideContent">
            <div class="col-xs-12 col-sm-12 col-md-3 col-md-offset-3">
                <ul>
                    <li>
                        <h3>Email</h3>
                        <h4><a>alecwest38@gmail.com</a></h4>
                    </li>
                    <li>
                        <h3></h3>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
            </div>
        </div>
-->
        <div class="row slideContent">
            <div class="row">
                <form class="form-horizontal col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3" role="form" method="post" action="index.php">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" />

                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" id="message" rows="4" name="message" placeholder="Message" ></textarea>

                    </div>
                    <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
                    <div class="form-group g-recaptcha" data-sitekey="6LcwoScUAAAAAHW5xp8lTmBmGldOZv5j1NKm7ITF"></div>

                </form>
            </div>
        </div>
    
    </div> <!-- section3 -->
    
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>window.jQuery || document.write('<script src="bower_components/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="bower_components/jquery/dist/bootstrap.min.js"></script>

<!-- Fullpage.js JavaScript -->
<script type="text/javascript" src="bower_components/fullpage.js/jquery.fullPage.js"></script>
<!--TODO Responsive slides-to-sections don't seem to be working -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
            anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
            menu: '#menu',
            scrollingSpeed: 800,
            continuousVertical: true,
            continuousHorizontal: true,
            navigation: true,
            navigationPosition: 'right',
            navigationTooltips: ['First page', 'Second page', 'Third page', 'Fourth page'],
            slidesNavigation: true,
            slidesToSections: true,
            controlArrows: false,
            responsiveWidth: 900,
            responsiveHeight: 600,
            responsiveSlides: true,
            responsiveSlidesKey: 'YWx2YXJvdHJpZ28uY29tX3RoVWNtVnpjRzl1YzJsMlpWTnNhV1JsY3c9PUVZdg==',
            afterResponsive: function(isResponsive){
                
            }
        });
    });
    $(".workListItem0").on('click', function(){
        $('.workListItem,.workListContent').removeClass("active");
        $('.workListItem0').addClass("active");
    });
    $(".workListItem1").on('click', function(){
        $('.workListItem,.workListContent').removeClass("active");
        $('.workListItem1').addClass("active");
    });
    $(".workListItem2").on('click', function(){
        $('.workListItem,.workListContent').removeClass("active");
        $('.workListItem2').addClass("active");
    });
    $(".workListItem3").on('click', function(){
        $('.workListItem,.workListContent').removeClass("active");
        $('.workListItem3').addClass("active");
    });
    $(".workListItem4").on('click', function(){
        $('.workListItem,.workListContent').removeClass("active");
        $('.workListItem4').addClass("active");
    });
    $(".projectListItem0").on('click', function(){
        $('.projectListItem,.projectListContent').removeClass("active");
        $('.projectListItem0').addClass("active");
    });
    $(".projectListItem1").on('click', function(){
        $('.projectListItem,.projectListContent').removeClass("active");
        $('.projectListItem1').addClass("active");
    });
    $(".projectListItem2").on('click', function(){
        $('.projectListItem,.projectListContent').removeClass("active");
        $('.projectListItem2').addClass("active");
    });
    $(".projectListItem3").on('click', function(){
        $('.projectListItem,.projectListContent').removeClass("active");
        $('.projectListItem3').addClass("active");
    });
</script>
</body>
</html>
