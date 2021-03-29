const axios = require('axios');

if ( $("#type").length > 0 ) {

    $( "#type" ).change(function() {
        let type = $('#type').val();
        $('#video').val('');
        $('#picture').val('');

        if(type == 1){
            $('#div-video').hide();
            $('#div-image').show();
        }else{
            $('#div-video').show();
            $('#div-image').hide();
        }
    });
}

/* $( "#form-contact" ).submit(function( event ) {

    event.preventDefault();
    $('#spinner').show();
    let myForm    = document.getElementById('form-contact');
    let formData  = new FormData(myForm);
    axios.post('/send-contact', formData)
        .then(function (response) {
            var result  = response.data;
            $('#form-contact')[0].reset();

            $('#spinner').hide();
            window.location = '/thanks';

        })
        .catch(e => {
            $('#spinner').hide();
        })

}); */

$(document).ready(function () {
    if ($("#promo").length > 0) {

        $('#modalPomotions').modal('show');
    }
});

