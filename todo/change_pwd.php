<?php include '../view/fp_header.php'; ?>
<main>
<div class="tab">    
    <h1>&nbsp;&nbsp;&nbsp;&nbsp;Change password!!</h1>
    <h3><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $message; ?></i></h3>
    <h4><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi <?php echo $_COOKIE['login'] ?>, please update:</i></h4>    
    <form action="index.php" method="post" id="reset_form">
    <input type=hidden name="action" value="change_pwd">
        
	<input type="hidden" name="userid" value="<?php echo $_COOKIE['userid']; ?>" />
	<input type="hidden" name="reseta" value="<?php echo $_COOKIE['secret_ans']; ?>" />

	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New password:</label>
	<input type="password" name="password"><br><br>

	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retype password: </label>
	<input type="password" name="pass_temp"><br><br>
	
	<label>&nbsp;</label>
	<input type="submit" value="Submit" /><br><br>
    
    </form>

    <form action='home.php' method="post" id="reset_form">
       	<label>&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="submit" value="Go back"><br><br><br>
    </form>
</div>
</main>
<?php include '../view/fp_footer.php'; ?>
