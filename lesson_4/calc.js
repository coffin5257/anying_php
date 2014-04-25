function calc () {
	var a = document.getElementById('a').value;
	a = Number(a);
	var b = document.getElementById('b').value;
	b = Number(b);
	var op = document.getElementById('select').selectedIndex;
	//alert(op);
	
	if(op=='0'){
		var c = a + b;
	}
	else if(op==1){
		var c = a - b;
	}
	else if(op==2){
		var c = a * b;
	}
	else if(op==3){
		var c = a / b;
	}
		
	var result = document.getElementById('result');
	result.value = c;
}