<?php include '../view/fp_header.php';

?>

<main>
    <h3><?php echo $message ?></h3>
    <?php echo "gender = "; echo $_COOKIE['gender']; echo "id = "; echo $_COOKIE['user_id'];?>

    <h4>Hi <?php echo $_COOKIE['login'] ?>, please update the values you wish to change - </h4>
    <form action="index.php" method="post" id="upd_prof_form">
        <input type="hidden" name="action" value="updProfile">

	<label>Given Name: </label>
	<input type="text" name="f_name" placeholder="<?php echo $_COOKIE['fname'] ?>" /><br>

        <label>Last Name: </label>
        <input type="text" name="l_name" placeholder="<?php echo $_COOKIE['lname'] ?>" /><br><br>

        <label>Phone No: </label>
        <input type="text" name="contact" placeholder="<?php echo $_COOKIE['phone'] ?>" ><br><br>

        <label>Date of Birth: </label>
        <input type="date" name="dob" /><br>

        <label>Gender: </label>
        <select name="gender" >
	    <option selected><?php echo $_COOKIE['gender'] ?>
            <option value="Female">Female
            <option value="Male">Male
            <option value="Other">Other
        </select><br><br>
									     
        <label>&nbsp; </label>
        <input type="submit" value="submit">
    </form><br><br>

    <form action="index.php" method="post">
    <input type="hidden" name="action" value="cancel_upd_prof">
        <input type="submit" value="Cancel Update">
    </form><br><br>

</main>
<?php include '../view/fp_footer.php'; ?>
