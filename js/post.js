let i;

let contentPost = document.querySelectorAll(".contentPost");
for(i = 0; i < contentPost.length; i++){
    if(contentPost[i].clientHeight > 350 && contentPost[i].querySelectorAll("div").length > 1){
        contentPost[i].setAttribute("style","max-height: 350px;");
        let div = document.createElement("div");
        div.className = "unwrapContentPost";
        div.innerHTML = "<button>Развернуть</button>";
        div.querySelector("button").onclick = function(){
            this.closest(".containerPost").querySelector(".contentPost").setAttribute("style","max-height: auto;");
            this.closest(".unwrapContentPost").remove();
        }
        contentPost[i].after(div);
    }
}

let buttonCommentsPost = document.querySelectorAll(".footherPost>button");
for(i = 0; i < buttonCommentsPost.length; i++){
    buttonCommentsPost[i].onclick = function() {wrapComments(this)};
    buttonCommentsPost[i].click();
}
function wrapComments(button){
    button.closest(".post").querySelector(".comments").setAttribute("style","display: none;");
    button.onclick = function() {unwrapComments(this)};
}
function unwrapComments(button){
    button.closest(".post").querySelector(".comments").setAttribute("style","display: flex;");
    button.onclick = function() {wrapComments(this)};
}








allTagLink = document.querySelectorAll("*[id_tag]");
for(i=0;i<allTagLink.length;i++){
    let j = allTagLink[i].getAttribute("id_tag");
    allTagLink[i].setAttribute("href","index.php?id=" + j);
}


