<?php
	if(isset($_POST['submit'])){
		$namegroup=$_POST['namegroup'];
                $linkgroup=$_POST['linkgroup'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='linksgroupswhats@gmail.com';
		$subject='إضافة مجموعة';
		$message="namegroup :".$namegroup."\n"."linkgroup :".$linkgroup."\n"."Phone :".$phone."\n"."وصف المجموعة :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1 >"." ".$name." شكرا لك لقد تم الإرسال بنجاح, تم التوصل بطلبك سنضيف مجموعتك إلى تطبيقنا في أقرب وقت ممكن</h1>";
		}
		else{
			echo "حاول مرة أخرى شئ ما خاطئ";
		}
	}
?>