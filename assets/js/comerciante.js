

(function() {
  "use strict";

  // Faz o menu ficar vermelho quando clicar e deixa o outro na cor normal
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  //Faz a bolinha do menu abrir quando está para celular
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  // Ajuda o de cima fazer  a bolinha do menu abrir quando está para celular
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Para mudar os links do menu mudar de uma página para outra 
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Faz Rola para um pagina do menu que clicamos
   */
  const scrollto = (el) => {
    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos,
      behavior: 'smooth'
    })
  }

  /**
   * Faz Setinha que volta ao topo ficar fixar quando rolamos a tela
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  
   //Alternar navegação quando está no celular
   
  on('click', '.mobile-nav-toggle', function(e) {
    select('body').classList.toggle('mobile-nav-active')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })  

})()


// JS para Foto no cadastrar comércio

// const inputFile = document.querySelector("#foto");
// const imageProduto = document.querySelector(".comerciante__foto__image");
// const imageProdutoTxt = "Escolha a imagem";
// imageProduto.innerHTML = imageProdutoTxt;

// inputFile.addEventListener("change", function (e) {
//   const inputTarget = e.target;
//   const file = inputTarget.files[0];

//   if (file) {
//     const reader = new FileReader();

//     reader.addEventListener("load", function (e) {
//       const readerTarget = e.target;

//       const img = document.createElement("img");
//       img.src = readerTarget.result;
//       img.classList.add("picture__img");

//       imageProduto.innerHTML = "";
//       imageProduto.appendChild(img);
//     });

//     reader.readAsDataURL(file);
//   } else {
//     pictureImage.innerHTML = pictureImageTxt;
//   }
// });


$('input[name="upload-img"]').on('change', function() {
  var fileInput = this;
  var file = fileInput.files[0];

  if (file) {
    var img = new Image();
    img.src = window.URL.createObjectURL(file);

    img.onload = function() {
      if (img.width <= 300 && img.height <= 300) {
        readURL(fileInput, $('.file-wrapper'));
      } else {
        alert('Por favor, selecione uma imagem com no máximo 300x300 pixels.');
        // Limpar o input de arquivo
        $(fileInput).val('');
      }
    };
  }
});

$('.close-btn').on('click', function() { //Unset the image
  let file = $('input[name="upload-img"]');
  $('.file-wrapper').css('background-image', 'unset');
  $('.file-wrapper').removeClass('file-set');
  file.replaceWith(file = file.clone(true));
});

// FILE
function readURL(input, obj) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      obj.css('background-image', 'url(' + e.target.result + ')');
      obj.addClass('file-set');
    }
    reader.readAsDataURL(input.files[0]);
  }
};