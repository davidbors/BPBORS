var q;
var by;
var found;
function setup() {
	params = getURLParams();
	q = params.q;
	by = params.by;
	console.log(q);
	console.log(by);
	var config = {
        apiKey: "AIzaSyDVYQcD7hJ3k80nLE5_23Ni01sUI5WPP2c",
        authDomain: "bpbors.firebaseapp.com",
        databaseURL: "https://bpbors.firebaseio.com",
        storageBucket: "bpbors.appspot.com",
        messagingSenderId: "816285883491"
    };
    //actual init
    firebase.initializeApp(config);

    //acces to db
    database = firebase.database();

    var ref = database.ref('books');
    ref.on('value', gotData, errData);
}

function gotData(data){
	console.log(data.val());
        var books = data.val();
        var keys = Object.keys(data.val());
        console.log(keys);
        if(by == "ttl"){
        if(keys.length > 0) {
            console.log("GotData!");
            for(var i = 0; i < keys.length; i++){
                if(books[keys[i]].titlu == q){
                	found = 1;
                	book = books[keys[i]];
                title = book.titlu;
                poz = book.position;
                gen = book.gen;
                edt = book.editura;
                ath = book.autor;
                an = book.an;
                ttl = createP(title);
                pz = createP(poz);
                gn = createP(gen);
                et = createP(edt);
                ah = createP(ath);
                aan = createP(an);
                div = createDiv('');
                div.addClass('search_result');
                ttl.addClass('titlu');
                pz.addClass('centered');
                gn.addClass('centered');
                et.addClass('centered');
                ah.addClass('centered');
                aan.addClass('centered');
                ttl.parent(div);
                pz.parent(div);
                gn.parent(div);
                et.parent(div);
                ah.parent(div);
                aan.parent(div);
                }
            }
        }
        if(!found) createP("Berzelius nu a gasit nimic! :("); 
    } else {
         if(keys.length > 0) {
            console.log("GotData!");
            for(var i = 0; i < keys.length; i++){
                if(books[keys[i]].autor == q){
                	found = 1;
                	book = books[keys[i]];
                title = book.titlu;
                poz = book.position;
                gen = book.gen;
                edt = book.editura;
                ath = book.autor;
                an = book.an;
                ttl = createP(title);
                pz = createP(poz);
                gn = createP(gen);
                et = createP(edt);
                ah = createP(ath);
                aan = createP(an);
                div = createDiv('');
                div.addClass('search_result');
                ttl.addClass('titlu');
                pz.addClass('centered');
                gn.addClass('centered');
                et.addClass('centered');
                ah.addClass('centered');
                aan.addClass('centered');
                ttl.parent(div);
                pz.parent(div);
                gn.parent(div);
                et.parent(div);
                ah.parent(div);
                aan.parent(div);
                }
            }
        } 
       	if(!found) createP("Berzelius nu a gasit nimic! :(");  	
    }
}

function errData(err) {
    console.log('error');
    console.log(err);
}