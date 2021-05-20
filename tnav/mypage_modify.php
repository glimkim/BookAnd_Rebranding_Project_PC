<? include "../lib/session.php" ?>
<meta charset="utf-8">
<?
    $password = $_POST["password"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $postcode = $_POST["postcode"]; 

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

    //DB
    include "../lib/dbconn.php";

    $sql = "UPDATE members SET password='$password', name='$name', dob='$dob', gender='$gender', phone='$phone', postcode='$postcode', address='$address' WHERE email='$useremail'";

    mysqli_query($connect, $sql);

    $_SESSION['username'] = $name;

    mysqli_close($connect);

    echo "
	   <script>
	    location.href = 'modify_complete.php#indicator';
	   </script>
	";
?>











