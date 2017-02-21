<?
   session_start();
    
    @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);

    //$num=?

   include "../common/dbconn.php";

   $sql = "delete from greet where num = $num";
   mysql_query($sql, $connect);

   mysql_close();

   echo "
	   <script>
	    location.href = '../sub5/sub5_1.html';
	   </script>
	";
?>

