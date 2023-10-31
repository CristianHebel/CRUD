$(function() {
    $('#create-product-form').submit(function(e) {

        let nombre = $('#nombre').val().trim();
        let precio = $('#precio').val().trim();
        
        if (nombre === '' || precio === '') {
            alert('Por favor, completa todos los campos.');
            e.preventDefault(); 
        }
        
        if (nombre.length < 3) {
            alert('El nombre debe tener al menos 3 caracteres.');
            e.preventDefault();
        }
        if (parseFloat(precio) <= 0) {
            alert('El precio debe ser mayor que 0.');
            e.preventDefault();
        }

    });
});
