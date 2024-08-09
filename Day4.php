<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAY4</title>

    <style>

    body{
        margin:50px;
        padding:0px;
        font-family: sans serif;
        display:flex;
        justify-content:center;
    }
    form{
        background-color:;
        width:400px;
        height:400px;
        border-radius:20px;
        padding:20px;
        position:absolute;
    }
    h2{
        text-align:center;
        text-transform:uppercase;
        letter-spacing:1px;
        font-size:33px;
        color:skyblue;
    }
    label{
        display:block;
        font-size:24px;
        margin-top:10px;
        color:skyblue;
    }
    input{
        height:30px;
        width:370px;
        padding:4px;
        font-size:16px;
        margin-bottom:15px;
        border-radius:10px;
    }
    .b{
        width:380px;
    }
    .b button{
        width:350px;
        margin-left:15px;
        margin-top:50px;
        height:35px;
        border-radius:10px;
        font-size:20px;
        background:skyblue;
        border:none;
        box-shadow:inset -3px -3px ;
        transition:200ms;
    }
    .b button:active{
        box-shadow: none;
    }
  small{
    margin:190px;
    font-size:14px;
    color:red;
   }
   p{
    margin:280px;
    position:absolute;
    color:red;

   }

    </style>

</head>
<body>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
    <div class="login">
                       <h2>Log-In Form</h2>
    <div class="in">
    <label for="Username">Username</label> 
    <input type="text" name="username" placeholder="Example" >
    <span><?php echo "$usernameerror"; ?></span>
    <label for="Password">Password</label>
    <input type="Password" name="password" placeholder="1swd23UHG">
    <span><?php echo "$passworderror"; ?></span>
    </div>
    <div class="b">
    <button name="log" type="submit">Log In</button>
</div>

</div>
    </form>
    


    <?php
$usernameerror=' ';
$passworderror=' ';

   // Username and Password Validation

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(isset($_POST['log'])){
         
    //Varriables to contian inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Presence check
    # present  format check for username

    if(empty($username)){
        $usernameerror = "<small>Please input a username</small>";
    }
//length check for username
         if(strlen($username < 4 )){
        $usernameerror = "<small>username must be above 4 characters.</small>";
     }
        
//username sanitization
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
         $usernmae = trim($_POST['username']);

        
    # Present check for password

        if(empty($password)){
            $passworderror ="<p>please input a password</p>.";
        }

//lenght check for password
     if(strlen($password < 8 )){
        $passworderror "<p>Password must be above 8 characters.</p>";
     }
//format check for password
        if(preg_match(/^[a-zA-Z0-9]+$/, $password){
            $passworderror = "Password must contian a number,lowercase letter and an uppercase letter";
        }

    }
}
    ?>

</body>
</html>
