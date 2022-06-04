<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="main1.css" media="print">
</head>
<body>
    <div class="bg">
        <img class="logo" src="logo.png" width="120px" height="120px" ALT="align box" ALIGN=CENTER>
        <nav>
            <ul>
               <li><a href="main1.php"><b>HOME</b>&nbsp;&nbsp;&nbsp;|</a></li>
               <li><a href="../About Us/About Us.html">&nbsp;<b>ABOUT US</b>&nbsp;&nbsp;|</a></li>
               <li><a href="../Feedback/feedback.html">&nbsp;<b>FEEDBACK</b>&nbsp;&nbsp;|</a></li>
               <li><a href="logout.php">&nbsp;<b>LOG-OUT</b>&nbsp;</a></li>
            </ul>
        </nav>
    </div>
    
    <section>
        <p><b><h1>WELCOME</h1></b></p>
        <p><b><h3>Choose from the variety of services which you like</h3></b></p>
    </section>
    
    <div class="left">
        <figure>
           <a href="../Games/main_game.html"><img src="game.jpg" width="200" height="200"></a>
           <figcaption><h2>Games</h2></figcaption>       
        </figure>
    </div>
    <div class="middle">
        <figure1>
           <a href="#"><img src="movie.jpg" width="200" height="200"></a>
           <figcaption1><h2><a href="https://cineb.net/" style="text-decoration: none;color:white">Movies</a> | <a href="https://drive.google.com/file/d/1-5zbD9mBTwU4RUI0QMPmgabRel3xmb5Y/view" style="text-decoration: none;color:white">OTT</a></h2></figcaption1>
        </figure1>
    </div>
    <div class="right">
        <figure2>
           <a href="#"><img src="social.jpg" width="200" height="200"></a>
           <figcaption2><h2><a href="../Social-Card/glow.html" style="text-decoration: none;color:white">Social</a> | <a href="../Social-Card/profile card.html" style="text-decoration: none;color:white">Card</a></h2></figcaption2>
        </figure2>
    </div>
    
    <div class="one">
        <figure3>
           <a href="https://www.tucareers.com/"><img src="career.jpg" width="200" height="200"></a>
           <figcaption3><h2>Career Guidance</h2></figcaption3>
        </figure3>
    </div>
    <div class="two">
        <figure4>
           <a href="../Creative/mycss.html"><img src="creative.jpg" width="200" height="200"></a>
           <figcaption4><h2>Creative</h2></figcaption4>
        </figure4>
    </div>
</body>
</html>