<?php include("scripts/portfolio.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Treerock - Sandbox</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://treerock.me/assets/favicon.ico">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/base.css" rel="stylesheet">
    <link href="css/sandbox.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://treerock.me/assets/js/html5shiv.js"></script>
      <script src="http://treerock.me/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="clearfix">
        <div class="container">
            <ul>
                <li><a href="//treerock.me/">Home</a></li>
                <!-- <li><a href="#">News</a></li> -->
                <li><a href="//sandbox.treerock.me/">Sandbox</a></li>
            </ul>
        </div>
    </nav>
    <header class="section">
        <div class="container">
        	<h1>Treerock</h1>
        	<p class="sub"><span>Sandbox Projects</span></p>    
        </div>
    </header>
    
	<div class="sandbox main section">
        <div class="container">
<?php
	echo($template);
?>
    	</div>
    </div>
    <footer class="section clearfix">
        <div class="container">
        	<p>Fais ce que tu veux.</p>
        </div>
    </footer>
</body>

</html>