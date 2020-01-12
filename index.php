<?php
include 'factorial_function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h2>FACTORIAL CALCULATOR</h2>
    </header>
    <article>
    <form method="post"  >
<table>
<tr>
	<td valign="center">Please give numbers:</td>
	<td valign="center">
		<div id="newlink">
			<div class="feed">
			   <input type="text" name="value" value="1" size="20">
			</div>
		</div>
	</td>
</tr>
</table>
	<p>
		<br>
		<input type="submit" name="submit" value="send">
		
	</p>

</form>
<?php
$value = $_POST['value'];
echo "The factorial of $value is ==>  ";
		factorial($value,1);
      
        ?>


</article>
</body>
</html>
