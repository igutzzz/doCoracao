let menu = document.getElementById('hamburger_menu');
let menuItems = document.getElementById('navbar_menu');

const toggleMenu = () => {
    menuItems.classList.toggle('open');
    if(menu.textContent == 'menu'){
        menu.textContent = 'close';
    } else {
        menu.textContent = 'menu';
    }
    console.log(menu.textContent);
}

menu.addEventListener('click', toggleMenu);