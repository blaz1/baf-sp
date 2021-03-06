
<?php
$servername = "mysql.lrk.si";
$username = "artac_blaz";
$password = "zatlok";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

/*$sql = "INSERT INTO artac_blaz_b1.user (username, email, password)
VALUES ('John', 'Doe@example', 'geslo123')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/


/*$cookie_name = "user";
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' does not exist!";
} else {
    echo "Cookie is named: " . $cookie_name . "<br>Value is: " . $_COOKIE[$cookie_name];
}*/


?>

<?php include 'header.html' ?>

<title>Bet A Friend</title>
</head>

<body>
	<!--<nav id="topNav">
		<div id="homePage"><a href="index.html">Bet A Friend</a></div>
		<div id="mainNav">
			<a href="create-bet.html">Create</a>
			<a href="browse-bets.html">Browse</a>
		</div>
		<ul id="profileNav">
			<li id="dropdown"><a href="profile.html">Profile</a>
				<ul>
					<li><a href="my-bets.html">My bets</a></li>
					<li><a href="my-account.html">My account</a></li>
					<li><a href="logout.html">Log out</a></li>
				</ul>
			</li>
		</ul>
	</nav>
-->
	<?php
		$cookie_name = "username";
		if(!isset($_COOKIE[$cookie_name])) {
		    include 'navigation-unknown.html';
		} else {
		    include 'navigation-known.html';
		}
  	?>

	<div class="content">
		<h1>Welcome to BetAFriend application</h1>
		<p id="mainPageDesc">BetAFriend application allows users to create new bets and challenge your friends or simply browse through the many of already created bets. </p>

		<div id="mainPageLinks">
			<?php
				$cookie_name = "username";
				if(isset($_COOKIE[$cookie_name])) {
				    include 'mainPageLinksKnown.html';
				} else {
					echo "<a id='browseOnly' href='browse-bets.php'>Browse</a>";
				}
			?>
		</div>

		<div id="mainPageStats">
			<div class="column floatLeft">
				<h2>Latest bets</h2>
				<?php

				$sql = "SELECT * FROM artac_blaz_b1.bets ORDER BY create_time DESC LIMIT 5";
				$result = $conn->query($sql);
				while ($row = $result->fetch_assoc()) {
					echo "<div class='betSummary'>";
					echo "<h3>".$row["name"]."</h3>";
					$owner_id = $row["owner_id"];
					$sql2 = "SELECT username FROM artac_blaz_b1.user WHERE id_user='$owner_id'";
					$owner = $conn->query($sql2)->fetch_assoc();
					echo "<p class='username'>".$owner["username"]."</p>";
					echo "<p>".$row["description"]."</p>";
					echo "</div>";
				}

				?>
			</div>
			<div class="column floatRight">
				<h2>Most popular</h2>
				<div class="betSummary">
					<h3>
						Karaoke
					</h3>
					<p class="username">janez_novak12</p>					
					<p>
						BetAFriend application allows users to create new bets and challenge your friends or simply browse through the many of already created bets. 
					</p>
				</div>				
			</div>
		</div>
	</div>
</body>
</html>