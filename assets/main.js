

function addNew(){
    document.getElementById("saveBtn").style.display = "block";
    document.getElementById("closeBtn").style.display = "block";
    document.getElementById("updateBtn").style.display = "none";
    document.getElementById("deleteBtn").style.display = "none";
    document.getElementById("form").reset();
}
function deleteBtn(id){
    document.getElementById('hideId').value = id;
    document.getElementById("saveBtn").style.display = "none";
    document.getElementById("closeBtn").style.display = "block";
    document.getElementById("updateBtn").style.display = "none";
    document.getElementById("deleteBtn").style.display = "block";
    document.getElementById('joke-text').value = document.getElementById(id).getAttribute("title");

    
    
}