<?
session_start();

@extract($_POST);
@extract($_GET);
@extract($_SESSION);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>홍보센터::공지사항</title>
        <link href="../common/css/common.css" type="text/css" rel="stylesheet" />
        <link href="../sub5/common/css/sub5common.css" type="text/css" rel="stylesheet" />
        <link href="../sub5/css/sub5_content1.css" type="text/css" rel="stylesheet" />

        <script language="javascript" type="text/javascript" src="../common/js/jquery-1.8.3.min.js"></script>
        <script language="javascript" type="text/javascript" src="../common/js/fullnav.js"></script>
        <script language="javascript" type="text/javascript" src="../common/js/family.js"></script>
        <script language="javascript" type="text/javascript" src="../common/js/move-top.js"></script>
        <script language="javascript" type="text/javascript" src="../common/js/scrollmove.js"></script>
        <script language="javascript" type="text/javascript" src="../common/js/easing.js"></script>
    </head>
    
    <? include "../common/subhead.html" ?>

    <div class="main">
        <img src="../sub5/common/images/main.jpg" alt="main visual" />
    </div>
    <!-- main e -->

    <div class="container">
        <div class="leftNav">
            <h3>홍보센터</h3>
            <div class="leftMenu">
                <ul>
                    <li class="menu1"><a class="current" href="../sub5/sub5_1.html">공지사항</a></li>
                    <li class="menu2"><a href="../sub5/sub5_2.html">보도자료</a></li>
                    <li class="menu3"><a href="../sub5/sub5_3.html">광고자료</a></li>
                </ul>
            </div>
            <!-- leftMenu e -->
        </div>
        <!-- leftNav e -->

      <div id="content">
          <div class="titleArea">
              <div class="lineMap">
                  <span>HOME</span> &gt; <span>PR Center</span> &gt; <strong>공지사항</strong> 
              </div>
              <!-- lineMap e -->
              <h2>공지사항</h2>
              <p>notice</p>
          </div>
          <!-- titleArea e -->
          <div class="contentArea">
            <h3 class="writeTitle">게시글 작성하기</h3>
            <form  name="board_form" method="post" action="insert.php"> 
                <table class="write" summary="게시판 글 작성하기">
                    <caption class="hidden">게시판 글 작성하기</caption>
                    <tr>
                        <th>이름</th>
                        <td class="name"><?=$username?></td>
                    </tr>
                    <tr>
                        <th>제목</th>
                        <td><input type="text" name="subject"></td>
                    </tr>
                    <tr class="html">
                        <th>HTML 쓰기</th>
                        <td>HTML 쓰기<input type="checkbox" name="html_ok" value="y"></td>
                    </tr>
                    <tr>
                        <th>내용</th>
                        <td><textarea rows="30" name="content"></textarea></td>
                    </tr>
                </table>

            <div id="write_button">
                <input type="image" src="../common/images/ok.jpg">&nbsp;
                <a href="../sub5/sub5_1.html?page=<?=$page?>&scale=<?=$scale?>"><img src="../common/images/cancle.jpg"></a>
                <!-- 글쓰기 페이지로 넘길 때 받았던 page로 이동 -->
            </div>
            </form>

        </div> <!-- end of contentArea -->
      </div> <!-- end of content -->
    </div> <!-- end of container -->

    <? include "../common/subfoot.html" ?>

</body>
</html>