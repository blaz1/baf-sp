<?php include 'header.html' ?>
<title>Browse bets</title>
</head>

<body>
	<?php
		$cookie_name = "user";
		if(!isset($_COOKIE[$cookie_name])) {
		    include 'navigation-unknown.html';
		} else {
		    include 'navigation-known.html';
		}
  ?>

	<div class="content">
		<h1>Browse bets</h1>
		<input id="searchBets" type="text" placeholder="Search bets" onkeydown="if (event.keyCode == 13) browseBets()">
		<button id="searchBetsButton" type="button" onclick="browseBets();">Search</button>

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
				<tr>
					<td><a href="">Pohod na golovec</a></td>
					<td>startamo tkrt pa tkrt iz tm pa tm in pol kdor pride prej gor</td>
					<td>In progress</td>
					<td>en teden počitnic</td>
					<td>17.11.2014</td>
				</tr>
				<tr>	
					<td><a href="">Pohod na golovec</a></td>
					<td>startamo tkrt pa tkrt iz tm pa tm in pol kdor pride prej gor</td>
					<td>In progress</td>
					<td>en teden počitnic</td>
					<td>17.11.2014</td>
				</tr>				
			</tbody>
		</table>
	</div>
</body>
</html>