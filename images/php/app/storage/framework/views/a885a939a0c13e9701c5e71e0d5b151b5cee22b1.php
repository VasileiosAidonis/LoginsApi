<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Summit</title>
    <link rel="stylesheet" href="dist/app.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class="h1 text-center">Login</div>
    <div id="app">
        <div class="text-center  my_inputs">
           <div class="pt-3"> Username<br><input type="text" name="username"></div>
           <div class="pt-3"> Password <br><input type="password" name="the_password"></div>
           <div class="pt-1"><button type="submit" name="click_from_login" class="btn">Login</button></div>
           <p> Ready to join? <a href="/registers">Register</a></p>
        </div>
        <router-view></router-view>
    </div>
    <script src="dist/app.js"></script>
</body>
</html>
