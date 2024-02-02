<?php 
    include 'app/components/router.php';
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $metaTitle ?></title>
        <meta name="description" content="<?php echo $metaDesc ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--<link rel="manifest" href="/site.webmanifest">-->
        <link rel="apple-touch-icon" href="/favicon.png">
        <!-- Place favicon.ico in the root directory -->
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon.png">

        <link rel="stylesheet" href="https://use.typekit.net/pnu1mft.css">
        
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/main.css">
        
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
            <div id="loading">
                <div id="loading-logo"></div>
                <div class="spinner"></div>
            </div>

        <?php
            include 'app/partials/main-nav.php';
            echo $pageContent;
            include 'app/partials/footer.php';
        ?>

        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
        <script src="assets/js/vendor/jquery-validate/jquery.validate.min.js"></script>
        <script src="assets/js/vendor/jquery-validate/additional-methods.min.js"></script>
        <script src="assets/js/vendor/popper.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125647888-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-9RMH0S0T0R');
        </script>

    </body>
</html>
