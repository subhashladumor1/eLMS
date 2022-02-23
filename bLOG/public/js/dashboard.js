let ui = new firebaseui.auth.AuthUI(auth);
let login = document.querySelector('.login');
const blogSection = document.querySelector('.blogs-section');


auth.onAuthStateChanged((user) =>{ //checking user is login or not 
    if(user){
       
        // location.reload();
        login.style.display = "none";
        getUserWrittenBlogs();
    }else{
        setupLoginButton();
    }
})

const setupLoginButton = () =>{
    ui.start("#loginUI", {
        callbacks:{
            signInSuccessWithAuthResult: function(authResult, redirectURL){
                login.style.display = "none";
                console.log(authResult);
                return false;
            }
        },
        signInFlow: "popup", //what you get signin method
        signInOptions: [firebase.auth.GoogleAuthProvider.PROVIDER_ID]
    })
}


//fetch user written blogs

// console.log("calling blogs");

const getUserWrittenBlogs = () => {
    // console.log("called blogs");
    db.collection("bca").where("author", "==", auth.currentUser.email.split('@')[0])
    .get()
    .then((bca)=>{
        console.log("then in side");
        bca.forEach((blog) =>{
            // console.log(blog);
            createBlog(blog);
            
        })
    })
    .catch((error)=> {
        console.log("Error Getting Blogs");
    })
}

const createBlog = (blog) => {
    let data = blog.data();
    blogSection.innerHTML += `
    <div class="blog-card">
        <img src="${data.bannerImage}" class="blog-image" alt="">
        <h1 class="blog-title">${data.title.substring(0,100)+ '...'}</h1>
        <p class="blog-overview">${data.article.substring(0,200)+ '...'}</p>
        <a href="https://localhost/F_LMS/eLMS/bLOG/${blog.id}" class="btn dark">read</a>
        <a href="https://localhost/F_LMS/eLMS/bLOG/${blog.id}/editor" class="btn grey">edit</a>
        <a href="#" onclick="deleteBlog('${blog.id}')" class="btn danger">delete</a>
    </div>`;
    login.style.display = "none";
    
}

const deleteBlog = (id) => {
    db.collection("bca").doc(id).delete().then(() => {
        location.reload();
    })
    .catch((error) => {
        console.log("Error Deleting the Blog");
    })
}

