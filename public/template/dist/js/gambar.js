function Preview() {
  const gambar = document.querySelector("#gambar");
  const gambarlabel = document.querySelector(".custom-file-label");
  const imgPreview = document.querySelector(".img-preview");

  gambarlabel.textContent = gambar.files[0].name;

  const fileGambar = new FileReader();
  fileGambar.readAsDataURL(gambar.files[0]);

  fileGambar.onload = function (e) {
    imgPreview.src = e.target.result;
  };
}
