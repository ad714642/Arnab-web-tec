<!DOCTYPE html>


<?php

  require_once ('model/model.php');
  //echo date("Y-m-d");



  if(isset($_POST['bal_type']) && isset($_POST['to']) && isset($_POST['amount']) ){

      require_once 'model/model.php';


      $data['T_cate']                     =     $_REQUEST['bal_type'];
      $data['to']                    =     $_REQUEST['to']; 
      $data['T_Amount']                   =     $_REQUEST['amount'];
      $data['T_date']                =     date("Y-m-d");  

      add($data);

  }


?>





<html>

<head>
<title>Homepage</title>
</head>

<body>

<h1></h1>



<?php


?>

</body>
</html>