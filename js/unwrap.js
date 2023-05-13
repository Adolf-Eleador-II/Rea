
let i;
let contentPosts = document.querySelectorAll(".contentPost");
for(i = 0; i < contentPosts.length; i++){
    if(contentPosts[i].clientHeight > 350 && contentPosts[i].querySelectorAll("div").length > 1){
        contentPosts[i].setAttribute("style","max-height: 350px;");
        let div = document.createElement("div");
        div.className = "unwrap";
        div.innerHTML = "<button class=\"unwrapButton\">Развернуть</button>";
        contentPosts[i].after(div);
    }
}

let j;
let unwrapButton = document.querySelectorAll(".unwrapButton");
for(j = 0; j < unwrapButton.length; j++){
    unwrapButton[j].onclick = function(){
        this.closest(".containerPost").querySelector(".contentPost").setAttribute("style","max-height: auto;");
        this.closest(".unwrap").remove();
    }
}
 