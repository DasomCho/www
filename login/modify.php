<?
	session_start();

    @extract($_GET); 
    @extract($_POST); 
    @extract($_SESSION); 
?>
<meta charset="utf-8">
<?
   $hp = $hp1."-".$hp2."-".$hp3;
   $email = $email1."@".$email2;

   $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

   include "../common/dbconn.php";       // dconn.php 파일을 불러옴

   $sql = "update member set pass=password('$pass'), name='$name' , ";
   $sql .= "hp='$hp', email='$email', regist_day='$regist_day' where id='$userid'";

   mysql_query($sql, $connect);  // $sql 에 저장된 명령 실행

   mysql_close();                // DB 연결 끊기
   echo "
	   <script>
	     window.alert('회원정보가 수정되었습니다.');
	    location.href = '../index.html';
	   </script>
	";
?>

   
