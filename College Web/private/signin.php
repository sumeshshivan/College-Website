<?php require_once("../includes/config.php"); ?>
<?php require_once("../includes/database.php"); ?>
<?php require_once("../includes/user.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php
    
    $errors = array();
    //Form validation
    $required_fields = array('username', 'password');
    foreach($required_fields as $fieldname){
        if(!isset($_POST[$fieldname])||empty($_POST[$fieldname])){
            $errors[] = $fieldname;
        }
    }
    if(!empty($errors)){
        redirect_to("index.php");
    }  else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = User::authenticate( $username, $password );
        if($user) {
            $session->login($user);
            //echo $_SESSION['user_id'];
            redirect_to("index.php");
        }
	else {
	    redirect_to("login.php");    
	}
    }
?>
