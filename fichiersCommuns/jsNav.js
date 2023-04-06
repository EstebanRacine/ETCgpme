let btnIcon = document.getElementById('contenuBoutonNav'),
    btn = document.getElementById('affichageNavTel'),
    nav = document.getElementById('Menu');

const apparitionMenu = () => {
    console.log(btnIcon.style.color);
    if (btnIcon.style.color === "white"){
        btnIcon.style.color = "#1c9aea";
        btnIcon.className = "fa-solid fa-bars";
        nav.style.marginLeft = "100vw";
    }else{
        btnIcon.style.color = "white";
        nav.style.marginLeft = "0";
        btnIcon.className = "fa-solid fa-xmark"
    }
}

const modifSizeNav = () =>{
    // console.log(window.innerWidth);
    if (window.innerWidth >= 800  && btnIcon.style.color === "#1c9aea"){
        console.log(36);
        nav.style.marginLeft = "0";
    }
}

btn.addEventListener("click", apparitionMenu);
window.addEventListener("resize", modifSizeNav);