<?
    session_start();
?>
<meta charset="utf-8">
<?
    $email = $_POST["user_email"];
    $password = $_POST["user_password"];
    $auto_login = $_POST["auto_login"];

    if(!$email){
        echo "
            <script>
                window.alert('이메일 주소를 입력하세요.');
                history.go(-1);
            </script>
        ";
    }else{
        if(!$password){
        echo "
            <script>
                window.alert('비밀번호를 입력하세요.');
                history.go(-1);
            </script>";
        }else{
            
    //DB
    include "../lib/dbconn.php";

    $sql = "SELECT * FROM members WHERE email='$email'";
    $result = mysqli_query($connect,$sql);

    $num_match = mysqli_num_rows($result);
            
            
    
    if(!$num_match){ 
        echo "
            <script>
                window.alert('등록되지 않은 계정입니다.');
                history.go(-1);
            </script>
        ";
    }else{ 
        
        $row = mysqli_fetch_assoc($result);
        
        $db_pass = $row['password']; 
        
        if($password != $db_pass){
            echo "
                <script>
                    window.alert('비밀번호가 틀립니다.');
                    history.go(-1);
                </script>
            ";
        }else{ 
            $useremail = $row['email']; 
            $username = $row['name'];
            $userlevel = $row['level'];
            
            $_SESSION['useremail'] = $useremail;
            $_SESSION['username'] = $username;
            $_SESSION['userlevel'] = $userlevel;
            
            if($auto_login == 1){
                $_SESSION['autologin'] = $auto_login;
            }
            
            
            echo "
                <script>
                    location.href = '../index.php';
                </script>";
        }
    }
        }
    }

    mysqli_close($connect);
?>














