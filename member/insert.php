<meta charset="utf-8">
<?

@extract($_POST);
@extract($_GET);
@extract($_SESSION);

   $hp = $hp1."-".$hp2."-".$hp3; //010-0000-0000
   $email = $email1."@".$email2;  //id@naver.com 나눠서 입력하는 것은 insert에서 합쳐서 변수에 넣어주면 됨

   $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장
   $ip = $REMOTE_ADDR;         // 방문자의 IP 주소를 저장

   include "../common/dbconn.php";       // dconn.php 파일을 불러옴 (계정연결)

   $sql = "select * from member where id='$id'";  //id 중복검사(전송할 때 한번더)
   $result = mysql_query($sql, $connect);
   $exist_id = mysql_num_rows($result);  //검색된 레코드 갯수(중복 = 1, 중복x = null)

   if($exist_id) {
     echo("
           <script>
             window.alert('해당 아이디가 존재합니다.');
             history.go(-1);
           </script>
         ");
         exit;
   }
   else //id중복이 아니면
   {            // 레코드 삽입 명령을 $sql에 입력
	    $sql = "insert into member(id, pass, name, hp, email, regist_day, level) ";
		$sql .= "values('$id', password('$pass'), '$name', '$hp', '$email', '$regist_day', 9)";
                            //password() => 보안된 문자로 입력(관리자도 알수없음)
		mysql_query($sql, $connect);  // $sql 에 저장된 명령 실행
   }

   mysql_close();                // DB 연결 끊기
   echo "
	   <script>
        alert('회원가입 처리가 되었습니다.');
	    location.href = '../index.html';  
	   </script>
	";  //index로 넘어감(아니면 로그인 페이지로)
?>

   
