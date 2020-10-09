<?php
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$to="natarizky884@gmail.com";

	$message="Dear, <br /> <br />".$message;

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	// More headers
	$headers .= 'From:'.$nama.' <'.$email.'>'."\r\n" . 'Reply-To: '.$nama.' <'.$email.'>'."\r\n";
	$headers .= 'Cc: admin@email.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
	@mail($to,$subject,$message,$headers);
	if (@mail) { ?>
	<script language="javascript" type="text/javascript">
	alert('Thank you for the message. We will contact you shortly.');
	window.location = 'contact.php';
	</script>
	<?php
	}
	else { ?>
	<script language="javascript" type="text/javascript">
	alert('Message failed. Please, send an email to xxxx@email.co.id');
	window.location = 'contact.php';
	</script>
<?php
}
?>