var contactForm = document.getElementById('contactForm');

contactForm.addEventListener('submit',function (event){

    var mobileNumber = document.getElementById('mobileNumber').value;
    var fullname = document.getElementById('fullname').value;
    var email = document.getElementById('email').value;
    var re = /\S+@\S+\.\S+/;
    var shirkadaha = ['90', '61', '66', '63'] ;
    var Warqado = /\b(\w+)\s+\1\b/i;
    var tirooyinka = /\d/;


    if(fullname.trim() == ""){
        event.preventDefault();
        return alert("Magac buuxa ayaa loo baahan yahay");
    }


    if (tirooyinka.test(fullname)) {
        event.preventDefault();
        alert("Magaca buuxa kuma jiri karo tirooyin.");
        return;
    }
 
    if (fullname.trim().split(" ").length < 3) {
        event.preventDefault();
        return alert("At least sadex magac soo qor.");
    }
    if (fullname.replace(/\s+/g, ' ').split(" ").length < 3) {
        event.preventDefault();
        alert("At least three names are required.");
        return;
    }

    if (Warqado.test(fullname)) {
        event.preventDefault();
        alert("Magaca buuxa kuma jiri karo erayo ama xarfo soo noqnoqda(e.g., 'c c c').");
        return;
    }

    if  ( re.test(email)  == false){
        event.preventDefault();
        return alert("Fadlan email is needed.");
    }

    if (shirkadaha.some(code =>  mobileNumber.startsWith(code)) == false){
        event.preventDefault();
        return alert("Mobile number must be Golis, Hormuud, Somtel, Telesom!.");
    }

    if  (mobileNumber.trim("").length < 9 || mobileNumber.trim("").length > 9 ){
        event.preventDefault();
        return alert("Mobile number must be 9 digit only");
    }
});