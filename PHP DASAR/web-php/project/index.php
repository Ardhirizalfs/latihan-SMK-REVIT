<?php 
require_once "content.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $titel ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar--> <!-- Page header with logo and tagline-->
        
        <?php 
          require_once "pages/nav.php";
        ?>      
     
        <!-- Page content-->
        <?php 
          require_once "pages/container.php";
        ?>  
        <h1>
        MATERI SELANJUTNYAAAAAAA
    </h1>

        <!-- Footer-->
        <?php 
          require_once "pages/footer.php";
        ?>  
        
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
