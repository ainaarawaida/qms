<?php  
 include_once 'db.php';
 session_start();

 if(isset($_SESSION["staff_no"]))  
 try  
 {  
       //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["staff_no"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else if
           {  
                $admin = "SELECT * FROM admin WHERE staff_no = :staff_no AND staff_pass = :password";  
                $stmt1 = $conn->prepare($admin);  
                $stmt1->execute(  
                     array(  
                          'staff_no'     =>     $_POST["staff_no"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $stmt1->rowCount();  
                if($count > 0)  
                {  
                    
                    $_SESSION["staff_no"] = $_POST["staff_no"];  
                   
                  

                     header("location:home.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Password</label>';  
                }  
           }

      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }   
 ?>