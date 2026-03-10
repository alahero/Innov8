$('#contact-form').on('submit', function(e) {
    e.preventDefault();

    let formData = $(this).serializeArray(); let datos = {};
    formData.forEach(element => {
        datos[element['name']] = element['value'];
    })

    datos['consulta'] = 'contact-form';
    jQuery.ajax({
        url: 'controllers/contact-form.php',
        type: 'POST',
        dataType: 'JSON',
        data: datos,
        beforeSend: function() {
            Swal.fire({
                icon: 'info',
                title: 'Sending your message...',
                allowEscapeKey: false,
                allowOutsideClick: false,
                didOpen: function() {
                    Swal.showLoading();
                }
            })
        },
        success: function(response) {
            if (response.success) {
                Swal.fire({
                    icon: 'success',
                    text: 'Message sent successfully. We will contact you shortly.',
                    confirmButtonText: 'OK'
                });

                document.getElementById('contact-form').reset();
            } else {
                Swal.fire({
                    icon: response.icon,
                    title: response.title,
                    html: response.message,
                    confirmButtonText: 'OK'
                });
            }
        }
    }).fail(reason => {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            html: 'For the moment it is not possible to send messages through this medium.<br><br>You can contact us via WhatsApp or our social media. We will be happy to assist you!',
            confirmButtonText: 'OK'
        });
    })
});