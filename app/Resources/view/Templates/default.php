<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from getbootstrap.com/examples/starter-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2016 15:00:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= ROOT ?>/public/favicon.ico">

    <title>NelDev</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color: white" href="index.php">NelDev</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?p=inscription">Inscription</a></li>
                <li><a href="index.php?p=articles">Articles</a></li>
                <li><a href="index.php?p=forum">Forum</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div style="text-align: left" class="starter-template">
        <?= $content ?>
    </div>
</div>
<hr>
<p>NelDev © 2018</p>
</html>
