<?
           session_start();
?>
<meta charset="utf-8">
<?
   @extract($_GET); 
   @extract($_POST); 
   @extract($_SESSION); 

   // $id=>입력id값    $pass=>입력 pass
   
   if(!$id) {   //아무값도 입력되지 않았냐?
     echo("
           <script>
             window.alert('아이디를 입력하세요.');
             history.go(-1);
           </script>
         ");
         exit;
   }

   if(!$pass) {
     echo("
           <script>
             window.alert('비밀번호를 입력하세요.');
             history.go(-1);
           </script>
         ");
         exit;
   }

 

   include "../common/dbconn.php";

   $sql = "select * from member where id='$id'";
   $result = mysql_query($sql, $connect);

   $num_match = mysql_num_rows($result); //검색 레코드 개수

   if(!$num_match) //검색 레코드가 없으면
   {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다.');
             history.go(-1);
           </script>
         ");
    }
    else    //해당 아이디가 검색되었으면..
    {
		 $row = mysql_fetch_array($result); 
         //$row[id], $row[pass] ...
         $sql ="select * from member where id='$id' and pass=password('$pass')"; //db에 암호화되어서 저장돼있는 password와 비교해야 하기 때문에 찾을때도 password()를 이용해 암호화 한후 검색
         $result = mysql_query($sql, $connect);
         $num_match = mysql_num_rows($result);
     
  

        if(!$num_match)  //적은 패스워드와 디비 패스워드가 같지않을때
        {
           echo("
              <script>
                window.alert('비밀번호가 틀립니다.');
                history.go(-1);
              </script>
           ");

           exit;
        }
        else    // 입력 pass 와 테이블에 저장된 pass가 일치한다면,
        {
           $userid = $row[id];   
           $username = $row[name];  //로그인 되었을 때 상단에 표시하기 위해(id는 기본, 나머지는 표시할 것만 가져오면 됨)
           $usernick = $row[nick];   
		   $userlevel = $row[level];
  
  
           $_SESSION['userid'] = $userid;//$_SESSION['userid'] = $row[id];
           $_SESSION['username'] = $username;//$_SESSION['username'] = $row[name];
           $_SESSION['usernick'] = $usernick;//$_SESSION['usernick'] = $row[nick];
           $_SESSION['userlevel'] = $userlevel;//$_SESSION['userlevel'] = $row[level];

           echo("
              <script>
			    alert('로그인이 되었습니다.');
                location.href = '../index.html';
              </script>
           ");
        }
   }          
?>
