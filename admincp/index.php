<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admincp.css">
    <title>Admincp</title>
</head>
<body>
    <div class="wrapper">
        
    <h3 class = "title_admin">Welcome to Fong admin</h3>
    <?php
            include("config/config.php");
            include("modules/header.php");
            include("modules/menu.php");
            include("modules/main.php");
            include("modules/footer.php");
    ?>
    </div>
</body>
</html>