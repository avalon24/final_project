<?php include '../view/fp_header.php';?>

<main>
<div class="tab">
    <h3><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $message ?></i></h3>

    <h4><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi <?php echo $_COOKIE['login'] ?>, please update the values you wish to change - </i></h4>
    <form action="index.php" method="post" id="upd_prof_form">
        <input type="hidden" name="action" value="updProfile">

	<label><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Given Name: </i></label>
	<input type="text" name="f_name" placeholder="<?php echo $_COOKIE['fname'] ?>" /><br>

        <label><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name: </i></label>
        <input type="text" name="l_name" placeholder="<?php echo $_COOKIE['lname'] ?>" /><br><br>

        <label><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone No: </i></label>
        <input type="text" name="contact" placeholder="<?php echo $_COOKIE['phone'] ?>" ><br><br>

        <label><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth: </i></label>
        <input type="date" name="dob" /><br>

        <label><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender: </i></label>
        <select name="gender" >
	    <option selected><?php echo $_COOKIE['gender'] ?>
            <option value="Female">Female
            <option value="Male">Male
            <option value="Other">Other
        </select><br><br>
									     
        <label>&nbsp; </label>
        <input type="submit" value="submit">
    </form><br>

    <form action="index.php" method="post">
    <input type="hidden" name="action" value="cancel_upd_prof">
    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" value="Cancel Update">
    </form><br><br>
</div>
</main>
<?php include '../view/fp_footer.php'; ?>
