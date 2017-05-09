<?php include 'view/fp_header.php';?>
<main>
<div class="reg">
    <h3><i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $message ?></i></h3>
    <h5><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* marked fields are mandatory!</i><h5>
    <h4><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter your personal details below:</i> </h4>
    <form action="index.php" method="post" id="reg_form" >
    <input type="hidden" name="action" value="new_user">
	<label align="right"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Given Name: </i></label>	
	<input type="text" name="f_name" placeholder="Your name" /><br>

        <label align="right"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Last Name: </i></label>
        <input type="text" name="l_name" placeholder="Last name" /><br><br>

        <label align="right"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone No: </i></label>
        <input type="text" name="contact" placeholder="Enter 10 digits only" ><br><br>

        <label align="right"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Date of Birth: </i></label>
        <input type="date" name="dob" /><br>

        <label align="right"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Gender: </i></label>
        <select name="gender" >
            <option value="Female">Female
            <option value="Male">Male
            <option value="Other">Other
        </select><br>
									     
        <h4><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Following information will be used as your <b>Login</b> credentials</i></h4>

        <label align="right"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Email ID: </i></label>
        <input type="text" name="email" placeholder="Valid email address" /><br>

        <label align="right"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*New Password: </i></label>
	<input type="password" name="password"><br>

	<label align="right"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Retype Password: </i></label>
	<input type="text" name="pass_temp"><br>

        <h4><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select a secret question from below for password reset</i></h4>
	<label align="right"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Question: </i></label>
	<select name="reset_ques" >
            <option value="1">What is your favorite color?
	    <option value="2">What is your mother's maiden name?
	    <option value="3">What is the name of your favorite movie?
	    <option value="4">What is your favorite cuisine?
	</select><br>

	<label align="right"><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Answer: </i></label>
	<input type="text" name="reset_ans" /><br><br>

	<label>&nbsp; </label>
        <input type="submit" value="submit"><br><br>
    </form>
</div>
</main>
<?php include 'view/fp_footer.php'; ?>
