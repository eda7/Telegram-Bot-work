<<<<<<< HEAD
<?php
	$botToken="306182799:AAEmmQ6NJvU4vHgODWzsfffLfX6tqOLihCM";
	$website="https://api.telegram.org/bot".$botToken;

	$update=file_get_contents($website."/getupdates");
	$updateArray=json_decode($update, True);
	
		
	
	$chatId=end($updateArray['result'])['message']['chat']['id'];
	$clientName=end($updateArray['result'])['message']['chat']['first_name'];
	$message=end($updateArray['result'])['message']['text'];

	
	

	switch ($message) {
		case '/hi':
			file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=Hey ".$clientName);
			break;
		case '/yo':
			file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=Wassup ".$clientName);
			break;
		case '/test':
			file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=Test ".$clientName);
			break;
		case 'What is your name?':
			file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=My name is WafismaBot");
			break;

		case '/mypassword':
			file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=Please that is not allowed");
			break;
		default:
			file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=I have not been programmed to understand \"".$message."\" yet");
			break;
	}
	
?>	
<form action="<?php echo $website.'/sendPhoto' ?>" method="post" enctype="multipart/form-data">
	
	<input type="text" name="chat_id" value="268407590">
	<input type="file" name="photo" >
	<input type="submit" name="send" >

</form>

=======
<?php
	$botToken="306182799:AAEmmQ6NJvU4vHgODWzsfffLfX6tqOLihCM";
	$website="https://api.telegram.org/bot".$botToken;

	$update=file_get_contents($website."/getupdates");
	$updateArray=json_decode($update, True);
	
		
	
	$chatId=end($updateArray['result'])['message']['chat']['id'];
	$clientName=end($updateArray['result'])['message']['chat']['first_name'];
	$message=end($updateArray['result'])['message']['text'];

	
	

	switch ($message) {
		case '/hi':
			file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=Hey ".$clientName);
			break;
		case '/yo':
			file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=Wassup ".$clientName);
			break;
		case '/test':
			file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=Test ".$clientName);
			break;
		case 'What is your name?':
			file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=My name is WafismaBot");
			break;

		case '/mypassword':
			file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=Please that is not allowed");
			break;
		default:
			file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=I have not been programmed to understand \"".$message."\" yet");
			break;
	}
	
?>	
<form action="<?php echo $website.'/sendPhoto' ?>" method="post" enctype="multipart/form-data">
	
	<input type="text" name="chat_id" value="268407590">
	<input type="file" name="photo" >
	<input type="submit" name="send" >

</form>

>>>>>>> origin/master
