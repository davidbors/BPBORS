var params;

function setup() {
    // Initialize Firebase
    //config of the firebase
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
    params = getURLParams();
    /*  console.log(params.by);
      console.log(params.q);
      console.log(params.limit);
      console.log(params.key); */

}

function create_page(){
  console.log('IT WOOORKS!!!');
}

function gotData(data) {
    //console.log(data.val());
    if (params.key == '7t74ZMd4Thy8G5q0y0LDVL75C7os1a0z') {
        params = getURLParams();
        posq = params.q;
        console.log("Key is correct!");
        console.log(data.val());
        var books = data.val();
        var keys = Object.keys(data.val());
        console.log(keys);
        if(keys.length > 0) {
            console.log("GotData!");
            for(var i = 0; i < keys.length; i++){
                if(books[keys[i]].position == posq){
                console.log(books[keys[i]]);
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
                aan.parent(div);}
            }
        } else {
            console.log("No data!")
        }
    //console.log(keys);
} else {
    console.error("Roaga-l pe Berzelius sa-ti dea cheia!");
    createP("Roaga-l pe Berzelius sa-ti dea cheia!");
}
}

function errData(err) {
    console.log('error');
    console.log(err);
}
