<?php include '../view/fp_header.php';?>
<main>
    <h3><?php echo $message ?></h3>

    <h4>Hi <?php echo $_COOKIE['login'] ?>, please update the values you wish to change - </h4>
    <form action="index.php" method="post" id="upd_prof_form">
        <input type="hidden" name="action" value="upd_profile">

	<label>First Name: </label>
	<input type="text" name="f_name" placeholder="<?php echo "$fname" ?>" /><br>

        <label>Last Name: </label>
        <input type="text" name="l_name" placeholder="<?php echo "$lname" ?>" /><br><br>

        <label>Phone No: </label>
        <input type="text" name="contact" placeholder="<?php echo "$phone" ?>" ><br><br>

        <label>Date of Birth: </label>
        <input type="date" name="dob" <?php echo "$dob" ?> /><br>

        <label>Gender: </label>
        <select name="gender" placeholder="<?php echo "$gender" ?>" >
            <option value="Female">Female
            <option value="Male">Male
            <option value="Other">Other
        </select><br><br>
									     
        <label>&nbsp; </label>
        <input type="submit" value="submit">
    </form><br><br>

</main>
<?php include '../view/fp_footer.php'; ?>
