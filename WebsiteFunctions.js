function doStuff(status){
	var bln = false;
	var table = document.getElementById("tbl");
	for (var i = 1, row; row = table.rows[i]; i++) {
		if((row.cells[5].innerHTML = "-")&&(bln==false)){
			row.cells[5].innerHTML=status;
			//row.cells[5].innerHTML=status;
				bln = true;
		}
   }  
  
}
