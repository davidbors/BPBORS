var database;
var ref;

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
    //reference to the spec object
    ref = database.ref('books');
    console.log(firebase);

    var sbtn = createButton('Submit').addClass('input');
    sbtn.mousePressed(sendData); 
}

//sending the data to the parent object
function sendData() {
  //getting the data
    var data = {
        titlu: document.getElementById("title").value,
        autor: document.getElementById("autor").value,
        editura: document.getElementById("editura").value,
        an: document.getElementById("an").value,
        position: document.getElementById("position").value,
        gen: document.getElementById("gen").value
    }
    //pushing the data
    ref.push(data);
    //alert user
    alert('Cartea a fost adaugata cu succes!');
}

function draw() {}
