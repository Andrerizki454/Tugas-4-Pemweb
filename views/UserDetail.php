<html>
	<head>
		<title>Native MVC Example</title>
		<link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.css" />
		<script type="text/javascript" src="/mvc-example/assets/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4"><h3>Data User</h3>
					<?php 

						echo 'Username:' . $rs['username'] . '<br/>';
						echo 'Password:' . $rs['password'] . '<br/>';
						echo 'Nama:' . $rs['nama'] . '<br/>';
						echo 'Email:' . $rs['email'] . '<br/>';
						echo 'Kota Asal:' . $rs['kotaasal'] . '<br/>';

					?>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>

<html>
<head></head>

<body>



</body>
</html>