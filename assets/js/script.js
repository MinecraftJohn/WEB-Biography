var headerLogo = document.getElementsByClassName("headerLogo")[0]
var headerProfilePictureSection = document.getElementsByClassName("headerProfilePictureSection")[0]

// Profile Function
function profileIn () {
    headerLogo.style.transform = "translateY(-50%) scale(0)"
    headerProfilePictureSection.style.transform = "translateY(-50%) scale(1)"
}
function profileOut () {
    headerLogo.style.transform = "translateY(-50%) scale(1)"
    headerProfilePictureSection.style.transform = "translateY(-50%) scale(0)"
}
