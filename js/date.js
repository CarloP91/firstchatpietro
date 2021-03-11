
	window.onload = setInterval(Orologio,1000);
	function addZero(i) {
		if (i < 10) {
			i = "0" + i;
		}
		return i;
	}
	function Orologio()
	{
		var d = new Date();
		var date = d.getDate();
		var ora = addZero(d.getHours());
		var min = addZero(d.getMinutes());
		var sec = addZero(d.getSeconds());
		document.getElementById("orologio").innerHTML=" | "+ora+":"+min+":"+sec;
	}


	var dateObj = new Date();
	var month = ('0' + (dateObj.getMonth() + 1)).slice(-2);
	var date = ('0' + dateObj.getDate()).slice(-2);
	var year = dateObj.getFullYear();
	var shortDate = date + '/' + month + '/' + year;
	document.getElementById("data").innerHTML=shortDate;
