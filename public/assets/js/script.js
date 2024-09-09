function previewImage() {
    const image = document.querySelector("#profile_picture");
    const imgPreview = document.querySelector(".img-preview");
    // const label = document.getElementById("label");
    // const label2 = document.querySelector(".label");

    // Menampilkan preview hanya jika file telah dipilih
    // imgPreview.style.display = "block";
    // label.style.display = "none";
    // label2.style.display = "none";

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
    };
}

