<?php include 'view/fp_header.php'; ?>
<main>
<div class="tab">
    <h1>&nbsp;&nbsp;&nbsp;&nbspForgot password!!</h1>
    <h3><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $message ?></i></h3>
    <h4><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please enter your details below:</i></h4>
    <form action="index.php" method="post" align="center">
    <input type=hidden name="action" value="get_ques">

	<label><i>User ID: </i></label>
	<input type="text" name="user_name" placeholder="Your email ID" /><br><br>

	<label>&nbsp;</label>
	<input type="submit" value="Enter" /><br><br>
    </form>
</div>
</main>
<?php include 'view/fp_footer.php'; ?>
