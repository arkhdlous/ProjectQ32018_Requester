<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	.tombol-simpan{
		background: #232323;
		padding: 5px 10px;
		color: #fff;	
	}
 
	</style>
</head>
<body>


<div id="container">
	<h1>Form Request!</h1> <br>
	<a href="<?php echo base_url();?>CRequest/insert_view">Tambah Data</a>

	<div id="body">
		<table class="table table-striped">
			<thead>
				<tr>
					<th> PLANT NAME </th>
					<th> DATE OF REQUEST </th>
					<th> DATE OF TEST </th>
					<th> DATE OF INSTALL </th>
					<th> DEVELOPMENT CONTENT </th>
					<th> SUMARRY </th>
					<th> TEST METHOD </th>
					<th> MONITORING METHOD </th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($content -> result_array() as $key): ?>
				<tr>
					<td> <?php echo htmlspecialchars($key['plant_name']) ?> </td>
					<td> <?php echo htmlspecialchars($key['date_request']) ?> </td>
					<td> <?php echo htmlspecialchars($key['date_test']) ?> </td>
					<td> <?php echo htmlspecialchars($key['date_install']) ?> </td>
					<td> <?php echo htmlspecialchars($key['content']) ?> </td>
					<td> <?php echo htmlspecialchars($key['summary']) ?> </td>
					<td> <?php echo htmlspecialchars($key['test_method']) ?> </td>
					<td> <?php echo htmlspecialchars($key['monitoring_method']) ?> </td>
				</tr>
				<?php endforeach?>
			</tbody>

		</table>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
</body>
</html>