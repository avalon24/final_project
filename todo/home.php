<?php include '../view/fp_header.php'; ?>
<main>
    
    <div class="tab">
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
    <h4><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome...<?php echo $_COOKIE['login']; echo $success; ?></i></h4>

        <div class="body">
	     <p><i>This is your personal calendar!<br /><br />

                   We have various options available for you, as you can see above! At any point of time you may choose to track the tasks that are pending for you and ones that are completed. <br><br>

		   As of now, we allow you to remove tasks that you deem irrelevant. However, if you ever choose to archive them instead of
		   completely removing - that too can be provided for you in the near future.<br /><br />

                   We hope that you will have a smooth sailing while navigating through our
		   product!<br><br><br>

		   Regards,<br>
		   Site Manager.<br /><br /><br />
	     </i></p>
	 </div>
</main>
<?php include '../view/fp_footer.php'; ?>
