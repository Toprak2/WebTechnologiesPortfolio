function ValidateForm(){
    let email = document.form.email.value;
    let name = document.form.name.value;
    let surname = document.form.surname.value;
    let like = document.form.like.value;
    let opinion = document.form.opinion.value;
    let mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    if(!email.match(mailFormat)){
        alert("Lütfen doğru mail adresi giriniz.");
        return false;
    }
    if(name==""){
        alert("Lütfen isim giriniz");
        return false;
    }
    if(surname==""){
        alert("lütfen soyisim giriniz");
        return false;
    }
    if(opinion==""){
        alert("lütfen açıklama giriniz");
        return false;
    }
    
    
}
