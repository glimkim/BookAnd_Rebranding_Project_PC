<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>이메일 중복확인</title>
    
    <link rel="stylesheet" href="../css/common.css">
    <style>
        body, html{overflow:hidden;}
        .email_check{width:340px; height:300px; padding:20px; box-sizing: border-box; border-top:80px solid #dcccff; border-bottom:10px solid rgba(70, 0, 107, 0.8); box-sizing:border-box; text-align:center;}
        h1{position:absolute; top:15px; left:0; right:0; margin:0 auto; width:80px; height:80px;}
        img{width:60px;}
        .email_check h4{margin-bottom:15px; font-size:24px; font-weight:700;}
        .email_check p.pass{padding-top:8px; font-size:22px; color:#642be5;}
        .email_check p.small{font-size:18px;}
        .email_check span.red{padding-bottom:5px; font-size:20px; font-weight:500; color:#ba2020;}
        
        .email_check a{display:block; width:100px; height:40px; margin:25px auto 0; border-radius:3px; background-color:#490e67; line-height:40px; color:#fff;}
    </style>
</head>
    <body>
        <div class="email_check">
            <h1><img src="../images/common/footer_logo.svg" alt="로고이미지"></h1>
            <h4>이메일 중복확인</h4>
             <?
                $email = $_GET["email"];

                if(!$email){ 
                    echo "아이디를 입력하세요";
                }else{ 
                    include "../lib/dbconn.php";

                    $sql = "select * from members where email='$email'";
                    $result = mysqli_query($connect, $sql);
                    $num_record = mysqli_num_rows($result); 

                    if($num_record){
                        echo '<span class="red">아이디가 중복됩니다!</span><br>';
                        echo '<p class="small">다른 아이디를 사용하세요.<br></p>';
                    }else{ 
                        echo '<p class="pass">사용가능한 아이디입니다.</p>';
                    }

                    mysqli_close($connect);
                }
            ?>
            <a href="#close" onclick="javascript:self.close()">닫기</a>
        </div>
    </body>
</html>