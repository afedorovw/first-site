/*"use strict"*/

window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded_hiding');
    }, 500);
  };

$(document).ready(function() {

    new WOW().init();

    $("#inputTel").mask("+7 (999) 999-9999");

    $('form').submit(function(event){

    if ($("#inputTel").val() == "" || $("#inputEmail3").val() == "" ) {
        alert("Заполните поля");
    };

    event.preventDefault();

    $.ajax({
        type: "POST",
        url: "php/mail.php",
        data: $(this).serialize()
    }).done(function(){
        $(this).find("input").val("");
        alert("Успешно отправлена!");
        $("form").trigger("reset");
    });
        return false;

    });

    /*
    $('.inputContact').click(function() {
            $(this).delay('fast').hide('slow').delay(1000).show(5000);
            });
    */

    $('#visit').click(function() {
        alert("Сайт в разработке");
        });


    let options = {threshold: [0.5]};
    let observer = new IntersectionObserver (onEntry, options);
    let elements = $('.about_text');
    elements.each((i,el) => {
        observer.observe(el);
    });
});


function onEntry (entry){
    entry.forEach(change => {
        if (change.isIntersecting){
            change.target.classList.add('show-animation');
        };
    });
};

$('a[href^="#"]').click(function(){
        let valHref = $(this).attr("href");
        $('html, body').animate({scrollTop: $(valHref).offset().top - 70 + "px"});
});


var number = document.querySelector('.number'),
        numberTop = number.getBoundingClientRect().top,
        start = +number.innerHTML, end = +number.dataset.max;

        window.addEventListener('scroll', function onScroll() {
            if(window.pageYOffset > numberTop - window.innerHeight / 2) {
                this.removeEventListener('scroll', onScroll);
                var interval = setInterval(function() {
                    number.innerHTML = ++start;
                    if(start == end) {
                        clearInterval(interval);
                    };
                }, 5);
            }
        });


function calc() {
    type_site  = document.getElementById('type_site').value;
    switch(type_site) {
        case "vis":
            type_site = 1000;
            break
        case "promp":
            type_site = 1500}

    design  = document.getElementById('design').value;
    switch(design) {
        case "maket":
            design = 1000;
            break
        case "ntmaket":
            design = 2000}

    adaptive  = document.getElementById('adaptive').value;
        switch(adaptive) {
            case "pk":
                adaptive = 500;
                break
            case "pkm":
                adaptive = 2000}

    price = parseFloat(design) + parseFloat(adaptive) +  parseFloat(type_site);
    document.getElementById('price_m').innerHTML = "Стоимость: "+ price +" рублей";
    
    };
