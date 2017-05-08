<?php include 'view/fp_header.php'; ?>
<main>
<div class="tab">
    <h1>&nbsp;&nbsp;&nbsp;&nbsp;Reset password!!</h1>
    <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $message ; ?></h3>
    
    <form action="index.php" method="post" align="center">
    <input type=hidden name="action" value="pwd_reset">
        
	<input type="hidden" name="userid" value="<?php echo $result[0]['userid']; ?>" />
        <input type="hidden" name="uname"  value="<?php echo $result[0]['uname'];  ?>" />

	<label><i>Question: <?php echo $result[0]['resetq']; ?></i></label><br><br>

        <label><i>Answer:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> </label>
	<input type="text" name="reseta" placeholder="Your answer" /><br><br><br>

	<label><i>New password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></label>
	<input type="password" name="password"><br><br>

	<label><i>Retype password:&nbsp;&nbsp;&nbsp;&nbsp;</i></label>
	<input type="password" name="pass_temp"><br><br>
	
	<label>&nbsp;</label>
	<input type="submit" value="Submit" /><br><br>
    
    </form>
</div>
</main>
<?php include 'view/fp_footer.php'; ?>
