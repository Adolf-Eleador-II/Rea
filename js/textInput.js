
let countBlock = 0;

let bottonBarCreate = document.querySelectorAll(".bottonBarTextInput>button");
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
    if(this.closest(".containerTextInput").querySelector(".contentTextInput").lastElementChild){
        this.closest(".containerTextInput").querySelector(".contentTextInput").lastElementChild.remove();
        countBlock--;
    }
}








let countSelectTeg = 0;
bottonBarCreate[0].innerHTML = "Add Tag";
bottonBarCreate[0].onclick = function(){

    let divSelectBlock = document.createElement("div");
    divSelectBlock.className = "selectsTag";
    divSelectBlock.setAttribute("name","select_"+countSelectTeg);

    let selectBlock = document.createElement("select");
    selectBlock.name = "select_" + countSelectTeg + "_tag_0";
    getTagList(selectBlock);
    divSelectBlock.append(selectBlock);

    this.closest(".containerTextInput").querySelector(".tagsTextInput").append(divSelectBlock);
    countSelectTeg++;
}


bottonBarCreate[3].innerHTML = "Delete Last Tag";
bottonBarCreate[3].onclick = function(){
    if(this.closest(".containerTextInput").querySelector(".tagsTextInput").lastElementChild){
        this.closest(".containerTextInput").querySelector(".tagsTextInput").lastElementChild.remove();;
        countSelectTeg--;
    }
}

function getTagList(select){
    let xhr = new XMLHttpRequest();
    xhr.open('GET','js/getTagList.php');
    xhr.send();

    xhr.onload = function () {
        if(xhr.status != 200){ alert(`Ошибка ${xhr.status}: ${xhr.statusText}`); }
        else{ select.innerHTML = xhr.response; }
    };
    xhr.onerror = function() { alert("Запрос не удался"); };
}




