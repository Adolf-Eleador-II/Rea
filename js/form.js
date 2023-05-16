


let closeButton = document.querySelectorAll(".closeButtonForm");
for(i=0;i<closeButton.length;i++){
    closeButton[i].onclick = function() {this.closest("section").setAttribute("style","display: none;")};
}

if(document.querySelector("#buttonLogout")){
    document.querySelector(".logoutForm>button").onclick = function() {this.closest("section").setAttribute("style","display: none;")};
    document.querySelector("#buttonLogout").onclick = function() {document.querySelector("#sectionLogout").setAttribute("style","display: flex;");}
}
else{
    document.querySelector("#buttonLogin").onclick = function() {document.querySelector("#sectionLogin").setAttribute("style","display: flex;");}
    document.querySelector("#buttonRegistrate").onclick = function() {document.querySelector("#sectionReg").setAttribute("style","display: flex;");}
}
