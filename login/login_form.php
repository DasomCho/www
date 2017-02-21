<? session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta charset="utf-8">
<link href="../common/css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="../common/css/login.css" rel="stylesheet" type="text/css" media="all">
    
    <script language="javascript" type="text/javascript" src="../common/js/jquery-1.8.3.min.js"></script>
    <script language="javascript" type="text/javascript" src="../common/js/fullnav.js"></script>
    <script language="javascript" type="text/javascript" src="../common/js/family.js"></script>
    <script language="javascript" type="text/javascript" src="../common/js/move-top.js"></script>
    <script language="javascript" type="text/javascript" src="../common/js/scrollmove.js"></script>
    <script language="javascript" type="text/javascript" src="../common/js/easing.js"></script>

</head>

<body>
<div id="wrap">
    <? include "../common/subhead.html" ?>
    <div class="main">
        <img src="../common/images/main.jpg" alt="main visual" />
    </div>
    <!-- main e -->

    <div class="container">
        <div class="loginTitle">
            <h2>하나투어 로그인</h2>
            <p>HanaTour login</p>
        </div>
        <div class="content">
            <div class="login">
                <img src="../common/images/loginp.jpg" alt="회원님의 아이디와 패스워드를 입력해주세요." />
                <form  name="member_form" method="post" action="login.php"> 
                    <div id="login_form">
                        <div id="id_input_button">
                            <div>
                                <ul>
                                    <li>아이디</li>
                                    <li><input type="text" name="id" class="login_input"></li>
                                </ul>
                            </div>
                            <div>
                                <ul>
                                    <li>비밀번호</li>
                                <li><input type="password" name="pass" class="login_input"></li>
                                </ul>						
                            </div>
                            <div id="login_button">
                                <input type="submit" value="로그인">
                            </div>
                        </div>
                    </div> 
                </form>
            </div><!-- end of login -->
            <div class="new">
                <p class="hidden">아직 회원이 아니신가요?</p>
                <p class="hidden">지금 하나투어의 회원으로 가입하시고 더 많은 정보를 얻어가세요</p>
                <a href="../member/member_form.php">회원가입</a>
            </div><!-- end of new -->

            
        </div> <!-- end of content-->
  </div> <!-- end of container -->
</div> <!-- end of wrap -->
    
    <? include "../common/subfoot.html" ?>
</body>
</html>