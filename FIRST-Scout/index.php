<!DOCTYPE html>
<html>
    <head>
        <title>FIRST Scout</title>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
    </head>
    <body>
        <div class="container">
            <a href="/index.php"><img src="images/ram-logo.png" alt="FIRST Scout"></a>
            <br>
            <? echo stripcslashes($_GET['error']); ?>
            <p class="title">FIRST Scout: Login</p>
            <form class="form_entry" method="post" action="submit.php">
                <input type="text" name="team_number" placeholder="Team Number"><br> 
                <input type="email" name="user_email" placeholder="Email Address"><br>
                <input type="password" name="user_password" placeholder="Password"><br>
                <input type="submit" value="Log In" style="margin-top: 5px">
            </form>

        </div>
    </body>
</html>
