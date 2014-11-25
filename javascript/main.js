/*START CREATE BET FUNCTIONALITY*/

function validateNewBet() {
	var start = checkDate('#newFormStart');
	var end = checkDate('#newFormEnd');
	/*if (!$('#newFormName').val()) {
		$('#newFormName').css("background-color","red");
	} else {
		$('#newFormName').css("background-color","white");
	}*/
	//alert($('#newFormName').val());
	/*if ($('#newFormName').val() == "") {
		alert("jasdf");
		toggleBgColor("#newFormName","red");
	} else {
		toggleBgColor("#newFormName", "white");
	}*/
	var bool = true;
	bool = checkIfEmpty("#newFormName") && bool;
	bool = checkIfEmpty("#newFormDesc") && bool;
	bool = checkIfEmpty("#newFormReward") && bool;
	bool = checkDate("#newFormStart") && bool;
	bool = checkDate("#newFormEnd") && bool;
	bool = checkRuleAndOpp("#opponents", "#newFormOpp") && bool;
	bool = checkRuleAndOpp("#rules", "#addRule") && bool;
}

function checkRuleAndOpp(a, b) {
	var str = a + " p";
	if ($(str).length == 0) {
		$(b).css("background-color","red");
		//alert("ja");
		return false;
	} else {
		$(b).css("background-color","white");
	}
	return true;
}

function checkIfEmpty(a) {
	if ($(a).val() == "") {
		//alert("prazen");
		$(a).css("background-color","red");
		return false;
	} else {
		$(a).css("background-color","white");
	}
	return true;
}

function checkDate(a) {
	var date = $(a).val();
  	var parms = date.split(/[\.\-\/]/);
  	var yyyy = parseInt(parms[2],10);
  	var mm   = parseInt(parms[1],10);
  	var dd   = parseInt(parms[0],10);
  	var date = new Date(yyyy,mm-1,dd,0,0,0,0);
  	var bool = mm === (date.getMonth()+1) && dd === date.getDate() && yyyy === date.getFullYear();
	if (!bool) {
		$(a).css("background-color","red");
		return false;
	} else {
		$(a).css("background-color","white");
	}
	return true;
}

function addNewRule() {
	var rule = $('#addRule').val();
	if(!rule) {
		return false;
	}	
	var n = $('.rule').length + 1;
	var ruleId = "rule"+n;
	//alert(ruleId);
	var func = "deleteRule("+n+");";
	var tag = "<p class='rule' id='"+ruleId+"'>"+rule+"<span class='deleteRule' onclick='"+func+"'>X</span></p>";
	//alert(tag);
	$('#rules').append(tag);
	$('#addRule').val("");
	checkRuleAndOpp("#rules", "#addRule");
}

function deleteRule(num) {
	var s = "#rule" + num;
  	$(s).remove();
  	checkRuleAndOpp("#rules", "#addRule");
}

function addOpponent() {
	var opp = $('#newFormOpp').val();
	if(!opp) {
		return false;
	}
	var n = $('.opponent').length + 1;
	var oppId = "opp"+n;
	//alert(oppId);
	var func = "deleteOpp("+n+");";
	var tag = "<p class='opponent' id='"+oppId+"'>"+opp+"<span class='deleteOpp' onclick='"+func+"'>X</span></p>";
	//alert(tag);
	$('#opponents').append(tag);
	$('#newFormOpp').val("");
	checkRuleAndOpp("#opponents", "#newFormOpp");
}

function deleteOpp(num) {
	var s = "#opp" + num;
  	$(s).remove();
  	checkRuleAndOpp("#opponents", "#newFormOpp");
}

/*END CREATE BET FUNCTIONALITY*/

/*START BROWSE BET FUNCTIONALITY*/

function browseBets() {
	var str = $("#searchBets").val();
	if (str == "") {
		$("#searchBets").css("background-color","red");
		return false;
	}
	$("#searchBets").css("background-color","white");
	//alert(str);
}

/*END BROWSE BET FUNCTIONALITY*/

/*START EDIT ACCOUNT FUNCTIONALITY*/

function validateUsername(a){
    var usernameRegex = /^[a-zA-Z0-9\-_]+$/;
    var valid = $(a).val().match(usernameRegex);
    if(valid == null){
    	$(a).css("background-color","red");
        return false;
    }
    $(a).css("background-color","white");
    return true;
}

function validateEmail(a) { 
	var str = $(a).val();
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var valid = re.test(str);
    if(valid == false){
    	$(a).css("background-color","red");
        return false;
    }
    $(a).css("background-color","white");
    return true;

} 

function validateEditAcc () {
	var bool = true;
	bool = validateUsername("#editAccName") && bool;
	bool = validateEmail("#editAccMail") && bool;
	if (($("#editAccNewPwd1").val() !== $("#editAccNewPwd2").val()) || $("#editAccNewPwd1").val() == "") {
		$(".editAccPwdError").css("visibility","visible");
		bool = false;
	} else {
		$(".editAccPwdError").css("visibility","hidden");
	}
	//alert(bool);
}

function uploadImg() {
	$("#editAccImgUpload").click();
}

/*END EDIT ACCOUNT FUNCTIONALITY*/

/*START REGISTER ACCOUNT FUNCTIONALITY*/

function validateRegAcc () {
	var bool = true;
	bool = validateUsername("#regName") && bool;
	bool = validateEmail("#regMail") && bool;
	if (($("#regPwd1").val() !== $("#regPwd2").val()) || $("#regPwd1").val() == "") {
		$(".editAccPwdError").css("visibility","visible");
		bool = false;
	} else {
		$(".editAccPwdError").css("visibility","hidden");
	}
}

/*END REGISTER ACCOUNT FUNCTIONALITY*/

/*START LOGIN FUNCTIONALITY*/

function checkLogin() {
	if($("#loginButton").val() == "") {
		$("#loginButton").css("background-color","red");
	}
}

/*END LOGIN FUNCTIONALITY*/