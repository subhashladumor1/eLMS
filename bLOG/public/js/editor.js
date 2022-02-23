const blogTitleField = document.querySelector('.title');
const articleField = document.querySelector('.article');

//banner
const bannerImage = document.querySelector('#banner-upload');
const banner = document.querySelector(".banner");
let bannerPath;

const publishBtn = document.querySelector('.publish-btn');
const uploadInput = document.querySelector('#image-upload');

bannerImage.addEventListener('change', () => {
    uploadImage(bannerImage, "banner");
})


uploadInput.addEventListener('change', () => {
    uploadImage(uploadInput, "image");
})

const uploadImage = (uploadFile, uploadType) => {
    const [file] = uploadFile.files;
    if (file && file.type.includes("image")) {
        const formdata = new FormData();
        formdata.append('image', file);

        fetch('http://localhost:3000/getData', {
            method: 'post',
            body: formdata
        }).then(res => res.json())
            .then(data => {
                if (uploadType == "image") {
                    addImage(data, file.name);
                } else {
                    bannerPath = `http://localhost:3000/${data}`;
                    banner.style.backgroundImage = `url("${bannerPath}")`;
                }

            })
    } else {
        alert("upload Image only");
    }
}

const addImage = (imagepath, alt) => {
    let curPos = articleField.selectionStart;
    let textToInsert = `\r![${alt}](${imagepath})\r`;
    articleField.value = articleField.value.slice(0, curPos) + textToInsert + articleField.value.slice(curPos);
}

let months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

publishBtn.addEventListener('click', () => {
    if (articleField.value.length && blogTitleField.value.length) {
        let docName; //Variable docName
        if (blogID[3] == 'editor') {
            //generating id 
            // alert("editor.js : click if blogID[3] == editor "+blogID[3]);
            let letters = 'abcdefghijklmnopqrstuvwxyz';
            let blogTitle = blogTitleField.value.split(" ").join("-");
            let id = '';
            for (let i = 0; i < 4; i++) {
                id += letters[Math.floor(Math.random() * letters.length)];
            }
            let docName= `${blogTitle}-${id}`;
        }else{
            
            docName = decodeURI(blogID[3]);
            // alert("editor.js: else decodeURI = editor "+ decodeURI(blogID[3]));
        }



        //seting up docName
       
        let date = new Date(); //for published at info


        //access firestore with db variable

        db.collection("bca").doc(docName).set({
            title: blogTitleField.value,
            article: articleField.value,
            bannerImage: bannerPath,
            publishedAt: `${date.getDate()} ${months[date.getMonth()]} ${date.getFullYear()}`,
            author: auth.currentUser.email.split("@")[0] //this will return email e.g subhash@gmail.com then add split("@") function convert => ["subhash", "gmail.com"] then select [0] the out is => "subhash"
        })
            .then(() => {
                location.href = `https://localhost/F_LMS/eLMS/bLOG/${docName}`; //http:localhost:3000/
            })
            .catch((err) => {
                console.error(err);
            })
    }
})

//checking for user logged in or not 
auth.onAuthStateChanged((user) => {
    if (!user) {
        location.replace("https://localhost/F_LMS/eLMS/bLOG/admin"); //this will re-direct to admin route if no one is logged in.
    }
})

//checking for existing blog edits

let blogID = location.pathname.split("/");


blogID.shift(); //remove first item in a array beacuse first item is empty in Array

if (blogID[3] != "editor") { //checking exiting blog is route or not
    //means we are in existing blog edit route
    // alert("editor.js if blogID[3]!= editor "+blogID[3]);
    let docRef = db.collection("bca").doc(decodeURI(blogID[3]));
    console.log("Connected DB")
    docRef.get().then((doc) => {
        if (doc.exists) {
            // console.log(doc.data());
            let data = doc.data();
            bannerPath = data.bannerImage;
            banner.style.backgroundImage = `url(${bannerPath})`;
            blogTitleField.value = data.title;
            articleField.value = data.article;
        } else {
            // location.replace("https://localhost/F_LMS/eLMS/bLOG/"); //redirect Home Page
        }
    })
} 