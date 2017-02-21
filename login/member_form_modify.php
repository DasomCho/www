<?
    session_start();

    @extract($_GET); 
    @extract($_POST); 
    @extract($_SESSION); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta charset="utf-8">
<link href="../common/css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="../common/css/modify.css" rel="stylesheet" type="text/css" media="all">
    
<script language="javascript" type="text/javascript" src="../common/js/jquery-1.8.3.min.js"></script>
<script language="javascript" type="text/javascript" src="../common/js/fullnav.js"></script>
<script language="javascript" type="text/javascript" src="../common/js/family.js"></script>
<script language="javascript" type="text/javascript" src="../common/js/move-top.js"></script>
<script language="javascript" type="text/javascript" src="../common/js/scrollmove.js"></script>
<script language="javascript" type="text/javascript" src="../common/js/easing.js"></script>
    
<script>
   function check_id()
   {
     window.open("check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=200,top=200,width=250,height=100,scrollbars=no,resizable=yes");
   }

   function check_input()
   {
      if (!document.member_form.pass.value)
      {
          alert("비밀번호를 입력하세요");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value)
      {
          alert("비밀번호확인을 입력하세요");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value)
      {
          alert("이름을 입력하세요");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.hp2.value || !document.member_form.hp3.value )
      {
          alert("휴대폰 번호를 입력하세요");    
          document.member_form.hp2.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value)
      {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");    
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      document.member_form.submit();
   }

   function reset_form()
   {
      document.member_form.id.value = "";
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.hp1.value = "010";
      document.member_form.hp2.value = "";
      document.member_form.hp3.value = "";
      document.member_form.email1.value = "";
      document.member_form.email2.value = "";
	  
      document.member_form.id.focus();

      return;
   }
</script>
</head>
<?
    //$_SESSION['userid'] ='aaa' ...
    
    include "../common/dbconn.php";

    $sql = "select * from member where id='$userid'";
    $result = mysql_query($sql, $connect);

    $row = mysql_fetch_array($result); //검색 레코드를 불러와라
    //$row[hp]='010-0000-0000'
    $hp = explode("-", $row[hp]); //'-'을 기준으로 분리 
    $hp1 = $hp[0]; //010
    $hp2 = $hp[1]; //0000
    $hp3 = $hp[2]; //0000

    $email = explode("@", $row[email]); //'@'를 기준으로 분리 
    $email1 = $email[0]; 
    $email2 = $email[1];

    mysql_close();
?>
<body>
    <? include "../common/subhead.html" ?>
    
    <div class="main">
        <img src="../common/images/main.jpg" alt="main visual" />
    </div>
    <!-- main e -->
  
    <div class="container">
        <div id="content">
            <div class="con">
                <div class="modifyTitle">
                    <h2>회원정보수정</h2>
                    <p>my page</p>
                </div>
                <form  name="member_form" method="post" action="modify.php"> 
                    <table summary="회원정보수정양식">
                        <caption class="hidden">회원정보 수정하기</caption>
                        <tr>
                            <th scope="row"><span>*</span>아이디</th>
                            <td><?= $row[id] ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><span>*</span>비밀번호</th>
                            <td>
                                <input type="password" name="pass" value="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><span>*</span>비밀번호 확인</th>
                            <td>
                                <input type="password" name="pass_confirm" value="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><span>*</span>이름</th>
                            <td>
                                <input type="text" name="name" value="<?= $row[name] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><span>*</span>핸드폰</th>
                            <td>
                                <input type="text" class="hp" name="hp1" value="<?= $hp1 ?>">
                                - 
                                <input type="text" class="hp" name="hp2" value="<?= $hp2 ?>"> 
                                - 
                                <input type="text" class="hp" name="hp3" value="<?= $hp3 ?>">
                            </td>
                        </tr>
                        <tr class="email">
                            <th scope="row">이메일</th>
                            <td>
                                <input type="text" id="email1" name="email1" value="<?= $email1 ?>"> @ <input type="text" name="email2" value="<?= $email2 ?>">
                            </td>
                        </tr>
                    </table>
                    <div class="modifyBtn">
                        <input type="button" id="sign" onclick="check_input()" value="수정하기" />
                        <input type="button" id="reset" onclick="reset_form()" value="취소하기" />
                    </div>
                </form>
	       </div>
        </div>
    </div>
    <? include "../common/subfoot.html" ?>
    </body>
</html>
