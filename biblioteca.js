function setup() {
	sbmt = select("#sbmt");
	//sbmt = createButton('Search!');
	inpt = select('#inpt');
	atr = select('#atr');
	ttl = select('#ttl');
	sbmt.mousePressed(sbm);
}

function sbm(){
	q = inpt.elt.value;
	if(atr.elt.checked) {
		by = 'atr';
	} else {
		by = 'ttl';
	}
	link = "/hermelina.html?q=" + q + "&&by=" + by;
	rooot = "file:///D:/MAMP/htdocs/bpbors - Backup"
	console.log(rooot + link);
	window.location.href = rooot + link;
}