let firebaseConfig = {
    apiKey: "AIzaSyCtCCUhenPQgqA685KFIq33X-BMtXt6rqI",
    authDomain: "elms-bca.firebaseapp.com",
    // The value of `databaseURL` depends on the location of the database
    // databaseURL: "https://DATABASE_NAME.firebaseio.com",
    projectId: "elms-bca",
    storageBucket: "elms-bca.appspot.com",
    messagingSenderId: "118820860119",
    appId: "1:118820860119:web:b0dad4d9d15872bff18092",
    // For Firebase JavaScript SDK v7.20.0 and later, `measurementId` is an optional field
  };

  firebase.initializeApp(firebaseConfig);

  let db = firebase.firestore();
  let auth = firebase.auth();

  const logoutUser = () =>{
    auth.signOut();
    location.reload();
  }