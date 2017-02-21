<?

   function latest_article($table, $loop, $char_limit) 
   {
		include "dbconn.php";

		$sql = "select * from $table order by num desc limit $loop"; //최신순(내림차순) 4개만
		$result = mysql_query($sql, $connect);
        //$result => 최근 레코드 4개 검색 
		while ($row = mysql_fetch_array($result))
		{
			$num = $row[num];  //해당 게시물의 view 페이지로 이동하기 위해
			$len_subject = strlen($row[subject]); //제목 문자열의 길이
			$subject = $row[subject]; //총 문자열

			if ($len_subject > $char_limit) //제목 문자열이 25자보다 크다면 
			{
				$subject = mb_substr($row[subject], 0, $char_limit, 'utf-8');  //제목에서 인덱스값 0 부터 25까지 끊어와서 넣음(한글이 깨지지 않으려면 mb_를 꼭 붙여야함)
				$subject = $subject."..."; //25자...
			}

			$regist_day = substr($row[regist_day], 0, 10); //날짜 중에서 연월일만 자름(10자까지)

			echo "      
				 <li><a href='./notice/view.php?table=$table&amp;num=$num'>$subject<span>[$regist_day]</span></a></li>
			";
		}
		mysql_close();
   }
?>