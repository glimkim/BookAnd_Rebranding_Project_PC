<?
    include "../lib/session.php";
    include "../lib/dbconn.php"; 

    $num = $_GET['num']; 
    $table = $_GET['table'];

    $sql = "SELECT * FROM $table WHERE num = $num";

    $result = mysqli_query($connect, $sql); 

    $row = mysqli_fetch_assoc($result); 

    $copied_name[0] = $row['file_copied_0'];
    $copied_name[1] = $row['file_copied_1'];

    for ($i=0; $i<2; $i++){
		if ($copied_name[$i]){
			$image_name = "./data/".$copied_name[$i];
			unlink($image_name);
	    }
    }

    $sql = "DELETE FROM $table WHERE num = $num";
    mysqli_query($connect, $sql);

    mysqli_close($connect); 

    if($table == "notice"){
        echo "
        <script>
            location.href = 'notice.php?table=$table#indicator';
        </script>
	   "; 
    }else if($table = "qna"){
        echo "
        <script>
            location.href = 'qna.php?table=$table#indicator';
        </script>
	   ";    
    }


?>