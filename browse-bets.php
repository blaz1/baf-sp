<?php

$conn = new mysqli("mysql.lrk.si", "artac_blaz", "zatlok");
//$betid = $_GET['betid'];

$sql = "SELECT id_bets, name, description, reward, status, end_time  from artac_blaz_b1.bets";

$result = $conn->query($sql);


 ?>

<?php include 'header.html' ?>
<title>Browse bets</title>
</head>

<body>
	<?php
		$cookie_name = "username";
		if(!isset($_COOKIE[$cookie_name])) {
		    include 'navigation-unknown.html';
		} else {
		    include 'navigation-known.html';
		}
  ?>

	<div class="content">
		<h1>Browse bets</h1>
		<form id="browseBetsForm">
			<input id="searchBets" type="text" placeholder="Search bets" onkeydown="if (event.keyCode == 13) browseBets()">
			<input id="searchBetsButton" type="button" value="Search" onclick="browseBets();">
		</form>

		<table id="searchBetsResult">
			<thead>
				<tr>
					<td class="tableTdMedium">Name</td>
					<td class="tableTdBig">Description</td>
					<td class="tableTdSmall">Status</td>
					<td class="tableTdMedium">Reward</td>
					<td class="tableTdSmall">End date</td>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td><a href='/bet-details.php?betid=".$row["id_bets"]."'>".$row["name"]."</a></td>";
						echo "<td>".$row["description"]."</td>";
						echo "<td>".$row["status"]."</td>";
						echo "<td>".$row["reward"]."</td>";
						$phpdate = strtotime($row["end_time"]);
						$mysqldate = date( 'd.m.Y', $phpdate );
						echo "<td>".$mysqldate."</td>";
						echo "</tr>";
						
					}
				?>			
			</tbody>
		</table>
	</div>
</body>
</html>