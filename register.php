<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Raúl Pineda</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/pwdvalidation.js"></script>
        
        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header>
			<a href="index.php"></a><img src="img/regpic.png" alt="Registration" title="Nice to meet you!" /></a>
			<h1>Registration</h1>
			<h2>I promise I won't do anything bad with your information.</h2>
        </header>
		<div id="main">
		<form action="registeruser.php" method="post" id="regform"> 
			<fieldset>
			<label for="username"><span class="reqinput">* </span>Username:</label> <input type="text" name="username" id="username" value="" onblur="isuser();" /> 
			<br />
			<label for="email">Email:</label> <input type="text" name="email" value="" /> 
			<br /> 
			<label for="password"><span class="reqinput">* </span>Password:</label>	<input type="password" name="password" id="password" value="" onblur="ispwd();" /> 
			<br />
			<label for="password-check"><span class="reqinput">* </span>Confirm:</label>	<input type="password" name="password-check" id="password-check" value="" onchange="matchpwd();" />
			<br />
			<input type="submit" value="Register" id="submitBtn" disabled="disabled" /> 
			</fieldset>
		</form>	
		</div>
		<footer>
			This is a small excercise for my application to work in Fynske Medier.<br />
			Developed by <a href="http://www.raulpineda.mx">Raúl Pineda</a> in Vienna, 2013.
		</footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>

<script type="text/javascript">
	
</script>
