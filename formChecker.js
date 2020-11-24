


function checkInfo(){
	var x = document.forms["myForm"]["username"].value;
	var y = document.forms["myForm"]["password"].value;
	if (x == "") {
		return false;
	}
	else if (y == ""){
		return false;
	}
	else{
		return true;
	}
}

function checkItems(){
	if((document.getElementById("goldendoodle").checked) ||(document.getElementById("husky").checked) || (document.getElementById("pointer").checked)){
		return true;
	}
	else{
		return false;
	}
}

function checkShipping(){
	if((document.getElementById("1").checked) || (document.getElementById("2").checked)|| (document.getElementById("3").checked)){
		return true;
	}
	else{
		return false;
	}
}




function validateForm() {
	if((checkInfo()) && (checkItems()) && (checkShipping())){
		return true;
	}
	else{
		alert("Please fill out all fields.");
		return false;
	}
	
}

