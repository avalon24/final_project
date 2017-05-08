<?php include '../view/fp_header.php'; ?>
<main>
    
    <div class="tab">
    <h4>Welcome...<?php echo $_COOKIE['login']; echo $success; ?></h4><br><br>

    <form action="home.php" method="post" name="upd_prof_form">
    <input type="hidden" name="action">
        <button class="tablinks">Home</button>
    </form>

    <form action="upd_profile.php" method="post" name="upd_prof_form">
    <input type="hidden" name="action" value="upd_profile" >
	<button class="tablinks">Update your Profile</button>
    </form>

    <form action="change_pwd.php" method="post" name="pwd_chng_form">
    <input type="hidden" name="action" value="pwd_change" >
	<button class="tablinks">Change Password</button>
    </form>

    <form action="index.php" method="post" name="pending_form">
    <input type="hidden" name="action" value="pending_items">
	<button class="tablinks">Pending Tasks</button>
    </form>

    <form action="index.php" method="post" name="finished_form">
    <input type="hidden" name="action" value="finished_items" >
	<button class="tablinks">Finished Tasks</button>
    </form>

    <form action="../index.php" method="post" name="logout_form">
    <input type="hidden" name="action" value="user_logout">
	<button class="tablinks">Logout</button>
    </form><br><br>
    </div>
</main>
<?php include '../view/fp_footer.php'; ?>
