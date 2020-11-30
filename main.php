<?php
session_start();
session_destroy();
include("src/checks.php");
?>
<!doctype html>
<html lang="en" class="h-100">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v4.1.1">
	<title>My Mastermind</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer/">
	<!-- Bootstrap core CSS -->
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="dist/css/styles.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="dist/sticky-footer.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Mastermind</h1><hr>
		<div class="col-lg-12 balls-list">
			<div class="head col-lg-2">
				<svg class="bd-placeholder-img rounded-circle" width="30" height="30" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
					<rect width="100%" height="100%" fill="#6d6b6b" value="1"></rect>
					<text x="50%" y="50%" fill="#dee2e6" dy=".3em">?</text>
				</svg>
			</div>
			<div class="head col-lg-2">
				<svg class="bd-placeholder-img rounded-circle" width="30" height="30" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
					<rect width="100%" height="100%" fill="#6d6b6b" value="2"></rect>
					<text x="50%" y="50%" fill="#dee2e6" dy=".3em">?</text>
				</svg>
			</div>
			<div class="head col-lg-2">
				<svg class="bd-placeholder-img rounded-circle" width="30" height="30" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
					<rect width="100%" height="100%" fill="#6d6b6b" value="3"></rect>
					<text x="50%" y="50%" fill="#dee2e6" dy=".3em">?</text>
				</svg>
			</div>
			<div class="head col-lg-2">
				<svg class="bd-placeholder-img rounded-circle" width="30" height="30" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
					<rect width="100%" height="100%" fill="#6d6b6b" value="4"></rect>
					<text x="50%" y="50%" fill="#dee2e6" dy=".3em">?</text>
				</svg>
			</div>

		</div>

		<br>
		<div id="game">
			<?php include("view/balls.php") ?>
		</div>

		
		<div class="labels">
			<p>Select the color, next click the position you want it</p>
			<?php foreach ($check->colors as $key => $color) { ?>
			<div class="head col-lg-2">
				<svg class="bd-placeholder-img rounded-circle" width="30" height="30" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
					<rect width="100%" height="100%" fill="<?php echo $color; ?>" class="balls-table" value = "<?php echo $key; ?>"></rect>
				</svg>
			</div>
			<?php } ?>
			<br>
		<hr>
			<button id="restart" onclick='location.reload();'>Restart</button>
		</div>
		<br>
		
		<div class="results_panel">
			<p>results panel</p>
			<div class="head col-lg-2">
				<svg class="bd-placeholder-img rounded-circle" width="30" height="30" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
					<rect width="100%" height="100%" fill="red" class="balls-table"></rect>
				</svg>
			</div>
			<div class="head col-lg-2">
				<svg class="bd-placeholder-img rounded-circle" width="30" height="30" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
					<rect width="100%" height="100%" fill="red" class="balls-table"></rect>
				</svg>
			</div>
			<div class="head col-lg-2">
				<svg class="bd-placeholder-img rounded-circle" width="30" height="30" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
					<rect width="100%" height="100%" fill="red" class="balls-table"></rect>
				</svg>
			</div>
			<div class="head col-lg-2">
				<svg class="bd-placeholder-img rounded-circle" width="30" height="30" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
					<rect width="100%" height="100%" fill="red" class="balls-table"></rect>
				</svg>
			</div>
		</div>

  </div>


</main>

<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Your are in the game</span>
  </div>
</footer>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="dist/js/jquery.livequery.min.js"></script>
	<script type="text/javascript">var colorsJS=<?php echo json_encode($check->colors);?></script>
	<script src="dist/js/jsactions.js"></script>
</body>
</html>
