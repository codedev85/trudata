$(document).ready(function () {
    let owl = $(".owl-one");
    owl.owlCarousel({
        items: 7,
        responsive: {
            0: {
                items: 1
            },
            400:{
                items: 1
            },
            500:{
                items: 2
            },
            600: {
                items: 3
            },
            800: {
                items: 4
            },
            1140: {
                items: 5,
            },
            1440: {
                items: 6,
            }
        },
        autoplay: true,
        loop: true,
        dots: true,
        dotsEach: true,
        autoplayTimeout: 8000
    });

    $('.next').click(function () {
        owl.trigger('next.owl.carousel');
    })


    $('.previous').click(function () {
        owl.trigger('prev.owl.carousel');
    })
});




// let slideInnerContainer = $(".home_slider_inner_container");
// let slider = $(".home_slider__img_wrapper");


// let textContainer = $('.home_slider_outer_quote__container--movable');

// if (slider.length > 5) {
//     let widthOfInnerContainer;
//     if(window.screen.availWidth <= 740){
//         widthOfInnerContainer = slider.length * 20 + 50 + 110;
//     }
//     if(window.screen.availWidth <= 1320 && window.screen.availWidth > 740){
//         widthOfInnerContainer = slider.length * 20 + 50;
//     }
//     if(window.screen.availWidth <= 1520 && window.screen.availWidth > 1320){
//         widthOfInnerContainer = slider.length * 20 + 20;
//     }

//     if(window.screen.availWidth > 1520 ){
//         widthOfInnerContainer = slider.length * 20;
//     }

    

//     let widthOfText = slider.length * 100;
//     let finalWidth = widthOfInnerContainer + "%";
//     let finalWidthOfText = widthOfText + "%";
//     slideInnerContainer.css("width", finalWidth);
//     textContainer.css("width", finalWidthOfText);
// } else {
//     slideInnerContainer.css("width", "100%");
//     slideInnerContainer.css('left', '0%');
// }


// function nextSlider() {
//     slideInnerContainer.animate({ left: '-40%' }, 400, function () {
//         slideInnerContainer.css('left', '-20%');
//         $('.home_slider__img_wrapper').last().after($('.home_slider__img_wrapper').first());
//         $('.home_slider_inner_quote__container').last().after($('.home_slider_inner_quote__container').first());
//         // showText();
//     });
// }

// function previousSlider() {
//     slideInnerContainer.animate({ left: '0%' }, 400, function () {
//         slideInnerContainer.css('left', '-20%');
//         $('.home_slider__img_wrapper').first().before($('.home_slider__img_wrapper').last());
//         $('.home_slider_inner_quote__container').first().before($('.home_slider_inner_quote__container').last());
//         // showText();
//     });
// }

// setInterval(nextSlider, 8000);
// document.querySelector(".home_next").addEventListener("click", function () {
//     if (slider.length > 5) {
//         nextSlider();
//     } else {
//         return;
//     }
// });

// document.querySelector(".home_previous").addEventListener("click", function () {
//     if (slider.length > 5) {
//         previousSlider();
//     } else {
//         return;
//     }
// });


let modalTriggerBtn = document.querySelectorAll(".js_modal_trigger__btn");
let closeBtn = document.querySelector(".modal_contact__close");
let contactModal = document.querySelector(".contact_modal");
let innerModal = document.querySelector(".contact_modal_inner");
contactModal.style.height = "1500px";
contactModal.style.overflow = "auto";

for (let c = 0; c < modalTriggerBtn.length; c++) {
    modalTriggerBtn[c].addEventListener("click", function (e) {
        e.preventDefault();
        document.body.style.height = "100vh";
        document.body.style.overflow = "hidden";
        toggleModal();
    
    });
    
}




closeBtn.addEventListener("click", function () {
    toggleModal();
    document.body.style.height = "auto";
    document.body.style.overflow = "auto";

});

window.addEventListener("click", function (e) {
    if (e.target === innerModal){
        toggleModal();
        document.body.style.height = "auto";
        document.body.style.overflow = "auto";
    }
})

function toggleModal() {
    contactModal.classList.toggle("contact_modal--show");
}

