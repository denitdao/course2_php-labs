function show_menu(element_id)
{
    document.getElementsByClassName("menu-open")[element_id].style.display = "none";
    document.getElementsByClassName("menu-close")[element_id].style.display = "flex";
    document.getElementsByClassName("buttons")[element_id].style.display = "flex";
}

function hide_menu(element_id)
{
    document.getElementsByClassName("menu-close")[element_id].style.display = "none";
    document.getElementsByClassName("buttons")[element_id].style.display = "none";
    document.getElementsByClassName("menu-open")[element_id].style.display = "flex";
}