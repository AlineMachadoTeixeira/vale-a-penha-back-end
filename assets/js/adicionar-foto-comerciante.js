const inputFile = document.querySelector("#foto");
const imageProduto = document.querySelector(".comerciante__foto__image");
const imageProdutoTxt = "Escolha a image";
imageProduto.innerHTML = imageProdutoTxt;

inputFile.addEventListener("change", function (e) {
  const inputTarget = e.target;
  const file = inputTarget.files[0];

  if (file) {
    const reader = new FileReader();

    reader.addEventListener("load", function (e) {
      const readerTarget = e.target;

      const img = document.createElement("img");
      img.src = readerTarget.result;
      img.classList.add("picture__img");

      imageProduto.innerHTML = "";
      imageProduto.appendChild(img);
    });

    reader.readAsDataURL(file);
  } else {
    pictureImage.innerHTML = pictureImageTxt;
  }
});
