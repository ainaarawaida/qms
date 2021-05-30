
<?php 
session_start();
//unset($_SESSION['noId']);
session_destroy();
?>

<script>
{
alert("Anda telah log keluar dari sistem.");
self.location.href='../../login.php';
}
</script>
<input type="button" onClick="show_alert()" value="OK" />