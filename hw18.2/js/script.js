document.addEventListener("click", function (e) {
    const targetElement = e.target;

    if (targetElement.closest('.header__burger')) {
        document.documentElement.classList.toggle('burger-open');
        e.preventDefault();
    }

})