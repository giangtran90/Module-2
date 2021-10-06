<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <style>
        .error{
            color: red;
        }
        h3{
            display: flex;
            justify-content: center;
        }
        form{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;       
        }
        
    </style>
</head>
<body>
    <h3>Registration Form</h3>
    <form action="" method = "POST">
        <fieldset>
            <legend>Details</legend>
            Name: <input type="text" name = "name" placeholder = "Ex: Jon"/>
            <span class="error">*</span> 
            <br/><br/>
            Email: <input type="email" name = "email" placeholder = "Ex: jon&gmail.com"/>
            <span class="error">*</span> 
            <br/><br/>
            Phone: <input type="text" name = "phone" placeholder = "Ex: 0123456789"/>
            <span class="error">*</span> 
            <br/><br/>
            <input type="submit" value = "Registration"/>
        </fieldset>
    </form>
</body>
</html>