<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8"/>
        <title>Login...</title>
		<style>
			body
			{
				color: white;
				font-family: "Courier New", monospace;
				background-image:  linear-gradient(rgba(0, 0, 0, 0.8),rgba(0,0,0,0.8));
				padding-left: 8%;
				padding-right: 8%;
				box-sizing: border-box;			
            }
			.S
            {
                color:red;
            }
			.SS
			{
                color:green;
            }

		</style>
        
        <link rel="stlysheet" type="text/css" href="css_/CheckLogin_.css">
    </head>
<body>
<?php
    include('Call_DB.php');
	session_start();
	
	$_ID = $_POST['ID'];
    $_Pass = $_POST['Pass'];
    $sql="SELECT Admin_ID,Admin_Nome,Admin_Password FROM User_ WHERE = '$_ID' AND Admin_Password = '$_Pass'";
    
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result); /*Clt=mysqli_quria uma tablea temporaria com os Dados do select*/
	$count = mysqli_num_rows($result);/*verifica a quantidade de linhas da sulução e atribui o seu valor a $count*/
	    
	    if($count > 0)
		{
			$_SESSION['Nome']=$row['Admin_Nome'];
			$_SESSION['ID']=$row['Admin_ID'];
			header ("refresh:2;url=WELCOME.php");
			echo "// found in database <a class=SS>succeeded</a> <br> ";
			echo "// wait 2 seconds...";
		}
		else
		{		   
			//echo <div class="Cartao"> ;
			echo "// Data is not valid <a class=S>Error</a><br>";
			echo "// found in database <a class=S>Error</a> <br> ";
			echo "// wait 5 seconds...";
			//echo </div> ;
			header ("refresh:5;url=Index.php");	
		}
	
?>
</body>
</html>