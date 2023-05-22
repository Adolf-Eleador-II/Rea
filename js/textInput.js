
let countBlock = 0;

let bottonBarCreate = document.querySelectorAll(".bottonBarTextInput>button");
bottonBarCreate[2].innerHTML = "Add Text";
bottonBarCreate[2].onclick = function(){
    let block = document.createElement("textarea");
    block.name = "text_"+countBlock;
    block.rows = "10";
    countBlock++;
    this.closest(".containerTextInput").querySelector(".contentTextInput").append(block);
}
bottonBarCreate[3].innerHTML = "Add IMG";
bottonBarCreate[3].onclick = function(){
    let block = document.createElement("input");
    block.name = "img_"+countBlock;
    block.type = "file";
    countBlock++;
    this.closest(".containerTextInput").querySelector(".contentTextInput").append(block);
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
bottonBarCreate[0].onclick = function(){ createNewSelectTag(); }
bottonBarCreate[1].innerHTML = "Delete Last Tag";
bottonBarCreate[1].onclick = function(){
    if(this.closest(".containerTextInput").querySelector(".tagsTextInput").lastElementChild){
        this.closest(".containerTextInput").querySelector(".tagsTextInput").lastElementChild.remove();;
        countSelectTeg--;
    }
}


function createNewSelectTag(){
    let divBlock = document.createElement("div");
    divBlock.className = "selectsTag";
    divBlock.setAttribute("name","select_"+countSelectTeg);
    divBlock.append(createSelectTag(countSelectTeg,0,0));

    document.querySelector(".tagsTextInput").append(divBlock);
    countSelectTeg++;
}

function createSelectTag(idSelect,idTag,idParent){
    let block = document.createElement("select");
    block.name = "select_" + idSelect + "_tag_" + idTag;
    block.onchange = function(){
    block.name = "select_" + idSelect + "_tag_" + idTag;
        let del = document.querySelectorAll("select[name='select_"+idSelect+"_tag_"+idTag+"'] ~ select");
        for(let j=0;j<del.length;j++){ del[j].remove(); }
        if(this.value!=''){
            this.after(createSelectTag(idSelect,idTag+1,this.value));
        }
    }
    getTagList(block,idParent);
    return block;
}
function getTagList(select,idParent){
    let xhr = new XMLHttpRequest();
    xhr.open('GET','js/getTagList.php?id=' + idParent);
    xhr.send();

    xhr.onload = function () {
        if(xhr.status != 200){ alert(`Ошибка ${xhr.status}: ${xhr.statusText}`); }
        else{ select.innerHTML = xhr.response; }
    };
    xhr.onerror = function() { alert("Запрос не удался"); };
}



