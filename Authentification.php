 <?php
   session_start();
if(!(isset($_SESSION['stat'])))
{
  header("location:login.php");
}
 ?>