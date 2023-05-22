const api_url="https://randomuser.me/api/";
async function getUser(divName,divEmail,divImage,divAge,divPhone,divLocation){
    const response= await fetch(api_url);

    const data= await response.json();
    
    const user = data.results[0];
    let{title,first,last}=user.name;
    let {gender,email,phone }= user;
    let image = user.picture.large;
    let age = user.dob.age;
    let {city,state,country} = user.location;

    let fullname = title+ ". " + first +last;
    
    divAge.innerText = age;
    divPhone.innerText = phone;
    divLocation.innerText = city +", " +state+", " +country;
    divName.innerText=fullname;
    divEmail.innerText=email;
    let img = document.createElement("img");
    
    
    img.src=image;
    img.classList.add("img-fluid");
    divImage.replaceChild(img,divImage.childNodes[0]);
}
userImage = document.getElementsByClassName("userImage");
userName = document.getElementsByClassName("userName");
userMail = document.getElementsByClassName("userMail");
userAge= document.getElementsByClassName("userAge");
userPhone = document.getElementsByClassName("userPhone");
userLocation = document.getElementsByClassName("userLocation");



for(let i=0;i<3;i++){
    getUser(userName[i],userMail[i],userImage[i],userAge[i],userPhone[i],userLocation[i]);
}

let intervalId = window.setInterval(function(){
    for(let i=0;i<3;i++){
        getUser(userName[i],userMail[i],userImage[i],userAge[i],userPhone[i],userLocation[i]);
    }
},10000);
