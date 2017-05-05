<?php include '../view/fp_header.php' ?>
<main>
    <h4>Welcome...<?php echo $_COOKIE['login'] ?></h4>

    <table id = 'display'>
        <tr><b>
            <td>Due Date</td>
	    <td>Due Time</td>
	    <td>Pending Task</td>
	</b></tr>
	<?php
	    foreach($results as $pending){
	?>
	    <tr><i>
	        <td><?php echo $pending['t_date'];?></td>
	        <td><?php echo $pending['t_time'];?></td>
	        <td><?php echo $pending['t_desc'];?></td>
	    </i></tr>
	<?php
	    }
	?>
    </table>

    <form action='home.php' method="post">
        <input type="submit" value="Go back">
    </form>

</main>
<?php include '../view/fp_footer.php' ?>
