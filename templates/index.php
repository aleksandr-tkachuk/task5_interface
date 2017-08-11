<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template 2</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<?php $name = "user"; ?>
    <div class="alert alert-success" role="alert">name cookies: <?=$cookies->getData($name) ?></div>
    <div class="alert alert-info" role="alert">name session: <?=$session->getData($name) ?></div>
    <div class="alert alert-warning" role="alert">sql getData: <?=$msql->getData($name)?></div>
    <div class="alert alert-danger" role="alert">postgreSql getData: <!?=?></div>
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html> 
