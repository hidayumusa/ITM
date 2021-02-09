<?php
 session_start();
 $_SESSION['xxxnumsubj'] = $_POST['numsubj'];
?>

<?php
 if(empty($_SESSION['xxxnumsubj']))
 {
  echo "Please Enter Number Subject !! Not set yet";
 }
?>

<html>
  <head>

  </head>

    <style type = "text/css">

      /*background image*/
      html{ background: url(bg.jpeg) 
      no-repeat center fixed;
      background-size: cover;
      }

      /*style untuk form input*/
      label, input {
      font-size: 21px;
      padding: 0.1em 0.4em;
      margin: 0.1em 0.2em;
      -moz-box-sizing: content-box;
      -webkit-box-sizing: content-box;
      box-sizing: content-box;
      border: 1px solid #000033;
      background-color: #ffffff;
}

    </style>

        <body>

          <!bawak ke page subdetail>
          <form action="subjdetail2.php" method="post">

          <center>
            <!bilangan no yg dh isi>
            <h1 id="numbers">Enter the details for your <?php echo $_POST["numsubj"] ?> subject : </h1>

            <!ulangan isi info>
            <?php
            $myArray = array();
            for($i = 0; $i < $_POST["numsubj"]; $i++)
            { 
            ?>

            <!pertanyaan dan kotak isi >
            <label for="subjname">Subject Name:</label>
            <input type="text" name='subjname[]' required>
            <label for="subjname">Credit Hours:</label>
            <input type="text" name="subjcredit[]" required>
            <label for="subjname">Subject Score:</label>
            <input type="number" name="subjscore[]"

            <?php
            }
            ?>

            <p>

            <p><input type="submit" name="submit" value="Next">
            <input class="button" type="button" onclick="window.location.replace('http://localhost/ITM/home.html')" value="Cancel" /></p>



          </center>
        </body>
</html>