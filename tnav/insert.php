<meta charset="utf-8">
<?
    

    $email = $_POST["email"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $postcode = $_POST["postcode"]; 
    $location_chek = $_POST["location_chek"];
    $promo_check = $_POST["promo_check"];

    //DOB
    $birth01 = $_POST["bday01"];
    $birth02 = $_POST["bday02"];
    $birth03 = $_POST["bday03"];

    if($birth02 < 10){
        $birth02 = '0' . $birth02;
    }
    if($birth03 < 10){
        $birth03 = '0' . $birth03;
    }

    $dob = $birth01 . "-" . $birth02 . "-" . $birth03;

    //gender
    $gender = $_POST["gender"];

    //address
    $address01 = $_POST["address01"];
    $address02 = $_POST["address02"];
    $address = $address01 . '|' . $address02;

    $regist_day = date("Y-m-d (H:i)"); 
    $ip = $REMOTE_ADDR; 


    //DB
    include "../lib/dbconn.php";

    $sql = "SELECT * FROM members WHERE email='$email'";
    $result = mysqli_query($connect,$sql);
    $exist_id = mysqli_num_rows($result);

    if($exist_id){
        echo("
            <script>
                window.alert('해당 이메일로 가입한 계정이 이미 존재합니다.')
                history.go(-1)
            </script>
        ");
        exit; 
    }else{ 
        $sql = "INSERT INTO members(email, password, name, dob, gender, phone, postcode, address, location_chek, promo_chek, regist_day, level) ";
        $sql .= "VALUES('$email','$password', '$name', '$dob', '$gender', '$phone', '$postcode', '$address', '$location_chek', '$promo_check', '$regist_day', 5)";
        
        mysqli_query($connect, $sql); 
    }

    mysqli_close($connect);
    
    echo "
        <script>
        location.href = 'joined.php?name=$name';
        </script>
        ";

?>






