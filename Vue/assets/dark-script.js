// const toggleBtn = document.getElementsByClassName('toggleBtn');
// const body = document.querySelector('body');
// const h1 = document.querySelector('h1');
// const h3 = document.querySelector('h3');
// const p = document.querySelector('p');
// const a = document.querySelector('a');

// let darkMode = localStorage.getItem("dark-mode");

// const enableDarkMode=() => {
//     body.classList.add("dark-mode-theme");
//     toggleBtn.classList.add("dark-mode-toggle");
//     h1.innerHTML = "sombre";
//     h3.innerHTML = "sombre";
//     p.innerHTML = "sombre";
//     a.innerHTML = "sombre";
//     localStorage.setItem("dark-mode" , "enabled")
// }

// const disableDarkMode=() => {
//     body.classList.remove("dark-mode-theme");
//     toggleBtn.classList.remove("dark-mode-toggle");
//     h1.innerHTML = "claire";
//     h3.innerHTML = "claire";
//     p.innerHTML = "claire";
//     a.innerHTML = "claire";
//     localStorage.setItem("dark-mode" , "disabled")
// }

// if(darkMode === "enabled"){
//     enableDarkMode
// }

// toggleBtn.onclick = function(){
//     darkMode = localStorage.getItem("dark-mode");
//     if (darkMode === "disabled") {
//         enableDarkMode()
//     } else {
//         disableDarkMode()
//     }
// }