const express = require('express');
const path = require('path');
const  fileupload = require('express-fileupload');
var cors = require('cors');

let initial_path = path.join(__dirname, "public");

const app = express();
app.use(express.static(initial_path));
app.use(fileupload());
app.use(cors());
const corsOpts = {
    origin: '*',
  
    methods: [
      'GET',
      'POST',
    ],
  
    allowedHeaders: [
      'Content-Type',
    ],
  };
  
  app.use(cors(corsOpts));


app.get('/', (req, res) => {
    res.sendFile(path.join(initial_path, "home.html"));
    
})


app.get('/editor', (req, res)=>{
    res.sendFile(path.join(initial_path, "editor.html"));
})



// app.get('/getData', (req, res)=>{
//     res.send('This is Backend');
// })

//upload link
app.post('/getData', (req, res) => {

    let file= req.files.image;
    let date = new Date();
    //image name
    let imagename = date.getDate() + date.getTime() + file.name;
    //image upload path
    let path = 'public/uploads/'+imagename;

    //create upload

    file.mv(path, (err, result) => {
        if(err){
            throw err;
        }else{
            //our image upload path
            res.json(`uploads/${imagename}`);
        }
    })
})

app.get("/admin", (req, res) =>{
    res.sendFile(path.join(initial_path, "dashboard.html"));
})


app.get("/:blog", (req, res) =>{
    res.sendFile(path.join(initial_path, "blog.html"));
})

app.get("/:blog/editor", (req, res) =>{
    res.sendFile(path.join(initial_path, "editor.html"));
})

app.use((req,res) => {
    res.json("404");
})
app.listen("3000", () => {
    console.log('listening.....');
})