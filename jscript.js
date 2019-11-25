function reg(e){

var id = document.getElementById("nationalid").value; 
var fname = document.getElementById("fname").value;
var lname = document.getElementById("lname").value;
var email = document.getElementById("email").value;
var tele1 = document.getElementById("phone").value;
var tele2 = document.getElementById("phone2").value;
var add1 = document.getElementById("add1").value;
var add2 = document.getElementById("add2").value;
var validated = document.getElementById("validation_done_by_js");


	isIdValid(id);
	isNameValid(fname);
	isLNameValid(lname);
	isEmailValid(email);
	isTelephoneValid(tele1, tele2);
	isAddressValid(add1);
	isAddress2Valid(add2);

	if(!isIdValid(id) || !isNameValid(fname) || !isLNameValid(lname) || !isEmailValid(email) || !isTelephoneValid(tele1, tele2) || !isAddressValid(add1) || !isAddress2Valid(add2))
	{
		validated.value = "";
		e.preventDefault();
		return false;
	}
	else
	{
		validated.value = "set";
		return true;
	}
}

function login(e)
{
	var id = document.getElementById("nationalid").value;
	var validated = document.getElementById("validation_done_by_js");
	isIdValid(id);

	if(!isIdValid(id))
	{
		validated.value = "";
		e.preventDefault();
		return false;
	}
	else
	{
		validated.value = "set";
		return true;
	}
}


function addHyphen() {
    let ele = document.getElementById('nationalid');
        ele = ele.value.split('-').join('');    // Remove dash (-) if mistakenly entered.

        let finalVal = ele.match(/.{1,6}/g).join('-');
        document.getElementById('nationalid').value = finalVal;
}

function isIdValid(id) {
	//is field
	if (id == '') 
	{
   		document.getElementById("iderror").innerHTML = "Error: Missing Information";
    	return false;
  	}

 	else if(id.length > 11 || id.length < 11)
  	{
  		document.getElementById("iderror").innerHTML = "Error: 10 digits required";
  		return false;
  	}  		
  	else if (id.length === 11)
  	{
  		document.getElementById("iderror").innerHTML = "";
  		return true;
	  }
 }

function isLicenseNumValid(licenseno)
{
	//declare random variables
    var randnum2='';
    var randyear =0;
    var randmonth=0;
    var randday=0;

	//set sizes;
    var length2 = 8;
    var numbers= '0123456789';
    var numberLength = numbers.length;
    
   
	//create first 7 random digits
    for (var z=0; z < length2; z++)
    {
        randnum2 += numbers.charAt(Math.floor(Math.random() * numberLength) +1);  
	}
	
	//create random year, month and day
    randyear += Math.floor(Math.random() * 90) + 1930; 
    randmonth += Math.floor(Math.random() * 11) + 1;

    if (randmonth ==2){
        randday += Math.floor(Math.random() * 28) + 1;
    }
    else if((randmonth == 8) ||(randmonth == 4) ||(randmonth ==6) || (randmonth ==11) )
    {
        randday+= Math.floor(Math.random() * 29) + 1;
    }

    else
    {
        randday+= Math.floor(Math.random() * 30) + 1;
    }
    
	//get the current year
	var today = new Date();
	var yyyy = today.getFullYear();
	
	//add 0 to complete format
	if (randday < 10) {
	randday = '0' + randday;
	} 
	if (randmonth < 10) {
	randmonth = '0' + randmonth;
    } 
	
	//check if driver is old enough
	dateDiff= yyyy - randyear;
	console.log("year: "+ randyear +" "+ "month: " + randmonth +" " + "day: " + randday);
	

        if (dateDiff <=15)
        {
                 document.getElementById('lnerror').innerHTML="Error: Too Young to register";
                 console.log(" This person is "+ dateDiff + " Years old");
                 return false;
		}
		
		else if(dateDiff >=81)
		{
			document.getElementById('lnerror').innerHTML="Error: Too Old to register";
			console.log(" This person is "+ dateDiff + " Years old");
			return false;
		}

        else
        {
            var licenseno = randnum2 + randyear + randmonth + randday ;
			document.getElementById("licenseno").value= licenseno;
			
		}
		console.log(randnum2);
		console.log(" This person is "+ dateDiff + " Years old",  licenseno);
		return true;


}//isLicenseNumValid

function isNameValid(fname){
 	 var letters = /^[A-Za-z]+$/;
      if(fname == '')
      {
      	document.getElementById("fnameerror").innerHTML = "Error: Missing Information";
      	return false;
      }
      else if(!fname.match(letters))
      {
      	document.getElementById("fnameerror").innerHTML = "Error: No Numbers Allowed";
      	return false;
      }
      else
      {
      	document.getElementById("fnameerror").innerHTML = "";
	  }
	  return true;
 }

 function isLNameValid(lname){
 	 var letters = /^[A-Za-z]+$/;
      if(lname == '')
      {
      	document.getElementById("lnameerror").innerHTML = "Error: Missing Information";
      	return false;
      }
      else if(!lname.match(letters))
      {
      	document.getElementById("lnameerror").innerHTML = "Error: No Numbers Allowed";
      	return false;
      }
      else
      {
      	document.getElementById("lnameerror").innerHTML = "";
	  }
	  return true;
 }

 function isEmailValid(email)
 {
	var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[09]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if (!filter.test(email)) 
	{
		document.getElementById("emailErr").innerHTML = "Error: Invalid Format";
		email.focus;
		return false; 
	}
	else
	{
		document.getElementById("emailErr").innerHTML = "";
		
	}
	return true;
 }

 function isTelephoneValid(tele1, tele2)
{
	if((tele1 == '') || (tele2 == ''))
	{
		document.getElementById("phoneErr").innerHTML = "Error: Missing Information";
		return false;
	}
	else if((tele1[0] == 0) || (tele1[0] == 1))
	{
		document.getElementById("phoneErr").innerHTML= "Error: Incorrect Prefix format";
		return false;
	}
	
	var numbers = /^[0-9]+$/;
	if(tele2.match(numbers))
			{
				document.getElementById("phoneErr").innerHTML = "";
				console.log('Your Registration number has accepted....');		
			}
		
	var telephone= "" + tele1 + tele2;
	document.getElementById("phone").value = telephone;
	console.log(telephone);
	return true;

}

 function isAddressValid(add1){
 	 var address = /^[a-zA-Z0-9\s,.'-]{3,}$/;
      if(add1 == '')
      {
      	document.getElementById("add1error").innerHTML = "Error: Missing Information";
      	return false;
      }
      else if(!add1.match(address))
      {
      	document.getElementById("add1error").innerHTML = "Error: Address Invalid";
      	return false;
      }
      else
      {
      	document.getElementById("add1error").innerHTML = "";
	  }
	  return true;
 }

 function isAddress2Valid(add2){
 	 var address = /^[a-zA-Z0-9\s,.'-]{3,}$/;
	 
	  if(add2 == '')
      {
      	document.getElementById("add1error").innerHTML = "Error: Missing Information";
      	return false;
	  }
	  
      else if(!add2.match(address))
      {
      	document.getElementById("add2error").innerHTML = "Error: Address Invalid";
      	return false;
      }
	  else
	  {
		document.getElementById("add2error").innerHTML = "";
	  }
      	return true;
 }


/*var id = document.getElementById("nationalid");
var li_no = document.getElementById("licenseno");
var fname = document.getElementById("fname");
var lname = document.getElementById("lname");
var add1 = document.getElementById("add1");
var add2 = document.getElementById("add2");
var parish = document.getElementById("parish");*/

// document.getElementById("").onclick():
/*if(isNameValid(fname) == true && isLNameValid(lname) == true && isIdValid(id) == true && isLicenseValid(li_no) == true && isAddressValid(add1) == true && isAddress2Valid(add2) == true)
{
	let driver = {
		ID: id,
		Licenseno: li_no,
		FirstName: fname,
		LastName: lname,
		Adress1: add1,
		Adress2: add2,
		Parish: parish
	}
	function newDriver(driver){
 		let driver_info = JSON.stringify(driver);
 		localStorage.setItem("driver_info", driver_info);

 		console.log(localStorage);
 	}
 	newDriver(driver);
} */
	


// function newDriver(driver)
// {
	
// 	var id = document.getElementById("nationalid").value;
// 	var li_no = document.getElementById("licenseno").value;
// 	var fname = document.getElementById("fname").value;
// 	var lname = document.getElementById("lname").value;
// 	var add1 = document.getElementById("add1").value;
// 	var add2 = document.getElementById("add2").value;
// 	var parish = document.getElementById("parish").value;
	
// if(isIdValid(id) == true && isLicenseValid(li_no) == true && isNameValid(fname) == true && isLNameValid(lname) == true && isAddressValid(add1) == true && (isAddress2Valid(add2) == true || isAddress2Valid(add2) == false))
// 	{
		
// 		var driver = [{
// 		nationalId: id,
// 		licenseNo: li_no,
// 		firstName: fname,
// 		lastName: lname,
// 		adress1: add1,
// 		adress2: add2,
// 		parish: parish
// 		}];
// 	}
// 		var info = localStorage.getItem("driverInfo");

// 			info = JSON.parse(info);
// 			info.push(driver);

// 		let driverInfo = JSON.stringify(info);
//             localStorage.setItem("driverInfo", driverInfo);

//             console.log(localStorage);
// }


// function loadData()
// {
//   var driverArray = [
//      {
//         nationalId: "730209-3043",
//         licenseNo: "135686819730209",
//         firstName: "Andrew",
//         lastName: "Pryor",
//         address1: "31 ",
//         address2: "Prior Park",
//         parish: "St. James",
//         username: "qwer1234",
//         password:"andrewpryor123"
//      },

//      {
//         nationalId: "671212-0404",
//         licenseNo: "143647819671212",
//         firstName: "Jennifer",
//         surname: "Davis",
//         address1: "Wavell Ave",
//         address2: "Black Rock",
//         parish: "St. Michael",
//         username: "geju7593",
//         password:"anoth3rpass"
//    },

//    {
//       nationalId: "790422-1209",
//       licenseNo: "100893419790422",
//       firstName: "Anderson",
//       surname: "Alleyne",
//       address1: "Lascelles Terrace",
//       address2: "The Pine",
//       parish: "St. Michael",
//       username: "oyqb4789",
//       password:"thepassw0rd"
//    }
//   ]

//   var employeeArray = [
//    {
//       employeeId: "545-700-593",
//       firstName: "Merissa",
//       lastName: "Halliwall",
//       password:"f1rstpa55"
//    },

//    {
//       employeeId: "090-728-221",
//       firstName: "Terold",
//       lastName: "Bostwick",
//       password:"secur3acc3s5"
//  },

//  {
//    employeeId: "147-830-662",
//    firstName: "Vanda",
//    lastName: "Marshall",
//    password:"oll1p0ps"
//  }
// ]

//   //add to localStorage 
//   if(!localStorage.getItem("driverInfo"))
//   {
//      localStorage.setItem("driverInfo", JSON.stringify(driverArray));
//   }
//   if(!localStorage.getItem("employeeinfo"))
//   {
//      localStorage.setItem("employeeinfo", JSON.stringify(employeeArray));
//   }

// }

// function loadData()
// {
//   var driverArray = [
//      {
//         nationalId: "730209-3043",
//         licenseNo: "135686819730209",
//         firstName: "Andrew",
//         lastName: "Pryor",
//         address1: "31 ",
//         address2: "Prior Park",
//         parish: "St. James",
//         username: "qwer1234",
//         password:"andrewpryor123"
//      },

//      {
//         nationalId: "671212-0404",
//         licenseNo: "143647819671212",
//         firstName: "Jennifer",
//         surname: "Davis",
//         address1: "Wavell Ave",
//         address2: "Black Rock",
//         parish: "St. Michael",
//         username: "geju7593",
//         password:"anoth3rpass"
//    },

//    {
//       nationalId: "790422-1209",
//       licenseNo: "100893419790422",
//       firstName: "Anderson",
//       surname: "Alleyne",
//       address1: "Lascelles Terrace",
//       address2: "The Pine",
//       parish: "St. Michael",
//       username: "oyqb4789",
//       password:"thepassw0rd"
//    }
//   ]

//   var employeeArray = [
//    {
//       employeeId: "545-700-593",
//       firstName: "Merissa",
//       lastName: "Halliwall",
//       password:"f1rstpa55"
//    },

//    {
//       employeeId: "090-728-221",
//       firstName: "Terold",
//       lastName: "Bostwick",
//       password:"secur3acc3s5"
//  },

//  {
//    employeeId: "147-830-662",
//    firstName: "Vanda",
//    lastName: "Marshall",
//    password:"oll1p0ps"
//  }
// ]

  //add to localStorage 
//   if(!localStorage.getItem("driverInfo"))
//   {
//      localStorage.setItem("driverInfo", JSON.stringify(driverArray));
//   }
//   if(!localStorage.getItem("employeeinfo"))
//   {
//      localStorage.setItem("employeeinfo", JSON.stringify(employeeArray));
//   }

// }