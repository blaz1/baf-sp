<?php

setcookie("username", "", time()-3600);
setcookie("password", "", time()-3600);

?>

<?php include 'header.html' ?>
<title>Logged out</title>
</head>

<body>
	<?php include 'navigation-unknown.html'; ?>

	<div class="content" id="logout">
		<h1>You have been successfully logged out.</h1>
	</div>
</body>
</html>