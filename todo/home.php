<?php include '../view/fp_header.php'; ?>
<main>
    <h4>Welcome...<?php echo $fname?>!!</h4>
    <a href="#List of incomplete items">List of incomplete items</a><br>
    <a href="#List of complete items">List of complete items</a><br><br>

    <form action="../index.php" method="post" name="logout_form">
    <input type="hidden" name="action" value="user_logout">
        <label>&nbsp;</label>
	<input type="submit" value="Logout" />
    </form><br><br>
</main>
<?php include '../view/fp_footer.php'; ?>
