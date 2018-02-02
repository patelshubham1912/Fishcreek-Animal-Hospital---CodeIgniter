<html>
<head>
	<title>
		askvet.php
	</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/fishcreek.css">
</head>
<body>
<div id="wrapper">
	<div id="heading3"><h1>Fish Creek Animal Hospital</h1></div>
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

					<p class="boldText"><a href="<?php echo base_url();?>Contact">Contact</a> us if you have a question that you would like answered here.</p>
					<?php
						foreach($result as $row){
								$question= $row->question;
								$answer= $row->answer;

								echo "<p style='display: inline;' class='boldText1'><b>".$question."</b></p>";
								echo "<dd><p style='display: inline;''>".$answer."</p></dd>";
							}
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
