$(function () {
    $('#form_validation').validate({
        rules: {
            password: {
                minlength: 6
            },
            perfil: {
                required: true
            }
        },
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        }
    });

    //Custom Validations ===============================================================================
    //Password Check
    $.validator.addMethod('passwordCheck', function (value, element) {
        
        return value == $("#password").val();

        }, 'A Senha e a Confirmação de Senha devem ser iguais.'
    
    );
    //==================================================================================================
});