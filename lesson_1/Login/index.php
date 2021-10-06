<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <style type="text/css">
    .login {
        background-color:#81ecec;
        height:180px; 
        width:265px;
        margin:0;
        padding:10px;
        border:1px #CCC solid;
    }
    .login input {
          padding:5px; margin:5px;
          align:center;
    }

    #sub
    {
       background-attachment: fixed; 
       background-color:#00b894; 
       color: white;
    }
    </style>  

</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $username = $_GET["username"]; 
            $passkey = $_GET["passkey"];
            
        if ($username === "admin" && $passkey === "admin")
        {	 
            echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
        } 
        else
        {
            echo "<h2><span style='color:red'>Login Error</span></h2>";
        }
        }
    ?>

    <form method="GET" action="">
        <div class="login">
            <h2>Login</h2>
            <input type="text" name="username" size="30"  placeholder="username" />
            <input type="passkey" name="passkey" size="30" placeholder="passkey" /> <br/>
            <input type="submit" value="Sign in" id="sub"/>
        </div>
    </form>
</body>
</html>