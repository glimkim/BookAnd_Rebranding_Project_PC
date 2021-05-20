<?
    include "../lib/session.php";
?>
<meta charset="utf-8">
<?
    if(!$useremail){
        echo "
            <script>
                window.alert('로그인 후 이용해 주세요.');
                history.go(-1);
            </script>
        ";
        exit;
    }

    //DB
    include "../lib/dbconn.php";

    $sql = "SELECT * FROM notice WHERE email='$useremail'";

    $result = mysqli_query($connect, $sql);

    $row = mysqli_fetch_assoc($result);

    $name = $username;

    $subject = $_POST['subject'];
    $subject = addslashes($subject);
    $content = $_POST['content'];
    $content = addslashes($content);
    $is_html= $_POST['is_html'];

    $regist_day = date("Y-m-d (H:i)");  

    $files = $_FILES["upfile"]; 
	$count = count($files["name"]); 
    
    $upload_dir = './data/';

    for($i=0;$i<$count;$i++){
        $upfile_name[$i]     = $files["name"][$i];
		$upfile_tmp_name[$i] = $files["tmp_name"][$i];
		$upfile_type[$i]     = $files["type"][$i];
		$upfile_size[$i]     = $files["size"][$i];
		$upfile_error[$i]    = $files["error"][$i];
        
        $file = explode(".", $upfile_name[$i]);
		$file_name = $file[0];
		$file_ext  = $file[1];
        
        if(!$upfile_error[$i]){
            $new_file_name = date("Y_m_d_H_i_s");
			$new_file_name = $new_file_name."_".$i;
			$copied_file_name[$i] = $new_file_name.".".$file_ext;      
			$uploaded_file[$i] = $upload_dir.$copied_file_name[$i];
            
            if($upfile_size[$i] > 500000){
                echo "
                    <script>
                        alert('업로드 파일 크기가 지정된 용량(500KB)을 초과합니다!<br>파일 크기를 체크해주세요! ');
                        history.go(-1);
                    </script>
                ";
                exit;
            }
            

            if (!move_uploaded_file($upfile_tmp_name[$i], $uploaded_file[$i])){
                echo "
                    <script>
                        alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
                        history.go(-1);
					</script>
                ";
                exit;
            }
            
            
        }
    }

    $mode = $_GET['mode'];
    $table = $_GET['table'];
    $num = $_GET['num'];

    if($mode == "modify"){ 
        $num_checked = count($_POST['del_file']);
		$position = $_POST['del_file'];

		for($i=0; $i<$num_checked; $i++){ 
			$index = $position[$i];
			$del_ok[$index] = "y";
		}
        
        $sql = "SELECT * FROM $table WHERE num=$num";  
		$result = mysqli_query($connect, $sql);
		$row = mysqli_fetch_assoc($result);
        
        for($i=0; $i<$count; $i++){ 
            $field_org_name = "file_name_".$i;
			$field_real_name = "file_copied_".$i;

			$org_name_value = $upfile_name[$i];
			$org_real_value = $copied_file_name[$i];
            
            if($del_ok[$i] == "y"){ 
                $delete_field = "file_copied_".$i;
				$delete_name = $row[$delete_field];
				
				$delete_path = "./data/".$delete_name;

				unlink($delete_path);
                
                $sql = "UPDATE $table SET $field_org_name = '$org_name_value', $field_real_name = '$org_real_value'  WHERE num=$num";
				mysqli_query($connect, $sql);  
            }else{ 
                if (!$upfile_error[$i]){
					$sql = "UPDATE $table SET $field_org_name = '$org_name_value', $field_real_name = '$org_real_value'  WHERE num=$num";
					mysqli_query($connect, $sql);  			
				}

            }
            
        }
        
        $sql = "UPDATE $table SET subject='$subject', content='$content' WHERE num=$num";
		mysqli_query($connect, $sql);  
        
    }else{ 
        if($is_html == 'y'){ 
            $is_html = "y";
        }else{ 
            $is_html = "";
            $content = htmlspecialchars($content);
        }

        $table = $_GET['table']; 

        $sql = "INSERT INTO $table(email, name, subject, content, regist_day, is_html, file_name_0, file_name_1, file_copied_0,  file_copied_1) ";
        $sql .= "VALUES('$useremail', '$username', '$subject', '$content', '$regist_day', '$is_html', '$upfile_name[0]', '$upfile_name[1]', '$copied_file_name[0]', '$copied_file_name[1]')";
    }
    
    mysqli_query($connect, $sql);

    mysqli_close($connect);

    if($table == "notice"){
        echo "
	    <script>
            location.href = 'notice.php?table=$table&page=1#indicator';
	    </script>
	   ";
    }else if($table == "qna"){
         echo "
	    <script>
            location.href = 'qna.php?table=$table&page=1#indicator';
	    </script>
	   ";
    }
?>













