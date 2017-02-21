<? 
	session_start(); 
    @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);

    //$num=? $page=?

	include "../common/dbconn.php";

	$sql = "select * from greet where num=$num"; //넘어온 num으로 검색
	$result = mysql_query($sql, $connect);

    $row = mysql_fetch_array($result);       
      // 하나의 레코드 가져오기
	
	$item_num     = $row[num];
	$item_id      = $row[id];
	$item_name    = $row[name];
	$item_hit     = $row[hit];

    $item_date    = $row[regist_day];

	$item_subject = str_replace(" ", "&nbsp;", $row[subject]);

	$item_content = $row[content];
	$is_html      = $row[is_html];

	if ($is_html!="y") //html모양으로 저장되지 않았으면(출력을 위한 문자 변환)
	{
		$item_content = str_replace(" ", "&nbsp;", $item_content);
		$item_content = str_replace("\n", "<br/>", $item_content); 
	}	

	$new_hit = $item_hit + 1; //조회수 카운트 1씩 증가

	$sql = "update greet set hit=$new_hit where num=$num";   // 글 조회수 증가시킴
	mysql_query($sql, $connect);
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
        <script>

            function del(href) 
            {
                if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다.\n\n정말 삭제하시겠습니까?")) {
                        document.location.href = href; 
                }
            }
        </script>
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

		<div id="view_title">
			<div id="view_title1"><?= $item_subject ?></div><div id="view_title2"><?= $item_name ?> | 조회 : <?= $item_hit ?>  
			                      | <?= $item_date ?> </div>	
		</div>

		<div id="view_content">
			<?= $item_content ?>
		</div>

		<div id="view_button">
            
            <a href="../sub5/sub5_1.html?page=<?=$page?>&scale=<?=$scale?>"><img src="../common/images/list.jpg"></a>&nbsp;
<? 
	if($userid==$item_id || $userlevel==1 || $userid=="admin")
	{ //본인의 게시글과 관리자 계정일때만 수정, 삭제 권한을 준다
?>
            <a href="modify_form.php?num=<?=$num?>&page=<?=$page?>"><img src="../common/images/edit.jpg"></a>&nbsp;
            <a href="javascript:del('delete.php?num=<?=$num?>')"><img src="../common/images/delete.jpg"></a>&nbsp;
<?
	}
?>
<? 
	if($userid ) //로그인이 되었으면 글쓰기 가능
	{
?>
            <a href="write_form.php?num=<?=$num?>&page=<?=$page?>&scale=<?=$scale?>"><img src="../common/images/write.jpg"></a>
<?
	}
?>
           
		</div>


      </div>
      <!-- contentArea e -->
    </div>
    <!-- content e -->
    </div>
<!-- container e -->
<? include "../common/subfoot.html" ?>

</body>
</html>
