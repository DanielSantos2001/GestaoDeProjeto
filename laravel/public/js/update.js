document.getElementById('imagecp').onchange = function (event) {
    var read = new FileReader();
    read.onload = function (event) {
        document.getElementById('prop_img_c').src = event.target.result
    }
    read.readAsDataURL(event.target.files[0]);
}