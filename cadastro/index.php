<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <script src="script/main.php" type="script/php"></script>
</head>
<body id="body" class="body-background">
    
    <div style="text-align: center;
    margin: 10%;">
    <h1>Cadastre-se aqui.</h1>
    <div class="card" id="card">
        <form method="POST" action="script/main.php">
            <input type="text" name="nome" id="nome" placeholder="Nome" /></br>
            <input type="text" name="username" id="username" placeholder="Username" /></br>
            <input type="email" name="email" id="email" placeholder="Email" /></br>
            <input type="password" name="pass" id="pass" placeholder="Password" /></br>
            <input class="button" style="transform: rotate(-90deg);" type="submit" name="submit" id="submit" value=" " onclick="out()" />
        </form>
       
    </div>  

</div>
</body>
<script src="script/main.js" ></script>
</html>