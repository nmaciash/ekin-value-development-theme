
$ = jQuery.noConflict();

$(document).ready(function() {
    var frame;
    $('#add-gallery-image').click(function (e) {
        e.preventDefault();
        if (frame) {
            frame.open();
            return;
        }
        frame = wp.media({
            title: 'Seleccionar Imágenes',
            button: {
                text: 'Usar estas imágenes',
            },
            multiple: true,
        });
        frame.on('select', function () {
            var images = frame.state().get('selection').toJSON();
            images.forEach(function (image) {
                $('#viviendas-gallery-container').append(
                    '<div class="vivienda-image">' +
                    '<img src="' + image.sizes.thumbnail.url + '" />' +
                    '<input type="hidden" name="viviendas_galeria[]" value="' + image.id + '">' +
                    '<button type="button" class="remove-image">Eliminar</button>' +
                    '</div>'
                );
            });
        });
        frame.open();
    });

    $(document).on('click', '.remove-image', function () {
        $(this).parent('.vivienda-image').remove();
    });
});
