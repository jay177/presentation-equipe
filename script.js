let imgbx = document.querySelectorAll('.imgbx')
imgbx.forEach(popup => popup.addEventListener('click', () => 
{
    popup.classList.toggle('active')
}))





function toggle(){
    var blur = document.getElementById('blur')
    blur.classList.toggle('active');
    var popup = document.getElementById('popup')
    popup.classList.toggle('active');
    
}