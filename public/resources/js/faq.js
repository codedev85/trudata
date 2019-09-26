
let readContent = document.querySelectorAll(".faq__content_item_read");

let faqHeader = document.querySelectorAll(".faq__content_item_title");

let img = document.querySelectorAll(".js_handle");

for (let i = 0; i < readContent.length; i++) {
    
    faqHeader[i].addEventListener("click", function(){
        readContent[i].classList.toggle("faq__content_view");
        setTimeout(function(){
            readContent[i].classList.toggle("faq__content_appear");
        }, 0);
        console.log(readContent[i].style.height)
        img[i].classList.toggle("rotate");
    });

}

