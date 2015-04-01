<!DOCTYPE html>

<html>
	<head>
		<title><?=$data["title"];?> - <?=PAGE_TITLE;?></title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>

	<body>
		<div id="content">
			<h1>Welcome to Little Framework PHP</h1>
			<p><strong>It's a MVC PHP framework that you may use in your small projects.</strong></p>

			<p class="line">Feel free to fork the <a href="https://github.com/fgpayano/LittleFrameworkPHP/tree/master" target="_blank">repository</a> to contribute with the improvement of this Framework.</p>

			<h2>Creating a static view</h2>

			<ol class="list">
				<li>First, we need to define a controller. Go to /inc/controllers/ and open <b>Example.php</b>. Every controller call index method as default page.</li>
				<li>
					We need to load a view. Use method load from helper View like this: View::load("view_name"); and if you want to pass data use the next syntax View::load("view_name", $data);

				</li>
				<li>Where is my view file? Go to /inc/views/ and open the <b>example.php</b>. See how the code works.</li>
				<li>Here below is the example results: </li>
			</ol>

			<table class="tbl">
				
				<thead>
					<tr>
						<th>ID</th>
						<th>Full Name</th>
						<th>Age</th>
						<th>Occupation</th>
					</tr>
				</thead>

				<tbody>	
					<?php
						foreach ($data["staff"] as $k => $v) 
						{
							?>
							<tr>
								<td><?=$k;?></td>
								<td><?=$v["name"];?></td>
								<td><?=$v["age"];?></td>
								<td><?=$v["occupation"];?></td>
							</tr>
							<?php
						}
					?>
				<tbody>

			<table>
		</div>
	</body>
</html>