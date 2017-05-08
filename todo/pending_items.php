<?php include '../view/fp_header.php' ?>
<main>
<div class="tab">
    <h4><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello <?php echo $_COOKIE['login'] ?>, please find below the list of your pending items:</i></h4>

    <table id = 'display' align="center">
        <tr>
            <td><b>Due Date<b></td>
            <td><b>Due Time<b></td>
	    <td><b>Pending Task<b></td>
	</tr>
	<?php foreach($result as $pending) { ?>
	    <tr>
	        <td><i><?php echo $pending['t_date'];?></i></td>
	        <td><i><?php echo $pending['t_time'];?></i></td>
	        <td><i><?php echo $pending['t_desc'];?></i></td>
		<td><form action="upd_items.php" method="post">
		    
		        <input type="hidden" name="item_id" value="<?php echo $pending['t_id'] ?>" />
			<input type="hidden" name="item_dt" value="<?php echo $pending['t_date'] ?>" />
			<input type="hidden" name="item_tm" value="<?php echo $pending['t_time'] ?>" />
			<input type="hidden" name="item_desc" value="<?php echo $pending['t_desc'] ?>" />
			<input type="submit" value="Update">
		    </form></td>
                <td><form action="index.php" method="post">
		    <input type="hidden" name="action" value="delete_item">
		        <input type="hidden" name="item_id" value="<?php echo $pending['t_id'] ?>" />
                        <input type="hidden" name="pg_val" value="P" />
                        <input type="submit" value="Delete">
		    </form></td>
                <td><form action="index.php" method="post">
                    <input type="hidden" name="action" value="finish_item">
                        <input type="hidden" name="item_id" value="<?php echo $pending['t_id'] ?>" />
                        <input type="submit" value="Finish">
                    </form></td>

	    </tr>
	<?php }	?>
    </table><br>

    <form action='add_items.php' method="post" align="center">
        <input type="submit" value="Add New Task">
    </form><br>

    <form action='home.php' method="post" align="center">
        <input type="submit" value="Go back">
    </form><br><br>
</div>
</main>
<?php include '../view/fp_footer.php' ?>
