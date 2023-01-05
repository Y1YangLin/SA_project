var button = document.querySelector(".Triger");
var content = document.querySelector(".navmove");
var offcanvas = document.querySelector(".offcanvas");
    
    //offcanvas.style.display = "none";    

    button.onclick = function(){

        //content.classList.add('nav-justified');

        if(offcanvas.classList.contains('show')){

            //content.style.display = "none";

            content.classList.add('nav-justified');

            //.classList.toggle("nav-justified", true);    
    
        }

    }
    





//     content.classList.toggle("nav-justified", true);
// //    content.style.display = "none";
//     content.classList.add('nav-justified');
//     content.classList.toggle("nav-justified", true);

//     if(offcanvas.classList.contains('visible')){

//         content.classList.add('nav-justified');
//     //.classList.toggle("nav-justified", true);    
//     }

//     else if(content.classList.contains('nav-justified')){

//         content.classList.remove('nav-justified');
//         //.classList.toggle("nav-justified", true);    
//     }

