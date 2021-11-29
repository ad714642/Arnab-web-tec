<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<body>

	<h1>Page 1 [HOME]</h1>
	<br>

	<h1>Digital Wallet</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

       <h2>Fund Transfer: </h2>
			Select Catagory:
		<select name="catagory">
			<option value="recharge">Mobile Recharge</option>
			<option value="bill">Pay Bill</option>
			<option value="sendmoney">Send Money</option>
		</select>

		<br><br>
            To:
		<select name="to">
			<option value="recharge">Mobile Recharge</option>
			<option value="bill">Pay Bill</option>
			<option value="sendmoney">Send Money</option>
		</select>

		<br><br>
		Amount: <input type="number" name="amount">
		<br><br>

		<input type="submit" name="submit">
	</form>

	<br>



</body>
</html>
