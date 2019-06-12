<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $title; ?></title>
        <link href="/public/styles/bootstrap.css" rel="stylesheet">
        <link href="/public/styles/main.css" rel="stylesheet">
        <link href="/public/styles/font-awesome.css" rel="stylesheet">
        <link href="/public/styles/account.css" rel="stylesheet">
        <link href="/public/styles/profile.css" rel="stylesheet">
        <link href="/public/styles/posts.css" rel="stylesheet">
        <script src="/public/scripts/jquery.js"></script>
        <script src="/public/scripts/popper.js"></script>
        <script src="/public/scripts/bootstrap.js"></script>
        <script src="/public/scripts/register.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#2f35a8">
	<a class="navbar-brand" href="/">First experience</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>
    <div class="collapse navbar-collapse">
    </div>
    <div class="collapse navbar-collapse">
    </div>
    <div class="collapse navbar-collapse">
    </div>
    <div class="collapse navbar-collapse">
    </div>
    <div class="collapse navbar-collapse">
    </div>
    <div id="navbar">
  	<div class="collapse navbar-collapse">
    	<ul class="navbar-nav mr-auto">
                <li class="nav-item">
		    	    <a class="nav-link" href="/works/search">Поиск</a>
                </li>
            <?php if(isset($_SESSION['student']) || isset($_SESSION['employer']) ): ?>
                <li class="nav-item">
		    	    <a class="nav-link" href="/profile/show">Профиль</a>
                </li>
                    <li class="nav-item">
		    	        <a class="nav-link" href="/students/list">Студенты</a>
                    </li>
                    <li class="nav-item">
		    	        <a class="nav-link" href="/posts/1">Вакансии</a>
                    </li>
                <li class="nav-item">
		    	    <a class="nav-link" href="/account/logout">Выход</a>
		        </li>
            <?php else: ?>
		        <li class="nav-item">
		    	    <a class="nav-link" href="/account/register">Регистрация</a>
		        </li>
			    <li class="nav-item">
		    	    <a class="nav-link" href="/account/login">Вход</a>
		        </li>
            <?php endif; ?>
    	</ul>
    </div>
    </div>
</nav>
<?php echo $content; ?> 
        <hr>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <p class="copyright text-muted">&copy; 2019, Marsel</p>
                    </div>
        </footer>
</body>
</html>