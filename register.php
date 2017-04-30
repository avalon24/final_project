<?php include 'view/fp_header';?>
<main>
    <h4>Enter your personal details below:</h4>
    <form action="index.php" method="post" id="register_form">
        <input type="hidden" name="action" value="new_user">

	<label>First Name: </label>
	<input type="text" name="f_name"><br>

        <label>Last Name: </label>
        <input type="text" name="l_name"><br><br>

	<label>Email ID: </label>
        <input type="text" name="email"><br>

	<label>Phone No: </label>
        <input type="text" name="contact"><br><br>

	<label>Date of Birth: </label>
        <input type="date" name="dob"><br>

	<label>Gender: </label>
        <select name="gender">
	    <option value="Female">Female
	    <option value="Male">Male
	    <option value="Other">Other
	</select><br>

	<label>&nbsp; </label>
        <input type="submit" value="submit">
    </form>

</main>
<?php include 'view/fp_footer';?>
