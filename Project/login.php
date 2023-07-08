<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $username=$_POST['username'];
        $password=$_POST['pass'];
        if(!empty($password))
        {
            $query="select * from sls where regno='$username' limit 1 ";
            $result=mysqli_query($con,$query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0 )
                {
                   $user_data=mysqli_fetch_assoc($result);
                   if($user_data['pass']==$password) 
                   {
                        header("location: services.php");
                        echo "<script type='text/javascript'> alert('login successfully')</script> ";
                        die;
                   }
                }
            }
            echo "<script type='text/javascript'> alert('Wrong username or password')</script> ";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Wrong username or password')</script> ";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <link rel="stylesheet" href="loginc.css">
</head>

<body>
    <div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome!</h2>
                    <p>Create your account..</p>
                    <a href="signup.php" class="btn">Sign Up</a>
                </div>
            </div>

            <div class="col-right">
                <div class="login-form">
                    <h2>Login</h2>
                    <form method="post" action="">
                        <p>
                            <label>Registration Number<span>*</span></label>
                            <input type="text" placeholder="Registration No." name="username" required>
                        </p>
                        <p>
                            <label>Password<span>*</span></label>
                            <input type="password" placeholder="Password" name="pass" required>
                        </p>
                        <p>
                            <a href="services.php"><input type="submit" value="Sign In" ></a>
                        </p>
                        <p>
                            <a href="">Forgot password?</a>
                        </p>

                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>