<!DOCTYPE html>
<html>




  




<?php


  require_once 'showInfo.php';
  $history = fetchAllTransaction();
  $count=0;

?>

<head>
<title>History</title>
</head>

<style>
table, th, td {
  border: 2px solid black;
  
}

th, td {
    padding: 8px;
}

</style>


<body>

<h1>Page 2 : Transaction History</h1>
<h2>Digital Wallet</h2>

<p id="demo"></p>

1.<a href="Homepage.php">Home</a>
&nbsp;&nbsp;
2.<a href="History.php">Transaction History</a><br><br>





<table id ="transTable" style="width: 100">
  <thead>
    <tr>
      <th>Transaction Category</th>
      <th>To</th>
      <th>Amount</th>
      <th>Transfered On
    </tr>
  </thead>

  <tbody>
    <?php foreach ($history as $i => $data): ?>
      <?php $count=$count+1; ?>
      <tr>
        <td><?php echo $data['Trans_Category'] ?></td>
        <td><?php echo $data['T_to'] ?></td>
        <td><?php echo $data['Amount'] ?></td>
        <td><?php echo $data['Trans_Date'] ?></td>
      </tr>
    <?php endforeach; ?>
    

  </tbody>





</table>


<h3>Total Records :  </h3><br>

</body>
</html>