//**************************************
//**                                  **
//** Author: Jonathan Pirca           **
//** Created: Nov 10, 2018            **
//** Module: HTML / CSS / JS / PHP    **
//** Assignment: Individual Project 1 **
//**                                  **
//************************************** 

function validateCust()
{
	if (document.forms[0].fName.value == "")
	{
		alert("First name must have a value");
		document.forms[0].fName.focus();
		document.forms[0].fName.style.backgroundColor = "lightyellow";
		return false;
	}
	
	if (document.forms[0].lName.value == "")
	{
		alert("Last name must have a value");
		document.forms[0].lName.focus();
		document.forms[0].lName.style.backgroundColor = "lightyellow";
		return false;
	}
	if (document.forms[0].address.value == "")
	{
		alert("Address must have a value");
		document.forms[0].address.focus();
		document.forms[0].address.style.backgroundColor = "lightyellow";
		return false;
	}
	if (document.forms[0].city.value == "")
	{
		alert("City must have a value");
		document.forms[0].city.focus();
		document.forms[0].city.style.backgroundColor = "lightyellow";
		return false;
	}
	if (document.forms[0].province.value == 0)
	{
		alert("You have to select a Province");
		document.forms[0].province.focus();
		document.forms[0].province.style.backgroundColor = "lightyellow";
		return false;
	}
	if (document.forms[0].postalC.value == "")
	{
		alert("Postal Code can not be empty");
		document.forms[0].postalC.focus();
		document.forms[0].postalC.style.backgroundColor = "lightyellow";
		return false;
	}
	//validate Postal Code Format
	postalCodeExp = /^[a-zA-Z]\d[a-zA-Z] ?\d[a-zA-Z]\d$/;
	var valPostalCode = postalCodeExp.exec(document.forms[0].postalC.value);
	if (!valPostalCode)
	{
		alert("Postal Code does not have the right format \"T3T 1P1\"");
		document.forms[0].postalC.focus();
		document.forms[0].postalC.style.backgroundColor = "lightyellow";
		return false;
	}
	
	if (document.forms[0].country.value == "")
	{
		alert("Contry can not be empty");
		document.forms[0].country.focus();
		document.forms[0].country.style.backgroundColor = "lightyellow";
		return false;
	}
	
	if (document.forms[0].hPhone.value == "")
	{
		alert("Home Phone can not be empty");
		document.forms[0].hPhone.focus();
		document.forms[0].hPhone.style.backgroundColor = "lightyellow";
		return false;
	}
	if (document.forms[0].bPhone.value == "")
	{
		alert("Bus Phone can not be empty");
		document.forms[0].bPhone.focus();
		document.forms[0].bPhone.style.backgroundColor = "lightyellow";
		return false;
	}
	if (document.forms[0].email.value == "")
	{
		alert("Email can not be empty");
		document.forms[0].email.focus();
		document.forms[0].email.style.backgroundColor = "lightyellow";
		return false;
	}
	
	// Validate email format

	emailExp = /^[a-zA-Z][a-zA-Z0-9.-_]{4,15}@[a-zA-Z][a-zA-Z0-9\.]+[a-zA-Z]{2,4}$/;
	var valEmail =  emailExp.exec(document.forms[0].email.value);
	if (!valEmail)
	{
		alert("Email does not have the right format");
		document.forms[0].email.focus();
		document.forms[0].email.style.backgroundColor = "lightyellow";
		return false;
	}
	if (document.forms[0].login.value == "")
	{
		alert("Login can not be empty");
		document.forms[0].login.focus();
		document.forms[0].login.style.backgroundColor = "lightyellow";
		return false;
	}
	if (document.forms[0].password.value == "")
	{
		alert("Password can not be empty");
		document.forms[0].password.focus();
		document.forms[0].password.style.backgroundColor = "lightyellow";
		return false;
	}
	if (document.forms[0].agent.value == 0)
	{
		alert("Agent can not be empty");
		document.forms[0].agent.focus();
		document.forms[0].agent.style.backgroundColor = "lightyellow";
		return false;
	}

	var conf = confirm("Do you want to continue with the submitting?");
	
	if (conf)
	{
		document.getElementById("myProgress").style.display = "block";
		document.getElementById("main").style.display = "none";
		
		setInterval(move(),1000);
		setTimeout(sleep(100000),100000);
		document.form[0].submit();
		return true;

		
	}
	else
	{
		return false;
	}
	
	return false;
	
}

function sleep(milliseconds) 
{
	
	var start = new Date().getTime();
	for (var i = 0; i < 1e7; i++) 
	{
		if ((new Date().getTime() - start) > milliseconds)
		{
			break;
		}
	}
}

function emptyColor(elem)
{
	elem.style.backgroundColor = "white";
}
function move()
{
	var elem = document.getElementById("myBar");   
	var width = 1;
	var id = setInterval(frame, 10);
	
	function frame() 
	{
		if (width >= 100) 
		{
			clearInterval(id);
		} 
		else 
		{
			width++; 
			elem.style.width = width + '%'; 
		}
		
		
	}
	
}

function preLoad()
{
		// Pre-load all fields for testing purpose
		
		document.forms[0].fName.value = "Jhon";
		document.forms[0].lName.value = "Smith";
		document.forms[0].phone.value = "(403) 123-4567";
		document.forms[0].email.value = "jsmith@gmail.com";
		document.forms[0].password.value = "abcd1234";
		document.forms[0].postalC.value = "T2T 1F4";
		document.forms[0].pass.value = "pepe";
		document.forms[0].dest.options[1].selected = true;
		document.forms[0].plan.options[1].selected = true;
		
		document.getElementById("myProgress").style.display = "none";
}

// Function to change the IMG src 
function openGift() 
{
	var x = document.getElementById("gift1").src;
	var n = x.search("gift.jpg");
	
	if (n== -1)
	{
		var myWindow = window.open("https://en.wikipedia.org/wiki/Margarita_Island", "myWindow");
		setTimeout(function(){ myWindow.close() }, 5000);
	}
	else
	{
		document.getElementById("gift1").src = "images/islamargarita.jpg";
		var element = document.getElementById("offerText");
		element.innerHTML = "Margarita Island 2x1 - Clic over the picture to know more about Margarita";
	}
/*
	if (x == "http://localhost/OOSD210/HTML5V2/images/gift.jpg")
	{
		document.getElementById("gift1").src = "images/islamargarita.jpg";
		var element = document.getElementById("offerText");
		element.innerHTML = "Margarita Island 2x1 - Clic over the picture to know more about Margarita";
	}
	if (x == "http://localhost/OOSD210/HTML5V2/images/islamargarita.jpg")
	{
		var myWindow = window.open("https://en.wikipedia.org/wiki/Margarita_Island", "myWindow");
		setTimeout(function(){ myWindow.close() }, 5000);
	}
*/
}

// Function to open an external page and close it after 5 seg
function openExternalPage(page) 
{
    var myWindow = window.open(page, "myWindow");
    setTimeout(function(){ myWindow.close() }, 5000);
}