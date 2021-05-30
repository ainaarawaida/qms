<?php  

 include_once 'db.php';
 session_start();
 if(isset($_SESSION["auditee_no"]))  
      {  
        header("location:main2.php");
      }

 try  
 {  
       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["auditee_no"]) || empty($_POST["pass"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM auditee WHERE auditee_no = :auditee_no AND auditee_pass = :pass";  
                $stmt = $conn->prepare($query);  
                $stmt->execute(  
                     array(  
                          'auditee_no'     =>     $_POST["auditee_no"],  
                          'pass'     =>     $_POST["pass"]  
                     )  
                );  
                $count = $stmt->rowCount();  
                if($count > 0)  
                {  
                  
                    $_SESSION["auditee_no"] = $_POST["auditee_no"];  
                   
                  

                     header("location:main2.php");  
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