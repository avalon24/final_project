<?php include '../view/fp_header.php' ?>
<main>
    <h4>Hello <?php echo $_COOKIE['login'] ?>, please find below the list of your finished items:</h4>

        <table id = 'display'>
        <tr>
            <td><b>Due Date<b></td>
            <td><b>Due Time<b></td>
            <td><b>Finished Task<b></td>
        </tr>
        <?php foreach($result as $finished) { ?>
        <tr>
            <td><i><?php echo $finished['t_date'];?></i></td>
            <td><i><?php echo $finished['t_time'];?></i></td>
	    <td><i><?php echo $finished['t_desc'];?></i></td>
	</tr>
	<?php } ?>
	</table>
	
	<form action='home.php' method="post">
	    <input type="submit" value="Go back">
	</form>
	
</main>
<?php include '../view/fp_footer.php' ?>


