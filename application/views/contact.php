<html>
<head>
	<title>
		contact.php
	</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/fishcreek.css">
</head>
<body>
<div id="wrapper">
	<div id="heading4"><h1>Fish Creek Animal Hospital</h1></div>
	<table>
		<tr>
			<td valign="top" width="150" style="padding-left:20px">
	<div>
		<nav>
		<table>
						<tr>
							<td><a href="<?php echo base_url();?>Home">Home</a></td>
						</tr>
						<tr>
							<td><a href="<?php echo base_url();?>Services">Services</a></td>
						</tr>
						<tr>
							<td><a href="<?php echo base_url();?>Askvet">Ask the Vet</a></td>
						</tr>
						<tr>
							<td><a href="<?php echo base_url();?>Subscribe">Subscribe</a></td>
						</tr>
						<tr>
							<td><a href="<?php echo base_url();?>Contact">Contact</a></td>
						</tr>
		</table>
	</nav>
	</div>
</td>
<td>
	<div>
					<h3><p class="boldText1"><b>Contact Fish Creek</b></p></h3>
					<p style="display: inline;" class="boldText">Required fields are marker with an asterisk (*).</p>
					<?php
					$attributes =array('style'=>'width: 180px; margin-right: 20px;');
					$textareaAttributes = array('name' => 'comments','rows'=>'3','cols'=>'25');
					echo validation_errors();
					echo form_open();
					echo '<p align="right">* Name:'.form_input('name',set_value('name'),$attributes).'</p>';
					echo '<p align="right">* E-mail:'.form_input('email',set_value('email'),$attributes).'</p>';
					echo '<p align="right">* Comments:'.form_textarea($textareaAttributes).'</p>';
					echo '<p align="right">'.form_submit('submitbutton', 'Send Now',array('style'=>'width: 80px;margin-right: 120px;')).'</p>';
					echo form_close();
					?>

<!--
					<form method="get" action="" style="width: 320px;" >
							<p align="right">* Name: <input type="text" name="name" id="name" value="<?php echo $nameValue?>" style="width: 180px; margin-right: 20px;"></p><p align="right" style="font-size: 10px;color: red;"><?php echo $nameValidation;?></p>
							<p align="right">* E-mail: <input type="text" name="email" id="email" value="<?php echo $emailValue?>" style="width: 180px; margin-right: 20px;"></p><p align="right" style="font-size: 10px;color: red;"><?php echo $emailValidation;?></p>
							<p align="right">* Comments: <TEXTAREA name="comments" id="comments" rows="3" cols="25"><?php echo $commentsValue?></TEXTAREA></p><p align="right" style="font-size: 10px;color: red;"><?php echo $commentsValidation;?></p>
							<p align="right"><input style="width: 80px;margin-right: 120px;" type="submit" name="submitbutton" value="Send Now"></p><p align="right" style="font-size: 10px;color: red;"><?php echo $successEntryValidation;?></p>
					</form>
-->					
					<br>
				</div>

				<div id="footer">
				<p style="display: inline;">Copyright &copy; 2016 Fish Creek Animal Hospital</p><br>
				<a href="mailto:shubham@patel.com"><i>shubham@patel.com</i></a>
				</div>
</td>
</tr>
</table>
</div>
</body>
</html>
