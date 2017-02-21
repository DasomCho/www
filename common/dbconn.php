<?
    $connect=mysql_connect( "localhost", "ssom13", "tha1213@") or  
        die( "SQL server에 연결할 수 없습니다."); 

    mysql_select_db("ssom13",$connect);
?>
