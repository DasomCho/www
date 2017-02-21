<?
                        //"concert",  6,       150
   function latest_article2($table, $loop, $char_limit) 
   {
		include "dbconn.php";

		$sql = "select * from $table order by num desc limit $loop"; //최신순(내림차순) 6개만
		$result = mysql_query($sql, $connect);
        //$result => 최근 레코드 6개 검색 
		while ($row = mysql_fetch_array($result))
		{
			$num = $row[num];  //해당 게시물의 view 페이지로 이동하기 위해
            $subject = $row[subject];
            $len_content = strlen($row[content]); //내용 문자열의 길이
            $content = $row[content];

            if ($len_content > $char_limit) //제목 문자열이 150자보다 크다면 
			{
                $content = mb_substr($row[content], 0, $char_limit, 'utf-8');  //내용에서 인덱스값 0 부터 150까지 끊어와서 넣음(한글이 깨지지 않으려면 mb_를 꼭 붙여야함)
                $content = $content."..."; //10자...
			}

			$regist_day = substr($row[regist_day], 0, 10); //날짜 중에서 연월일만 자름(10자까지)
            
            //목록 이미지경로 불러오기
            $img_name = $row[file_copied_0];
            if($img_name){
                $img_name="./news/data/".$img_name;
            }else{
                $img_name="./news/data/default.jpg";
            }

			echo "      
                <li>
                    <a href='./news/view.php?table=$table&amp;num=$num'><img src='$img_name' width='294' height='189' alt=''/></a>
                    <dl>
                    <dt><a href='./news/view.php?table=$table&amp;num=$num'>$subject</a></dt>
                    <dd><a href='./news/view.php?table=$table&amp;num=$num'>$content</a></dd>
                    <dd class='date'>[$regist_day]</dd>
                    </dl>
                </li>
			";
		}
		mysql_close();
   }
?>