let clickableImage = document.querySelectorAll(".stacked_img_container");
let popUps = document.querySelectorAll(".stack__pop_up");
let imgContainer = document.querySelectorAll(".stacked__img_inner_container")

for (let i = 0; i < clickableImage.length; i++) {
    clickableImage[i].addEventListener("click", function(){
        for (let x = 0; x < clickableImage.length; x++) {
            popUps[x].classList.remove('show-pop');
        }
        popUps[i].classList.toggle("show-pop");
        

        setTimeout(function(){
            popUps[i].classList.remove("show-pop");
        }, 25000);
    });
    
}

// function removePopUp(params) {
//     for (let i = 0; i < clickableImage.length; i++) {
    
//         clickableImage[i].addEventListener("click", function(){
//             popUps[i].classList.remove('show-pop');
//         });
    
//     }
// }
