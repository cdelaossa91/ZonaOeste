<?php
session_start();

if(isset($_POST['acceder'])){
    
    include '../dataconfig.php';
    
    $username = $_POST['username'];
    $password =  $_POST['password'];
    
    //Check if empty
       
        
    if (empty($username)|| empty($password)){
         header("Location: ../login.php");
        alert("Debe llenar todos los campos");
        
         exit();
        
    }    else  {
        $sql = "SELECT * FROM users WHERE username= '$username' and password= '$password'";
        $result_login = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result_login, MYSQLI_ASSOC);
        $resultCheck = mysqli_num_rows($result_login);
       
        
            if ($resultCheck < 1){ 
                header("Location: ../login.php=error"); 
                exit(); 
            } else if($resultCheck == 1) {
                
                    $_SESSION['u_username']=$row['username'];
                    $_SESSION['u_password']=$row['password'];
                
                
                     header("Location: ../database.php");
                    exit();
                } else {
                    header("Location: ../login.php");
                    exit();
                    }
            } 
        }

    
    
    
  else {
    header("Location: ../login.php=accessdenied");
    exit();
}
    
    

/*if(!empty($_POST)){
	if(isset($_POST["username"]) && isset($_POST["password"])){
		if($_POST["username"]!="" && $_POST["password"]!=""){
			include "../dataconfig.php";
			
			$user_id=null;
			$sql1= "SELECT * FROM user WHERE username=\"$_POST[username]\" and password=\"$_POST[password]\" ";

			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../database.php';</script>";				
			}
		}
	}
}*/

?>
    
