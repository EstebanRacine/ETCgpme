let btnIcon = document.getElementById('contenuBoutonNav'),
    btn = document.getElementById('affichageNavTel'),
    body = document.body,
    nav = document.getElementById('Menu');

const apparitionMenu = () => {
    console.log(btnIcon.style.color);
    if (btnIcon.style.color === "white"){
        btnIcon.style.color = "#1c9aea";
        btnIcon.className = "fa-solid fa-bars";
        nav.style.marginLeft = "100vw";
        body.style.height = "max-content";
        body.style.overflowY = "auto"
    }else{
        btnIcon.style.color = "white";
        nav.style.marginLeft = "0";
        btnIcon.className = "fa-solid fa-xmark";
        body.style.height = "100vh";
        body.style.overflowY = "hidden"
    }
}

const modifSizeNav = () =>{
    if (window.innerWidth >= 800  && btnIcon.style.color === "#1c9aea"){
        console.log(36);
        nav.style.marginLeft = "0";
    }
}

btn.addEventListener("click", apparitionMenu);
window.addEventListener("resize", modifSizeNav);