/* Facilitates toggling between desktop and mobile menus. */
function toggleMenuExt() {
    var x = document.getElementById("mainNav");
    if (x.className === "navigation") {
        x.className += " responsive";
    } else {
        x.className = "navigation";
    }
}