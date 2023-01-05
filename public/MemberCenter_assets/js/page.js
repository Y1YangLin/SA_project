var button_memberdata = document.querySelector(".btn_memberdata");
var button_changepassword = document.querySelector(".btn_changepassword");
var button_pressgood = document.querySelector(".btn_pressgood");
var button_collection = document.querySelector(".btn_collection");
var button_comment = document.querySelector(".btn_comment");
var button_collection_1 = document.getElementsByClassName("btn_collection-1");

var memberdata = document.querySelector(".memberdata");
var changepassword = document.querySelector(".changepassword");
var pressgood = document.querySelector(".pressgood");
var collection = document.querySelector(".collection");
var comment = document.querySelector(".comment");
var product_for_collection = document.querySelector(".product_for_collection");

// changepassword.style.display = "block";
//  memberdata.style.display = "block";

// button_pressgood.style.display = "none";
//  button_memberdata.style.display = "none";

button_memberdata.onclick = function(){//按下會員資料
    
    // button_memberdata.style.display = "none";
    if (memberdata.style.display === "none"){
        // button_memberdata.style.display = "none";
        memberdata.style.display = "block";///會員資料出現

        changepassword.style.display = "none";
        pressgood.style.display = "none";
        collection.style.display = "none";
        product_for_collection.style.display = "none";
        comment.style.display = "none";

        for(var i = 0 ; i < form_signup.length ; i++){
            form_signup[i].value =""; 
        }

    }
}

button_changepassword.onclick = function(){//按下更改密碼
    
    // button_changepassword.style.display = "none"
    if (changepassword.style.display === "none"){
        //  button_changepassword.style.display = "none"
        changepassword.style.display = "block";//更改密碼出現

        memberdata.style.display = "none";
        pressgood.style.display = "none";
        collection.style.display = "none";
        product_for_collection.style.display = "none";
        comment.style.display = "none";
        

        for(var i = 0 ; i < form_signup.length ; i++){
            form_signup[i].value =""; 
        }

    }
}

button_pressgood.onclick = function(){//按下按讚紀錄
    
    // button_memberdata.style.display = "none";
    if (pressgood.style.display === "none"){
        // button_memberdata.style.display = "none";
        pressgood.style.display = "block";///按讚紀錄出現

        changepassword.style.display = "none";
        memberdata.style.display = "none";
        collection.style.display = "none";        
        product_for_collection.style.display = "none";
        comment.style.display = "none";

    }
}

button_collection.onclick = function(){//按下我的收藏
    
    // button_memberdata.style.display = "none";
    if (collection.style.display === "none"){
        // button_memberdata.style.display = "none";
        collection.style.display = "block";///我的收藏出現

        changepassword.style.display = "none";
        memberdata.style.display = "none";
        pressgood.style.display = "none";
        product_for_collection.style.display = "none";
        comment.style.display = "none";

    }
}

for (var i = 0; i < button_collection_1.length; i++){ //按下我的收藏內的資料夾
    button_collection_1[i].addEventListener('click', function(){
         // button_memberdata.style.display = "none";
        if (product_for_collection.style.display === "none"){
            // button_memberdata.style.display = "none";
            product_for_collection.style.display = "block";///商品出現

            changepassword.style.display = "none";
            memberdata.style.display = "none";
            pressgood.style.display = "none";
            collection.style.display = "none";
            comment.style.display = "none";

        }
    })
  }

button_comment.onclick = function(){//按下我的評論
    
    if (comment.style.display === "none"){
        // button_memberdata.style.display = "none";
        comment.style.display = "block";///評論出現

        changepassword.style.display = "none";
        memberdata.style.display = "none";
        pressgood.style.display = "none";
        collection.style.display = "none";
        button_collection_1.style.display = "none";


    }
}