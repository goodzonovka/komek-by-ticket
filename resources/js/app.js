import '../scss/app.scss'

const phoneLists = document.querySelectorAll('.phone-list-inner-js');
const phoneListButtons = document.querySelectorAll('.phone-list-button-js');

phoneListButtons.forEach((button) => {
    button.addEventListener('click', (e) => {
        e.stopPropagation();
        button.classList.toggle('active');
    });
});

document.addEventListener('click', (e) => {
    phoneLists.forEach((list) => {
        list.querySelector('.phone-list-button-js').classList.remove('active');
    });
});


const menu = document.querySelector('#mobile-menu');
const menuBg = document.querySelector('#mobile-menu-bg');
const menuBtnOpen = document.querySelector('#mobile-menu-button-open');
const menuBtnClose = document.querySelector('#mobile-menu-button-close');


menuBtnOpen.addEventListener('click', () => {
    menu.classList.add('active');
});

menuBtnClose.addEventListener('click', closeMenu);
menuBg.addEventListener('click', closeMenu);

function closeMenu() {
    menu.classList.remove('active');
}

const moveableBlocks = [
    {
        element: document.getElementById('nav'),
        from: document.getElementById('header-bottom-inner'),
        to: document.getElementById('mobile-menu-body'),
    },
    {
        element: document.getElementById('header-bottom-buttons'),
        from: document.getElementById('header-bottom-inner'),
        to: document.getElementById('mobile-menu-body'),
    },
    {
        element: document.querySelector('.header-top__right .social'),
        from: document.querySelector('.header-top__right'),
        to: document.getElementById('mobile-menu-footer'),
    },
    {
        element: document.querySelector('#received-ticket'),
        from: document.querySelector('.header-top__right'),
        to: document.getElementById('mobile-menu-footer'),
    },
];

let isMobileLayout = window.innerWidth < 1200;


const moveBlocks = (toMobile) => {
    moveableBlocks.forEach(({ element, from, to }) => {
        if (!element || !from || !to) return;
        if (toMobile) {
            if (!to.contains(element)) to.appendChild(element);
        } else {
            if (!from.contains(element)) from.appendChild(element);
        }
    });
};

const handleResize = () => {
    const nowMobile = window.innerWidth < 1200;
    if (nowMobile !== isMobileLayout) {
        moveBlocks(nowMobile);
        isMobileLayout = nowMobile;
    }
};

moveBlocks(isMobileLayout);
window.addEventListener('resize', handleResize);
