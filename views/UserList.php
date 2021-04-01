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
					<table class="table table-responsive">
						<tr><td>Username</td><td>Password</td><td>Nama</td><td>Email</td><td>Kota Asal</td></tr>
						<?php 

							foreach ($rs as $user => $list)
							{
								echo '<tr><td><a href="?act=tampil-data&i='.$list['username'].'">'.$list['username'].'</a></td><td>'.$list['password'].'</td><td>'.$list['nama'].'</td><td>'.$list['email'].'</td><td>'.$list['kotaasal'].'</td></tr>';
							}

						?>
					</table>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>
