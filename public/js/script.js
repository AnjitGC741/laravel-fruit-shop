
function openAddBox()
{
   
    document.getElementById("formAddBox").style.display="block";
    
}
function closeAddBox()
{
   
    document.getElementById("formAddBox").style.display="none";
}
function openEditBox(x)
{
    document.getElementById("formEditBox_"+x).style.display = "block";
}
function hideEditBox(x) {
    document.getElementById(x).style.display = "none";
}