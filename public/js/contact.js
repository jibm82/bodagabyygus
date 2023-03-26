$(document).on('ready', function() {
    $("#phone-validation-form").on('submit', function(e) {
        e.preventDefault();

        let phone = $("#phone_validation").val();

        fetch($(e.currentTarget).attr('action'), {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                phone: phone
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.valid) {
                $('#phone-validation-form').hide()
                $('#form-rsvp').removeClass('hidden')

                $("#phone").val(phone);
                $("#name").val(data.name);
                $("#people").val(data.people);
                $("#validate-phone-container").hide();
            } else {
                alert("El número de celular que proporcionaste no se encuentra registrado");
            }
        });
    });
});
