const form = document.querySelector('.form_event');
const button = form.querySelector("input[name='createEvent']")
const email = form.querySelector("input[name='mail']")
const regexEmail = /^((?!\.)[\w-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/gim;
const message = form.querySelector('.message');

button.addEventListener('click', (e) => {
    checkEmail(e);
    
    RequeteEmail();
})


function checkEmail(e) {
    e.preventDefault();
    // modification du border  de l'input email
    email.style.border = '1px solid #C34537';
    email.style.borderRadius = '2px';
    //  le  premier élément  ayant la classe   message  appliqué  la   variable de couleur
    message.style.color = 'var(--color-alert)'
    // si la  longueur de  la valeur de l'input email  est égal à zéro 
    if (email.value.length == 0) {
        // fonction qui permet  d'interrompre  le chargement de la page(comportement par defaut du navigateur) 
        //suite   à l'envoie du formulaire 
        
        message.classList.remove('hidden');
        message.style.color = 'var(--color-erreur)';
        // ajout de  texte dans le paragraphe 
        message.textContent = ' Ce champ est requis.';
    }
    else {
        // vérifie si   la  valeur de l 'input  correspond aux critéres du regex 
        if (email.value.match(regexEmail) == null) {
           
            message.classList.remove('hidden');
            message.style.color = 'var(--color-erreur)';
            message.textContent = " Email non valide";
        }
        else {
            message.classList.add('hidden');
            email.style.border = '1px solid #798C73';
            message.textContent = "";
        }
    }
}

async function RequeteEmail()
{
    const formData = new FormData(form);
    const url = "/event/requete";
    const myInit = {
        method: 'POST',
        body: formData ,
    };
    await fetch(url, myInit)
       
    
}