$(function () {
    $('#changeDateAdvertisement').validate(
        {
            errorElement: 'div',
            errorClass: 'invalid-feedback',
            rules: {
                luggage_change: {
                    required: true,
                    min: 100
                },
                free_place_change: {
                    required: true,
                    min: 1
                },
                coast_change: {
                    required: true,
                    min: 0
                },
            },
            messages: {
                luggage_change: {
                    required: "Proszę wprowadzić pojemność ",
                    min: "Minimalna pojemność bagażu musi być większa nić 100 litrów ",
                },
                free_place_change: {
                    required: "Prosze ilość wolnych miejsc",
                    min: "Minimalna liczba wolnych miejsc musi być większa nić 0 ",
                },
                coast_change: {
                    required: "Prosze wprowadzić koszt podróży w przeliczeniu na 1 osobę",
                    min: "Minimalna koszt podróży musi być większy ni 0",
                },
            },
            highlight: function (input) {
                $(input).addClass('is-invalid');
            },
            unhighlight: function (input) {
                $(input).removeClass('is-invalid');
            },
            errorPlacement: function (error, element) {
                $(element).parents('.form-group').append(error);
            },
            submitHandler: function(form, e) {
            }
        });
});