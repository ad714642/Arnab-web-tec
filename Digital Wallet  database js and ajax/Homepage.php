<!DOCTYPE html>
<html>

<head>
<title>Homepage</title>
</head>

<body>

<h1>Page 1 : Home</h1>
<h2>Digital Wallet</h2>

1.<a href="Homepage.php">Home</a>
&nbsp;&nbsp;
2.<a href="History.php">Transaction History</a>
<h2>Fund Transfer : </h2>



<form action="submitted.php" method="POST">
  <label for="bal_type">Select category : </label>
  <select id="bal_type" name="bal_type">
    <option value="mobile_recharge">Mobile Recharge</option>
    <option value="send_money">Send Money</option>
    <option value="merchant_pay">Merchant Pay</option>
  </select>
  <br>
  <br>

  <label for="to">To : </label>
  <input type="text" id="to" name="to"><br><br>
  <label for="amount">Amount : </label>
  <input type="text" amount="to" name="amount"><br><br>
  <input type="submit" value="Submit">
  

</form>


<?php


?>

</body>
</html>