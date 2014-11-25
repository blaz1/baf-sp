<?php 
	include 'header.html'; 
?>
<title>Login</title>
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
 	include 'navigation-unknown.html';
 ?>
  	<div class="content" id="loginPage">

  		<h1>Login</h1>
  					

  		<form id="loginForm" onsubmit="checkLogin();" > <?php //method="post" action="loginScript.php" ?>
  			<div class="column floatLeft">  			
                <div class="row">
                    <div class="col1"><label>Username: </label><br></div>
                    <div class="col2"><input size="20" type="text" id="loginName" name="username"></div>
                </div>                
                <div class="row">
                    <div class="col1"><label>Password: </label><br></div>
                    <div class="col2"><input type="password" size="20" id="loginPwd" name="password"><span class="editAccPwdError">Not matching</span></div>
                </div> 
                <div class="loginRememberMe">
                	<label>Remember Me: </label><input type="checkbox" name="rememberme" value="1">
                </div>

            	<input type="submit" id="loginButton" value="Login" >                  
            
           </div> 
           <p class="errorLogin">Wrong username or password</p>
  		</form>
	</div>
</body>
</html>