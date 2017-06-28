var ref;

function setup(){
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

  ref = database.ref('users');


  var btn = select('#submit');
  btn.mousePressed(check_Data);
}

function check_Data(){
  var username = select('#username');
  var password = select('#password');
    ref.on('value', gotData, errData);
}

function gotData(data){
  console.log(data.val());
  var users = data.val();
  var keys = Object.keys(data.val());
  console.log(keys);
  for(var i = 0; i < keys.length; i++)
    if(users[keys[i]].username == username.value && users[keys[i]].password == password.value)
      window.location.replace("biblioteca.html");
}

function errData(err){
  console.error("Connection failed");
  console.error(err);
}
