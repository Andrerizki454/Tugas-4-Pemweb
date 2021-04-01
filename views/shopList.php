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
					<table class="table table-responsive">
						<tr><td>No</td><td>Barang</td></tr>
						<?php 

							foreach ($rs as $thing => $list)
							{
								echo '<tr><td><a href="?act=tampil-data&i='.$list['no'].'">'.$list['no'].'</a></td><td>'.$list['thing'].'</td></tr>';
							}

						?>
					</table>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>
