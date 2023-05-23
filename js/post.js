let i;

//Скрытие излишнего контента и добавление кнопки вскрытия контента
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

//Переключатель скрытия комментов
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










