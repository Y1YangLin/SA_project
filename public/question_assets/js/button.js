        var checkHeart = document.querySelector(".fa-circle-thin");
        var a = document.querySelector(".fa-circle");       
        a.style.display = "none" ;
        checkHeart.addEventListener("click", function(e){
            
                if(e.target.classList.contains('fa-circle-thin')){
                //換class 病患 type
                     checkHeart.style.display = "none" ;

                    a.style.display = "block" ;
                }    
            });

        a.addEventListener("click", function(e){
            
            if(e.target.classList.contains('fa-circle-thin')){
                //換class 病患 type
                     a.style.display = "none" ;
                     checkHeart.style.display = "block" ;

                }
            });


//checkHeart.style.display ="none";