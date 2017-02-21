<? 
session_start(); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head> 
        <meta charset="utf-8">
        <link href="../common/css/common.css" type="text/css" rel="stylesheet" />
        <link href="../common/css/member.css" rel="stylesheet" type="text/css" media="all">
        
        <script language="javascript" type="text/javascript" src="../common/js/jquery-1.8.3.min.js"></script>
        <script language="javascript" type="text/javascript" src="../common/js/fullnav.js"></script>
        <script language="javascript" type="text/javascript" src="../common/js/family.js"></script>
        <script language="javascript" type="text/javascript" src="../common/js/move-top.js"></script>
        <script language="javascript" type="text/javascript" src="../common/js/scrollmove.js"></script>
        <script language="javascript" type="text/javascript" src="../common/js/easing.js"></script>

        <script type="text/javascript"> 
            $(document).ready(function() {

                $("#id").keyup(function() {    // id입력 상자에 id값 입력시
                    var id = $('#id').val();
                    $.ajax({
                        type: "POST",
                        url: "check_id.php", //넘길 곳
                        data: "id="+ id,  //id라는 변수에 id = $('#id').val();에 입력된 값을 넘김
                        cache: false, 
                        success: function(data)  //데이터가 제대로 전송이 됐으면
                        {
                            $("#loadtext").html(data);   //data라는 매개변수에 echo에 쓴 값이 담겨서 입력됨
                        }
                    });
                });

            });

        </script>

        <script>

            function check_input() //저장하기 눌렀을 때 폼 검사(null값만 검사 -> 검사하고 싶은 것 추가하기)
            {
                if (!document.member_form.id.value) //null값일때
                {
                    alert("아이디를 입력하세요");    
                    document.member_form.id.focus();
                    return;
                }

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
                    document.member_form.nick.focus();
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

                document.member_form.submit(); //모두 만족하면 전송
            }

            function reset_form()  //취소하기 버튼 눌렀을 때(input type=reset으로 하면 쓸 필요 없음)
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

    <body>
        <? include "../common/subhead.html" ?>
        <div class="main">
            <img src="../common/images/main.jpg" alt="main visual" />
        </div>
        <!-- main e -->

        <div class="container">
            <div id="content">
                <div class="con">
                    <div class=signTitle>
                        <h2>하나투어 회원가입</h2>
                        <p>HanaTour sign up</p>
                    </div>
                    <form name="member_form" method="post" action="insert.php">
                        <table summary="회원가입양식">
                            <caption class="hidden">회원가입하기</caption>
                            <tr>
                                <th scope="row"><span>*</span>아이디</th>
                                <td>
                                    <input type="text" id="id" name="id">
                                    <span id="loadtext"></span>
                                    <span class="info">4~12자의 영문 소문자, 숫자와 특수기호(_) 만 사용할 수 있습니다.</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><span>*</span>비밀번호</th>
                                <td>
                                    <input type="password" name="pass">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><span>*</span>비밀번호 확인</th>
                                <td>
                                    <input type="password" name="pass_confirm">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><span>*</span>이름</th>
                                <td>
                                    <input type="text" name="name">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><span>*</span>핸드폰</th>
                                <td>
                                    <select class="hp" name="hp1" title="휴대폰 첫째자리"> 
                                        <option value="010">010</option>
                                        <option value="011">011</option>
                                        <option value="017">017</option>
                                        <option value="018">018</option>
                                        <option value="019">019</option>
                                    </select>
                                    - 
                                    <input type="text" class="hp" name="hp2" maxlength="4" title="휴대폰 중간자리"> 
                                    - 
                                    <input type="text" class="hp" name="hp3" maxlength="4" title="휴대폰 끝자리">
                                </td>
                            </tr>
                            <tr class="email">
                                <th scope="row">이메일</th>
                                <td>
                                    <input type="text" id="email1" name="email1"> @ <input type="text" name="email2">
                                </td>
                            </tr>
                        </table>
                        <div class="signBtn">
                            <input type="button" id="sign" onclick="check_input()" value="가입하기" />
                            <input type="button" id="reset" onclick="reset_form()" value="초기화" />
                        </div>
                    </form>
                </div>
            </div> 
            
        </div>
      
    <? include "../common/subfoot.html" ?>
    </body>
</html>
