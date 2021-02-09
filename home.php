<?php session_start(); ?>

<html>
  <head>

  </head>
 
    <style type = "text/css">

      /*font style*/
      h1 {font-size: 30pt;font-family: cursive; }
      p {font-size: 15pt; font-family: arial }

      /*background image*/
      html{ background: url(bg.jpeg) 
        no-repeat center fixed;
        background-size: cover;
        }

      /*header image*/
      img { 
      width: 100%;
      height: 50%;
      opacity: 5;
      }


    </style>

        <body>

          <!bring to php>
          <form action="welcome2.php" method="post">

          <!header image>
          <center><img src = "hello.jpg" > </center>

          <!text>
          <center><h1>welcome to our page :) </h1> </center>
          <center><p> Your name is: </p></center>

          <!kotakisinama>
          <center><input type="text" name="fname" placeholder="Your name ..." required></center>

          <!kotaksubmit>
          <p><center><input type="submit" value="Submit" /></center></p>

        </body>
</html>