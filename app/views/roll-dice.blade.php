<!DOCTYPE html>
<html>
<head>
    <title>roll dice</title>
</head>
<body>
<h1></h1> 
<p>roll again, the number was <?= $randomnum;?></p>
<a href="{{{ action('HomeController@showRolldice', 1) }}}">1</a>
<a href="{{{ action('HomeController@showRolldice', 2) }}}">2</a>
<a href="{{{ action('HomeController@showRolldice', 3) }}}">3</a>
<a href="{{{ action('HomeController@showRolldice', 4) }}}">4</a>
<a href="{{{ action('HomeController@showRolldice', 5) }}}">5</a>
<a href="{{{ action('HomeController@showRolldice', 6) }}}">6</a>



</body>
</html>