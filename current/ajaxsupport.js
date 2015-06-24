//AJAX Asyncrounous Javscript and XML

<script>
function ajaxRequest()
{
	try { //non-IE browser
		var request = new XMLHttpRequest()
		}
	catch(e1)
	{	
		try
		{ // ie broswer then 
		request = new ActiveXObject("Msxml12.XMLHTTP")
		}
	catch(e2)
	{    
		try {( // doesnt support 1.6, so 1.5 maybe
		request = new ActiveXObject("Microsoft.XMLHTTP")
		}
	catch(e3)
		{ // javascript off or no AJAX support?
		request = false
		}
	}
	}
return request
}


	
		
		
		
		