<?
    session_start();

    if(isset($_SESSION['useremail'])){       
        $useremail = $_SESSION['useremail'];
    }else{ //로그인이 되지 않았다면
        $useremail = ""; 
    }

    if(isset($_SESSION['username'])){ 
        $username = $_SESSION['username'];
    }else{ //아이디가 없다면
        $username = ""; 
    }

    if(isset($_SESSION['userlevel'])){ 
        $userlevel = $_SESSION['userlevel'];
    }else{ 
        $userlevel = ""; 
    }
    

    if(!isset($_SESSION['LAST_ACTIVITY'])){
        // initiate value
        $_SESSION['LAST_ACTIVITY'] = time();
    }

    if(time() - $_SESSION['LAST_ACTIVITY'] > 1800){ 
        if(isset($_SESSION['autologin'])){ //auto_login option
            $_SESSION['LAST_ACTIVITY'] = time();
        }else{
            session_destroy();
        }
  
    }else{
        $_SESSION['LAST_ACTIVITY'] = time();
    }

 
    
?>