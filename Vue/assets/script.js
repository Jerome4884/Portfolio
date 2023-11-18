// Script carrousel
// définition de variables pour le fonctionnement du carrousel
var count = 0;
var timer, slidesWidth;

// récuperation des elmts
window.addEventListener("DOMContentLoaded", () => { 
    const carrousel = document.querySelector(".carrousel");
    var images = document.querySelector(".images");
    // création d'un tableau pour y mettre les img qui vont défiler
    var slides = Array.from(images.children);
    // permet de calculer la largeur de l'img visible
    slidesWidth = carrousel.getBoundingClientRect().width;

    var next = document.getElementById("next");
    var previous = document.getElementById("previous");

    // Ecouteurs d'evnmt sur les btns
    next.addEventListener("click", imgNext);
    previous.addEventListener("click", imgPrev);

    // Fonction pour le mvt des imgs vers la dte
    function imgNext(){
        // incrementation du compteur
        count++
        // condition quand le compteur arrive à la taille des slides (img)
        // on revient sur la position 0
        if (count == slides.length) {
            count = 0;
        }
        // Calcul de la largeur ?
        let widthImg = -slidesWidth * count;
        images.style.transform = `translateX(${widthImg}px)`; 

    }
    // fonction pour défilement vers la gch
    function imgPrev(){
        // décrementation du compteur
        count--
        if (count < 0) {
            count = slides.length -1;
        }
        // Calcul de la largeur ?
        // declaration variable pour calculer la largeur des slides (img)
        let widthImg = -slidesWidth * count;
        images.style.transform = `translateX(${widthImg}px)`; 
    }
    // automatisation
    timer = setInterval(imgNext, 3000);
    // declaration evenmt de la souris
    carrousel.addEventListener("mouseenter", stopp);
    carrousel.addEventListener("mouseleave", start);

    // fonction pour stopper le defilmnt
    function stopp(){
        clearInterval(timer);
    }

    // fonction pour relancer le defilmnt qd pointeur n'est plus sur l'element
    function start(){
        timer = setInterval(imgNext, 3000);
    }

    // Responsive
    window.addEventListener("resize", () => {
        slidesWidth = carrousel.getBoundingClientRect().width;
        imgNext();
    })
});
// Fin script carrousel

// Script Menu Burger

// const menu = document.querySelector('.menu');
// const openMenu = document.querySelector('#open-menu');
// const btn = document.querySelector('.btn');

// openMenu.classList.add('hidden');
// openMenu.style.transition = 'all 2s linear';

// function open() {
//     btn.addEventListener('click', () => {
//         burgerMenu.style.display = 'block';
//         burgerMenu.classList.add('visible');
//         openMenu.style.display = 'none';
//     }
// )}
// open();

// Fin script Burger

// Script Btn return top

document.addEventListener('DOMContentLoaded', function() {
    const btnTop = document.querySelector(".btnTop");
    // btnTop.style.display = 'none';
    btnTop.classList.add('hidden');
    btnTop.style.transition = 'all 2s linear';
    
    function scroll() {
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
    
            if (scrollY > 800) {
                // btnTop.style.display = 'block';
                btnTop.classList.remove('hidden');
            } else {
                // btnTop.style.display = 'none';
                btnTop.classList.add('hidden');
            }
        })
    }
    
    scroll();
    
})

// Fin Script Btn return top

// script fr/en
// Declaration pour recuperer les elements
const langFra = [];
const langEng = [];
const acceuil = document.querySelector(".accueil");
const projets = document.querySelector(".projets");
const contact = document.querySelector(".contact");
// const pView = document.querySelector(".pView");
const frFlag = document.querySelector(".fflag");
const enFlag = document.querySelector(".flag");
const h = document.querySelector("#Tun");
const a = document.querySelector("a");
const p1 = document.querySelector("#PHun");
const resume = document.querySelector("#presentation");
const pStack = document.querySelector("#pStack");
const tGalerie = document.querySelector("#tGalerie");
const pGalerie = document.querySelector("#pGalerie");
const aProjet = document.querySelector("#aProjet");
const tMail = document.querySelector("#tMail");
const pContact = document.querySelector("#pContact");
const p2Contact = document.querySelector("#p2Contact");
const tTel = document.querySelector("#tTel");
const pFooter = document.querySelector("#pFooter");

// Permet de changer la langue
function changeLang(lang) {
    if (lang === 'en') {
        acceuil.innerHTML = "Home";
        projets.innerHTML = "Projects";
        contact.innerHTML = "Contact";
        // pView.innerHTML = "The technologies used are";
        p1.innerHTML = "I'm a junior full-stack developer";
        h.innerHTML = "To find out more";
        resume.innerHTML = "I'm a web developer who started his career change in 2021 and has been pursuing it since October 2022.<br> IT was a curiosity, it's now a passion, especially on the back-end development and programming side. This curiosity drives me to keep learning, and my thirst for knowledge is more than satisfied in this constantly evolving field. I'm interested in cybersecurity, blockchain and AI as a whole. My 10-week internship with Aegis-Civis Groupe in 2023 gave me a deeper insight into the various aspects of cybersecurity. My training as a web and mobile web developer came to an end at the end of August 2023, and I was awarded my diploma, attesting to the skills I had acquired. During my training, I developed skills in front-end and back-end development, communicating with APIs, implementing relational databases and using frameworks such as symfony. I'm starting to learn Java. The intermediate mode is now loading. Thank you for taking the time to read these few lines about me.";
        pStack.innerHTML = "My technical skills";
        tGalerie.innerHTML = "Gallery";
        pGalerie.innerHTML = "Here are some of achievements";
        aProjet.innerHTML = "To see the achievements";
        tMail.innerHTML = "My e-mail";
        pContact.innerHTML = "You can contact me by clicking here";
        p2Contact.innerHTML = "You can contact me by clicking here";
        tTel.innerHTML = "My phone number";
        pFooter.innerHTML = "Designed by JérômeM || all rights reserved © 2023"; 

    } else if (lang === 'fr') {
        acceuil.innerHTML = "Accueil";
        projets.innerHTML = "Projets";
        contact.innerHTML = "Contact";
        p1.innerHTML = "Je suis un développeur full-stack junior";
        h.innerHTML = "Pour en savoir un peu plus";
        resume.innerHTML = "Je suis un développeur web qui a initié sa reconversion en 2021 et qui la poursuit depuis le mois d'octobre 2022. \n L'IT était une curiosité, c'est maintenant une passion, surtout sur la partie développement back-end et programmation. Cette curiosité me pousse à toujours apprendre, ma soif de savoir est plus que comblée dans ce domaine qui ne cesse d'évoluer. J'ai un attrait pour la cybersécurité, la blockchain et l'IA dans son ensemble. \n Mon stage de 10 semaines effectué chez Aegis-Civis groupe en 2023 m'a permis de découvrir plus en profondeur les différents aspects de la cybersécurité. Ma formation de développeur web et web mobile s'est terminée fin Août 2023 et j'ai obtenu mon titre ce qui atteste des compétences acquises. Au cours de ma formation, j'ai développé des compétences en développement front-end et back-end, en communication avec des API, en implémentation de bases de données relationnelles et en utilisation de frameworks, comme symfony. Je commence à apprendre le Java. \n Le mode intermédiaire est en cours de chargement. \n Merci d'avoir pris le temps de lire ces quelques lignes me concernant."
        pStack.innerHTML = "Mon stack technique";
        tGalerie.innerHTML = "Galerie";
        pGalerie.innerHTML = "Voici des réalisations effectuées";
        aProjet.innerHTML = "Pour voir les réalisations";
        tMail.innerHTML = "Mon e-mail";
        pContact.innerHTML = "Vous pouvez me contacter en cliquant dessus";
        p2Contact.innerHTML = "Vous pouvez me contacter en cliquant dessus";
        tTel.innerHTML = "Mon numéro de téléphone";
        pFooter.innerHTML = "Réalisé par JérômeM || tous droits réservés © 2023";
    }
}
// ajoute un declencheur sur le btn en pour changer la langue
   enFlag.addEventListener('click', () => {
    // localStorage permet de sauvegarder l'evenmt (ici la lang) en mémoir du navigateur
        localStorage.setItem('lang', 'en');
        //appel de la fonction pour afficher le contenu en en
            changeLang('en');        
    });
    
// ajoute un declencheur sur le btn en pour changer la langue
    frFlag.addEventListener('click', () => {
        localStorage.setItem('lang', 'fr');
                //appel de la fonction pour afficher le contenu en en
            changeLang('fr');
    }); 

// Ajoute un evnmt a tout rechargement de la page afin que la lang choisi reste,
document.addEventListener('DOMContentLoaded', () => {
    const selectedLang = localStorage.getItem('lang');
    if (selectedLang === 'en') {
        // Si la langue sélectionnée est l'anglais ('en'), appelle la fonction pour changer la langue vers l'anglais
        changeLang('en');
    } else {
        changeLang('fr');
    }
});         

if (lang === 'fr') {
    var id = 'fr';
} else {
    
}
// fin script fr/en