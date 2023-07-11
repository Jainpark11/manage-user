<?
    function dbconn(){
        $connect =mysqli_connect("115.68.168.179","jain423","qkrwkdls1!"); 
        mysqli_select_db("user_php",$connect);
        //mysqli_query("set names euckr");


        //return $connect;
    }
?>