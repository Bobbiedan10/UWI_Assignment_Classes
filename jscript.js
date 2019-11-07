function reg(e){

var id = document.getElementById("nationalid").value; 
var li_no = document.getElementById("licenseno").value;
var fname = document.getElementById("fname").value;
var lname = document.getElementById("lname").value;
var add1 = document.getElementById("add1").value;
var add2 = document.getElementById("add2").value;
var parish = document.getElementById("parish").value;

	e.preventDefault();
	isIdValid(id);
	isLicenseValid(li_no);
	isNameValid(fname);
	isLNameValid(lname);
	isAddressValid(add1);
	isAddress2Valid(add2);
}


function addHyphen() {
    let ele = document.getElementById('nationalid');
        ele = ele.value.split('-').join('');    // Remove dash (-) if mistakenly entered.

        let finalVal = ele.match(/.{1,6}/g).join('-');
        document.getElementById('nationalid').value = finalVal;
}

function isIdValid(id) {
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
  	else if (id.length == 11)
  	{
  		document.getElementById("iderror").innerHTML = "";
  		return true;
  	}
 }

 function isLicenseValid(li_no){
 	if (li_no == '')
 	{
 		document.getElementById("lnerror").innerHTML = "Error: Missing Information";
 		return false;
 	}
 	else if(li_no.length < 15)
 	{
 		document.getElementById("lnerror").innerHTML = " Error: 15 digits required";
 		return false; 
 	}
 	else if(isNaN(li_no))
 	{
 		document.getElementById("lnerror").innerHTML = "Error: Input Not Valid";
 		return false;
 	}
 	else
 	{
 		document.getElementById("lnerror").innerHTML = "";
 		return true;
 	}
 }

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
      	return true;
      }
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
      	return true;
      }
 }

 function isAddressValid(add1){
 	 var address = /^[a-zA-Z0-9\s,.'-]{3,}$/;
      if(add1 == '')
      {
      	document.getElementById("add1error").innerHTML = "Error: Missing Information";
      	return false;
      }
      else if(add1.match(address))
      {
      	document.getElementById("add1error").innerHTML = "";
      	return true;
      }
      else
      {
      	document.getElementById("add1error").innerHTML = "Error: Address Invalid";
      	return false;
      }
 }

 function isAddress2Valid(add2){
 	 var address = /^[a-zA-Z0-9\s,.'-]{3,}$/;
     
      if(add2.match(address))
      {
      	document.getElementById("add2error").innerHTML = "";
      	return true;
      }
      else
      	return false;
 }


/*var id = document.getElementById("nationalid");
var li_no = document.getElementById("licenseno");
var fname = document.getElementById("fname");
var lname = document.getElementById("lname");
var add1 = document.getElementById("add1");
var add2 = document.getElementById("add2");
var parish = document.getElementById("parish");*/


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
	


function newDriver(driver)
{
	
	var id = document.getElementById("nationalid").value;
	var li_no = document.getElementById("licenseno").value;
	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var add1 = document.getElementById("add1").value;
	var add2 = document.getElementById("add2").value;
	var parish = document.getElementById("parish").value;
	
if(isIdValid(id) == true && isLicenseValid(li_no) == true && isNameValid(fname) == true && isLNameValid(lname) == true && isAddressValid(add1) == true && (isAddress2Valid(add2) == true || isAddress2Valid(add2) == false))
	{
		console.log("Yay, new driver created");
		var driver = [{
		nationalId: id,
		licenseNo: li_no,
		firstName: fname,
		lastName: lname,
		adress1: add1,
		adress2: add2,
		parish: parish
		}];
	}
		var info = localStorage.getItem("driverInfo");

			info = JSON.parse(info);
			info.push(driver);

		let driverInfo = JSON.stringify(info);
            localStorage.setItem("driverInfo", driverInfo);

            console.log(localStorage);
}


function loadData()
{
  var driverArray = [
     {
        nationalId: "730209-3043",
        licenseNo: "135686819730209",
        firstName: "Andrew",
        lastName: "Pryor",
        address1: "31 ",
        address2: "Prior Park",
        parish: "St. James",
        username: "qwer1234",
        password:"andrewpryor123"
     },

     {
        nationalId: "671212-0404",
        licenseNo: "143647819671212",
        firstName: "Jennifer",
        surname: "Davis",
        address1: "Wavell Ave",
        address2: "Black Rock",
        parish: "St. Michael",
        username: "geju7593",
        password:"anoth3rpass"
   },

   {
      nationalId: "790422-1209",
      licenseNo: "100893419790422",
      firstName: "Anderson",
      surname: "Alleyne",
      address1: "Lascelles Terrace",
      address2: "The Pine",
      parish: "St. Michael",
      username: "oyqb4789",
      password:"thepassw0rd"
   }
  ]

  var employeeArray = [
   {
      employeeId: "545-700-593",
      firstName: "Merissa",
      lastName: "Halliwall",
      password:"f1rstpa55"
   },

   {
      employeeId: "090-728-221",
      firstName: "Terold",
      lastName: "Bostwick",
      password:"secur3acc3s5"
 },

 {
   employeeId: "147-830-662",
   firstName: "Vanda",
   lastName: "Marshall",
   password:"oll1p0ps"
 }
]

  //add to localStorage 
  if(!localStorage.getItem("driverInfo"))
  {
     localStorage.setItem("driverInfo", JSON.stringify(driverArray));
  }
  if(!localStorage.getItem("employeeinfo"))
  {
     localStorage.setItem("employeeinfo", JSON.stringify(employeeArray));
  }

}

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