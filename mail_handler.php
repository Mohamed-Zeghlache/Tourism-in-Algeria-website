<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$title=$_POST['title'];
		$msg=$_POST['msg'];

		$to='mohamedzizouinfo@gmail.com'; 
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$title."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

	}
	mail($to, $subject, $message, $headers);
	echo "<script>window.location = 'https://tourisminalgeria.000webhostapp.com/#gallery'</script>";
?>