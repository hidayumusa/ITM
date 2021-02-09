<?php session_start();
 $_SESSION['xxxname'] = $_POST['fname'];
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

		</style>
			<body>
 <form action="numsubject2.php" method="post">
				<center>

					<!welcome nama yg dh isi>
				 	<h1> Welcome <?php echo ucwords ($_POST["fname"]) ?>! <br></h1>

					<!text>
					<h1>How many subjects do you take?</h1>

					<!kotakpilihno>
					<input type="number" name="numsubj" placeholder="no.subject" size="10" 
       				value = "number subject..."  > 

       				<!kotaksubmit>
       				<p><input type="submit" name="submit" value="Next"> 

       				<!kotakcancel>
       				<input type="submit" name="cancel" value="Cancel" formaction="home.html"> </p>

       			</center>

			</body>
</html>