<?php include 'view/fp_header.php'; ?>
<main>
    <h1>Login Page!!</h1>
    <form action="index.php" method="post" id="login_form">
        <input type=hidden name="action" value="user_login">

	<label>User ID: </label>
	<input type="text" name="user_name" />
	<br>

	<label>Password: </label>
	<input type="password" name="user_pwd" />
	<br>

	<label>&nbsp;</label>
	<input type="submit" value="Login" />
	<br><br>
    </form>

    <a href="register.php">New user</a>  |  <a href="reset_pwd.php">Forgot Password</a>
    
</main>
<?php include 'view/fp_footer.php'; ?>
