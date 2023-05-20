
let countBlock = 0;

let bottonBarCreate = document.querySelectorAll(".bottonBarTextInput>button");
// bottonBarCreate[0].innerHTML = "Add Tag";
// bottonBarCreate[0].onclick = function(){}
bottonBarCreate[1].innerHTML = "Add Text Block";
bottonBarCreate[1].onclick = function(){
    let textBlock = document.createElement("textarea");
    textBlock.name = "text_"+countBlock;
    textBlock.rows = "10";
    countBlock++;
    this.closest(".containerTextInput").querySelector(".contentTextInput").append(textBlock);
}
bottonBarCreate[2].innerHTML = "Add IMG";
bottonBarCreate[2].onclick = function(){
    let textBlock = document.createElement("input");
    textBlock.name = "img_"+countBlock;
    textBlock.type = "file";
    countBlock++;
    this.closest(".containerTextInput").querySelector(".contentTextInput").append(textBlock);
}
bottonBarCreate[4].innerHTML = "Delete Last Block";
bottonBarCreate[4].onclick = function(){
    this.closest(".containerTextInput").querySelector(".contentTextInput").lastElementChild.remove();
    countBlock--;
}


