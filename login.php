<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="login.css">
    </head>
    <div class="form">
            <div id="card-content">
                <div id="card-title">
                    <h2>Login Klinik</h2>
                    <div class="underline-title"></div>
                </div>
            </div>
            <form action="login-proses.php" method="post" name="login">
                <label for="username" style="padding-top:13px">&nbsp;Username</label><br>
                <input
                    type="text"
                    id="username"
                    class="form-content"
                    name="username"
                    placeholder="isi disini"
                    required="required"/>
                <div class="form-border"></div><br>
                <label for="password" style="padding-top:22px">&nbsp;Password</label><br>
                <input
                    type="password"
                    id="password"
                    class="form-content"
                    name="password"
                    placeholder="isi disini"
                    required="required"/>
                <input type="submit" id="submit-btn" name="submit" value="LOGIN"/>
                </div>
    </body>
</html>

  