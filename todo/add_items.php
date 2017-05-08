<?php include '../view/fp_header.php' ?>
<main>
<div class="tab">
    <h1>&nbsp;&nbsp;&nbsp;&nbsp;Add new items</h1>
    <h3><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $message ?></i></h3>
    <h4><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi <?php echo $_COOKIE['login'] ?>, to add an item please enter the
    following values - </i></h4>

    <form action="index.php" method="post" id="reset_form">
    <input type="hidden" name="action" value="add_items">

	<label><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Due Date:</i></label>
	<input type="date" name="due_dt" ><br><br>

	<label><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Due Time:</i></label>
	<input type="time" name="due_tm" ><br><br>
        
	<label><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Item Description:</i></label>
	<input type="text" name="item_desc" ><br><br><br>
        
	<label>&nbsp;</label>
	<input type="submit" value="Submit"/><br><br>
	
    </form>
    
    <form action="index.php" method="post" id="reset_form">
    <input type="hidden" name="action" value="pending_items">
        <label>&nbsp;</label>
	<input type="submit" value="Go Back"><br><br>

    </form>
</div>
</main>
<?php include '../view/fp_footer.php' ?>
