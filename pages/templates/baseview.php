<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Toby, Ziegler, Toby Ziegler, TobyZiegler, designer, developer, programmer, graphic, graphics<?php echo $keywords; ?>" />
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?php echo $title; ?>
    </title>

    <?php
    $path = "/";
    $server = $_SERVER['SERVER_NAME'];
    if ($server == "localhost") $path = "../../";
    ?>

    <?php include("favicon.php");?>
        <link rel="stylesheet" href="../../css/reset.css">
        <link rel="stylesheet" href="../../css/xtrastyles.css">
        <!-- <link rel="stylesheet" href="<?php echo ($path . 'css/reset.css')?>"> -->
        <!-- <link rel="stylesheet" href="<?php echo ($path . 'css/xtrastyles.css')?>"> -->

        <!-- Bootstrap css -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <link rel="../../assets/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="/css/tobystyles.css"> -->
        <!-- <link rel="stylesheet" href="<?php echo ($path . 'css/socialiconstyles.css')?>"> -->
        <!-- <link rel="stylesheet" href="<?php echo ($path . 'js/tobyscripts.js')?>"> -->

        <!--jQuery css-->
    <!-- <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> -->
    <!-- jQuery js -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>

<body id="<?=basename($_SERVER['PHP_SELF'],'.php')?>">
<div class="container">
        <nav>
            <?php include("navbar.php");?>
        </nav>
        <header>
            <?php echo $header; ?>
        </header>
        <div id="contentArea">
            <?php include $content; ?>
        </div>
        <footer>
    <?php include("socialicons.php");?>
            <?php include("footer.php");?>
        </footer>
        </div>
        
</body>

</html>