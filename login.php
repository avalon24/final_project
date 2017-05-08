<?php include 'view/fp_header.php'; ?>
<main>
<div class="tab">
    <h1>&nbsp;&nbsp;&nbsp;&nbsp;Login Page!!</h1>
    <h3><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $message ?></i></h3>
    <h4><i><center><?php echo $success ?><center></i></h4>
    <form action="index.php" method="post" id="login_form" align="right">
        <input type=hidden name="action" value="user_login">

	<label>User ID: </label>
	<input type="text" name="user_name" placeholder="Your email ID" />
	<br>

	<label>Password: </label>
	<input type="password" name="user_pwd" />
	<br>

	<label>&nbsp;</label>
	<input type="submit" value="Login" />
	<br><br><br><br>
    </form>

    <center><a href="register.php">New user</a>  |  <a href="pwd_reset.php">Forgot Password</a><br><br></center>
</div>    
</main>
<?php include 'view/fp_footer.php'; ?>
