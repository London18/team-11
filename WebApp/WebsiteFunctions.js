function doStuff(status){
	
	alert("hello");
	var bln = false;
	var table = document.getElementById("tbl");
	for (var i = 1, row; row = table.rows[i]; i++) {
		var rowt = row.cells[5].innerHTML;
		if((rowt === "-")&&(bln===false)){
				row.cells[5].innerHTML=status;
				bln = true;
		
		}
	}
}
