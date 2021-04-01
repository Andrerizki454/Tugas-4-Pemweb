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
				<div class="col-md-4"><h3>Isikan data Anda di sini</h3>
					<form method="post" action="/mvc-example/user.php?act=simpan">
					  <div class="form-group">
					    <label for="exampleInputUsername">Username</label>
					    <input type="text" class="form-control" id="exampleInputUsername" name="username" placeholder="Username">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword" name="password" placeholder="Password">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputNama">Nama</label>
					    <input type="text" class="form-control" id="exampleInputNama" name="nama" placeholder="Nama">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail">Email</label>
					    <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputKotaAsal">Kota Asal</label>
					    <input type="text" class="form-control" id="exampleInputKotaasal" name="kotaasal" placeholder="Kota Asal">
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
					<br/>
					<a href="/mvc-example/User.php?act=tampil-data">Lihat Hasil Input</a>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>