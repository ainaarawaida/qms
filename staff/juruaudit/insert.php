<?php
//insert.php;

if(isset($_POST["klausa"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=qms", "root", "");
 //$order_id = uniqid();
 for($count = 0; $count < count($_POST["klausa"]); $count++)
 {  
  $query = "INSERT INTO ofi 
  ( klausa, jabatan_unit, perincian, susulan, tarikh_tindakan) 
  VALUES (:klausa, :jabatan_unit, :perincian, :susulan, :tarikh_tindakan)
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    //':order_id'   => $order_id,
    ':klausa'  => $_POST["klausa"][$count], 
    ':jabatan_unit' => $_POST["jabatan_unit"][$count],
    ':perincian'  => $_POST["perincian"][$count], 
    ':susulan' => $_POST["susulan"][$count], 
    ':tarikh_tindakan'  => $_POST["tarikh_tindakan"][$count] 
    //':item_unit'  => $_POST["item_unit"][$count]
   )
  );
 }
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'ok';
 }
}
?>