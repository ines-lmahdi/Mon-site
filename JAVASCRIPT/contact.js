const formulaireInfo = document.getElementById("#formulaire");
formulaireInfo.addEventListener("submit", function(event){
    event.preventDefault();
})

const avis ={
    nom: event.target.querySelector("[name=user_name]").value,
    mail:event.target.querySelector("[name=user_mail]").value,
    commentaire: event.target.querySelector("[name=user_message]").value,

};

const chargeUtile = JSON.stringify(avis)

fetch("http://127.0.0.1:5500/HTML/contact.html",{
    method:"GET",
    headers: { "Content-Type": "application/json" },
    body:chargeUtile
});