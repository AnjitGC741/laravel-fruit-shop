
function openAddBox()
{
   
    document.getElementById("formAddBox").style.display="block";
    document.querySelector(".overlay").classList.remove("hidden");
    
}
function closeAddBox()
{
   
    document.getElementById("formAddBox").style.display="none";
    document.querySelector(".overlay").classList.add("hidden");

}
function openEditBox(x)
{
    document.getElementById("formEditBox_"+x).style.display = "block";
    document.querySelector(".overlay").classList.remove("hidden");
}
function hideEditBox(x) {
    document.getElementById(x).style.display = "none";
    document.querySelector(".overlay").classList.add("hidden");
}