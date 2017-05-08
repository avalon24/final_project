<?php include '../view/fp_header.php' ?>
<main>
<div class="tab">
    <h4><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello <?php echo $_COOKIE['login'] ?>, the task you wish to update
    is:</i></h4>
    
    <?php $itemid=filter_input(INPUT_POST,'item_id');
          $itemdt=filter_input(INPUT_POST,'item_dt');
	  $itemtm=filter_input(INPUT_POST,'item_tm');
	  $idesc=filter_input(INPUT_POST,'item_desc');
    ?>

    <table align="center">
        <tr>
            <td><b>Due Date<b></td>
            <td><b>Due Time<b></td>
	    <td><b>Pending Task<b></td>
	</tr>
	
        <tr>
            <td><i><?php echo $itemdt; ?></i></td>
            <td><i><?php echo $itemtm; ?></i></td>
            <td><i><?php echo $idesc;  ?></i></td>
        </tr><br><br>
    </table><br>

    <form action="index.php" method="post" id="reset_form">
    <input type="hidden" name="action" value="update_item">
        <input type="hidden" name="item_id" value="<?php echo $itemid ?>" />
        <input type="hidden" name="old_date" value="<?php echo $itemdt ?>" />
	<input type="hidden" name="old_time" value="<?php echo $itemtm ?>" />

        <h4><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fill in the data you wish to change - </i></h4>
        <label><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New date: </i></label>
        <input type="date" name="new_date" value="<?php echo $pending['t_date'] ?>" /><br><br>

        <label><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New time: </i></label>
        <input type="time" name="new_time" value="<?php echo $pending['t_time'] ?>" /><br><br>

        <label>&nbsp;</label>
        <input type="submit" value="Done"><br><br>
    </form>

    <form action="index.php" method="post" id="reset_form">
    <input type="hidden" name="action" value="cancel_upd">
    	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="submit" value="Cancel Update">
    </form><br><br>
</div>
</main>
<?php include '../view/fp_footer.php' ?>
