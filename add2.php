<html>
<?php
require("market.html");
?>
<form method="POST" action="add.php">
Enter information of the customer:<br>
Customer: <input type="text" name="customer">
<br>
<p>
Cashier: <input type="text" name="cashier">
<br>
</p>
<br>
<p>
Item: <input type="text" name="item">
<br>
</p>
<p>
Quantity: <input type="text" name="quantity">
<br>
</p><p>
Price: <input type="text" name="price">
<br>
</p>
<input type="submit" value="Add Customer">
<input type="reset" value="Clear">
<br>
</form>
</html>
