<?php 

require_once 'db_connect.php';


function showAllTransaction(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `transaction` ';
    try{
        $stmt = $conn->query($selectQuery);
        //echo "success";
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

/*
function showUsers($username){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `user_info` where User_Name = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

*/

function add($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO transaction(Trans_Category,T_to,Amount,Trans_Date) VALUES (:T_cate,:T_to,:T_Amount,:T_date)";

    
    
    try{

        $stmt = $conn->prepare($selectQuery);

        
        $stmt->execute([
            ':T_cate'                =>    $data['T_cate'],
            ':T_to'              =>   $data['to'],
            ':T_Amount'     =>     $data['T_Amount'],     
            ':T_date'      =>     $data['T_date']
        ]);
        echo '<h1>submitted successfully</h1>';
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}



/*
function searchUser($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE Username LIKE '%$user_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
*/

/*
function addStudent($data){
	$conn = db_conn();
    $selectQuery = "INSERT into user_info (Name, Surname, Username, Password, image)
VALUES (:name, :surname, :username, :password, :image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':surname' => $data['surname'],
        	':username' => $data['username'],
        	':password' => $data['password'],
        	':image' => $data['image']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
*/

/*
function updateStudent($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set Name = ?, Surname = ?, Username = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['surname'], $data['username'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

*/

/*
function deleteStudent($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `user_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

*/