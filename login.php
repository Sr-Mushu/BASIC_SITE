<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compstible" content="ie=edge">
        <title>Login</title>

        <link rel="stylesheet" type="text/css" href="css_/Login_.css"> //Pagina para editar o style
        
    </head>
    <body>      
        <form name="Login" method="post" action="checklogin.php">
            <div class="Cartao">
                <div><h1>Admin Hub</h1></di>
                <input class="campos" type="text" name="User" placeholder="ID">
                <br><br>
                <input class="campos" type="password" name="Pass" placeholder="Password">
                <br><br>
                <input class="buton_login" type="submit" name="login" value="Login">
            </div>
        </form> 
    </body>
</html>