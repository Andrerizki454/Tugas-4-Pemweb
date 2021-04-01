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
				<div class="col-md-4"><h3>Shopping List</h3>
					<form method="post" action="/mvc-example/shop.php?act=simpan">
					  <div class="form-group">
					    <label for="exampleInputthing">Barang</label>
					    <input type="text" class="form-control" id="exampleInputthing" name="thing" placeholder="Masukkan nama barang">
					  </div>

					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
					<br/>
					<a href="/mvc-example/shop.php?act=tampil-data">Lihat Hasil Input</a>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>