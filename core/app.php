<?php
if(!isset($request)){exit;}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title><?php echo $pagetitle?></title>
        <meta name="description" content="<?php echo $description?>">

        <!-- CSS -->
        <link href="/dist/css/main.css" rel="stylesheet">
        <link href="/dist/css/grid.min.css" rel="stylesheet">
        <?php 
            if($_COOKIE["dark"]=="true"){
                echo '<link href="/dist/css/dark.css" rel="stylesheet">
                      <meta name="theme-color" content="#202020">
                      <meta name="apple-mobile-web-app-status-bar-style" content="#202020">
                      <meta name="color-scheme" content="dark">';
            }
            else{
                echo '<link href="/dist/css/light.css" rel="stylesheet">';
            }
        ?>

    </head>
    <body>
        <?php require 'core/navbar.php' ?>

        <main class="container bg-object rounded">
            <?php require 'views/'.$view ?>
        </main>
    </body>
</html>