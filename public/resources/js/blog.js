let facebook = [
    'f', 'a', 'c', 'e', 'b', 'o', 'o', 'k'
];

let instagram = [
    'i', 'n', 's', 't', 'a', 'g', 'r', 'a', 'm'
];

let twitter = [
    't', 'w', 'i', 't', 't', 'e', 'r'
];

let socialLinks = [
    "https//facebook.com",
    "https//instagram.com",
    "https//twitter.com",
]

let socialNames = [
    facebook,
    instagram,
    twitter
]

let counter = 1;
let changingText = document.querySelector(".changing__text");
let turn;
let changingImgs = document.querySelectorAll(".social__img");
let link = document.querySelector(".right__side_inner");
let weekTab = document.querySelector(".week__popular_container");
let monthTab = document.querySelector(".month__popular_container");

let wmBtnTabs = document.querySelectorAll(".popular__post_button")

for (let n = 0; n < wmBtnTabs.length; n++) {
    wmBtnTabs[n].addEventListener('click', function (e) {

        e.preventDefault();

        if(n === 0){
            weekTab.classList.add("show__tab");
            monthTab.classList.remove("show__tab");
        } else if(n === 1){
            weekTab.classList.remove("show__tab");
            monthTab.classList.add("show__tab");
        }

        for (let x = 0; x < wmBtnTabs.length; x++) {
            wmBtnTabs[x].classList.remove("popular__post_button--active");
            
        }

        wmBtnTabs[n].classList.add("popular__post_button--active")
    })
}

setInterval(function () {

    if (counter === 1) {
        turn = socialNames[1];
    } else if (counter === 2) {
        turn = socialNames[2];
    } else if (counter === socialNames.length) {
        turn = socialNames[0];
        counter = 0;
    }

    for (let x = 0; x < changingImgs.length; x++) {
        changingImgs[x].classList.remove("show")
    }

    link.setAttribute('href', socialLinks[counter])
    changingImgs[counter].classList.add("show");

    changingText.innerHTML = ""
    for (let i = 0; i < turn.length; i++) {
        setTimeout(function () {
            changingText.innerHTML += turn[i];
        }, 200 * i);
    }

    counter++;
}, 9000);

window.addEventListener("resize", function(){
    console.log("me")
    if(screen.availWidth <= 960){
        document.querySelector(".blog__sub_main_submit").setAttribute("value", "");
    } else if(screen.availWidth > 960){
        document.querySelector(".blog__sub_main_submit").setAttribute("value", "REGISTER");

    }
});

if(screen.availWidth <= 960){
    document.querySelector(".blog__sub_main_submit").setAttribute("value", "");
} else if(screen.availWidth > 960){
    document.querySelector(".blog__sub_main_submit").setAttribute("value", "REGISTER");

}