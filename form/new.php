<!DOCTYPE HTML>
<html>
<head>
<title> Registration form</title>
 <link type="image/gif" rel="shortcut icon" href="acl.gif" />
 <link rel="stylesheet" type="text/css" href="style.css" />
 <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
<script>

</script>
</head>
<body>

<header>
<h1>Reg. </h1>
<form action='register.php' class="form1" method='POST'>
    <p class="subscribe">
        <label for="login">Login</label>
        <input type="text" name="login" id="login" placeholder="Login">
    </p>
    <p class="subscribe">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
    </p>
	<p class="subscribe">
		<label for="email">Email</label>
		<input type="email" name="email" id="email" placeholder="Email">
	</p>
    <p class="subscribe">
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember me</label>
    </p>
    <p class="subscribe">
        <input type="submit" name="submit" value="Registration">
    </p>      
</form>
</header>
</body>
</html>