function validateFile() {
    var fileInput = document.getElementById('about_newimg');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if (!allowedExtensions.exec(filePath)) {
        alert('You can only upload image files (JPG, JPEG, PNG, GIF)');
        fileInput.value = '';
        return false;
    }
}