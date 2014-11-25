<?php include 'header.html' ?>

<title>Edit account</title>
</head>

<body>
  <?php include 'navigation-known.html'; ?>

	<div class="content" id="editAcc">
		<h1>Edit account</h1>
		<img src="images/profile.jpg" class="userImg"  height="180" width="189" alt="userImage"/>

		<form>
   			<div class="column floatLeft">
                <div class="row">
                    <div class="col1"><label>Username: </label><br></div>
                    <div class="col2"><input size="39" value="ba3611" type="text" id="editAccName"></div>
                </div>
                <div class="row">
                    <div class="col1"><label>E-mail: </label><br></div>
                    <div class="col2"><input type="email" size="39" value="nekaj@gmail.com" id="editAccMail"></div>
                </div>
                <div class="row">
                    <div class="col1"><label>Old password: </label><br></div>
                    <div class="col2"><input type="password" value="nekaj123" size="39" id="editAccOldPwd"></div>
                </div>   
                <div class="row">
                    <div class="col1"><label>New password: </label><br></div>
                    <div class="col2"><input type="password" value="nekaj123" size="39" id="editAccNewPwd1"><span class="editAccPwdError">Not matching</span></div>
                </div>  
                <div class="row">
                    <div class="col1"><label>Repeat password: </label><br></div>
                    <div class="col2"><input type="password" value="nekaj123" size="39" id="editAccNewPwd2"><span class="editAccPwdError">Not matching</span></div>
                </div>
            <input type="button" id="editAccButton" value="Update" onclick="validateEditAcc();">                  
            </div> 
		</form>		
    <img src="images/editImg.png" class="editAccImg" onclick="uploadImg();" alt="edit image picture"/>
    <input type="file" id="editAccImgUpload">
	</div>
</body>
</html>