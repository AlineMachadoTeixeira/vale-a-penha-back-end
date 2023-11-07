// JS para Foto no cadastrar comércio

$('input[name="imagem"]').on('change', function() {
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
    let file = $('input[name="imagem"]');
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