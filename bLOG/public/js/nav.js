let ul = document.querySelector('.links-container');

auth.onAuthStateChanged((user) => {
    if(user){
            //user is loggin
            ul.innerHTML += `<li class="link-item"><a href="https://localhost/F_LMS/eLMS/bLOG/admin" class="link">Dashboard</a></li>
            <li class="link-item"><a href="#" onclick= "logoutUser()" class="link">Logout</a></li>`
           
    }else{
            //no one is loggin in 
            ul.innerHTML += `<li class="link-item"><a href="https://localhost/F_LMS/eLMS/bLOG/admin" class="link">Login</a></li>`
    }
    
})