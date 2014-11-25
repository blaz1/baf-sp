<?php include 'header.html' ?>
<title>Register</title>
</head>

<body>
<?php include 'navigation-unknown.html'; ?>

  <div class="content" id="editAcc">
    <h1>Create account</h1>
    <img src="images/profile.jpg" class="userImg"  height="180" width="189" alt="userImage" />

    <form>
        <div class="column floatLeft">
                <div class="row">
                    <div class="col1"><label>Username: </label><br></div>
                    <div class="col2"><input size="39" type="text" id="regName"></div>
                </div>
                <div class="row">
                    <div class="col1"><label>E-mail: </label><br></div>
                    <div class="col2"><input type="email" size="39" id="regMail"></div>
                </div>
                <div class="row">
                    <div class="col1"><label>Password: </label><br></div>
                    <div class="col2"><input type="password" size="39" id="regPwd1"><span class="editAccPwdError">Not matching</span></div>
                </div>  
                <div class="row">
                    <div class="col1"><label>Repeat password: </label><br></div>
                    <div class="col2"><input type="password" size="39" id="regPwd2"><span class="editAccPwdError">Not matching</span></div>
                </div>
            <input type="button" id="regAccButton" value="Register" onclick="validateRegAcc();">                  
            </div> 
    </form>   
    <img src="images/editImg.png" class="editAccImg" onclick="uploadImg();" alt="editImgPicture"/>
    <input type="file" id="editAccImgUpload">
  </div>
</body>
</html>