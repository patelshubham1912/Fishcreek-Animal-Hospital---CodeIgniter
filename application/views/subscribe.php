<html>
<head>
	<title>
		subscribe.php
	</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/fishcreek.css">
</head>
<body>
<div id="wrapper">
	<div id="heading5"><h1>Fish Creek Animal Hospital</h1></div>
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
					<h3><p class="boldText1"><b>Subscribe Fish Creek</b></p></h3>
					<p style="display: inline;" class="boldText">Required fields are marker with an asterisk (*).</p>
					<?php
					$attributes =array('style'=>'width: 180px');
					$servicesarray = array();
            		foreach($services as $row ){
            	        $servicesarray[$row->serviceid] = $row->servicename;
            		}
            		$petarray = array();
            		foreach($pet as $row ){
            	        $petarray[$row->petid] = $row->petname;
            		}
					echo validation_errors();
					echo form_open();
					echo '<p align="right">* Client Full Name:'.form_input('name',set_value('name'),$attributes).'</p>';
					echo '<p align="right">* Address:'.form_input('address',set_value('address'),$attributes).'</p>';
					echo '<p align="right">* E-mail:'.form_input('email',set_value('email'),$attributes).'</p>';
					echo '<p align="right">* Phone:'.form_input('phone',set_value('phone'),$attributes).'</p>';
					echo '<p align="right">* Password:'.form_password('password',set_value('password'),$attributes).'</p>';
					echo '<p align="right">* Type of Service:'.form_dropdown('service', $servicesarray,'default',array('style'=>'width: 180px;')).'</p>';
					echo '<p align="right">* Pet:'.form_dropdown('pet', $petarray,'default',array('style'=>'width: 180px;')).'</p>';
					echo '<p align="right">'.form_submit('submitbutton', 'Send Now',array('style'=>'width: 80px;margin-right: 100px;')).'</p>';
					echo form_close();
					?>
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
