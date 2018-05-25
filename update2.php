<html>
<?php
require("market.html");
?>
<form method="POST" action="update.php">
Enter updated information of the customer:<br>
Customer<input type="text" name="customer">
<br>
<p>
Cashier<input type="text" name="cashier">
<br></p>
<p>
Item<input type="text" name="item">
<br></p>
<p>
Quantity<input type="text" name="quantity">
<br></p>
<p>
Price<input type="text" name="price">
<br></p>
<input type="submit" value="Update Customer">
<input type="reset" value="Clear">
</form>
</html>