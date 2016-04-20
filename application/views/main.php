<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/assets/favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/css/blog.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--script src="/assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item <?=app::gi()->uri->controller == 'index' ? 'active' : ''?>" href="/">Главная</a>
          <a class="blog-nav-item <?=app::gi()->uri->controller == 'user' ? 'active' : ''?>" href="/user/">Войти</a>
          <a class="blog-nav-item <?=app::gi()->uri->controller == 'page' ? 'active' : ''?>" href="/about.html">О фреймворке</a>
          <a class="blog-nav-item <?=app::gi()->uri->controller == 'post' ? 'active' : ''?>" href="/post">Материалы</a>
        </nav>
      </div>
    </div>

    <div class="container">
        <?= $content ?>
    </div><!-- /.container -->
    <footer class="blog-footer">
		<p><a href="#">Наверх</a></p>
    </footer>
	<?php $this->addStyleSheet('/assets/css/blog.css', 'body'); ?>
  </body>
</html>
