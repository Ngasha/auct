
<!DOCTYPE html>
<html>
<head>
     <title>Auction</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../css/styles.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
    <div class="container">
        <form class="formal" action="registration.php" method="post">
                   <!-- <div class="imgContainer">
                        <img src="../img/patel.jpg" alt="avatar" class="avatar">

                    </div>-->
                    <h2 class="head-reg">Register</h2>
                    <div class="container-1">
                        
                        <label for="email"><b>Email</b></label><br/>
                        <input type="email" placeholder="email..." name="email" required><br/>

                        <label for="userName"><b>Username</b></label><br/>
                        <input type="text" placeholder="Enter username..." name="username" required><br/>

                        <label for="psw"><b>Password</b></label><br/>
                        <input type="password" placeholder="password..." name="psw_1" required><br/>

                        <label for="psw"><b>Confirm password</b></label><br/>
                        <input type="password" placeholder="password..." name="psw_1" required><br/>

                        <button type="submit" name="reg_user" class="log-btn">Submit</button><br/>
                        <label>
                        <span class="psw-1">Already have an account? <a href="index.php"> Login</a></span>
        </form>
</body>
</html>