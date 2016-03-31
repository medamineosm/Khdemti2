<script>
	$(document).ready(function(){



		$("html, body").animate({ scrollTop: 0 }, "slow");



	$('#sendForm').validate({
        rules: {
            nom: {
                required: true,
                minlength: 4
            },
            email: {
                required: true,
                email: true
            },
            telephone: {
                required: false,
                minlength:10,
                maxlength:15
            },
        },
        messages: {
            nom: {
                required: "Veuillez entrer votre nom",
                minlength: "Le nom doit contenir au moins 6 caractères"
            },
            email: {
                required: "Veuillez spécifier votre email",
                email : "Veuillez entrer un email correct !"
            },
            telephone: {
            	minlength : "Le téléphone doit contenir au moins 10 chiffres !"
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"../inc/send.php",
                success: function(data) {
                	console.log(data);
                	switch(data)
                	{
                		case 'SUCCESS':
                			$("#result-form").html("Votre inscription a été enregistrée, Nous sommes entrain de finaliser le produit, on vous tient informé des nouveautés ! Merci");
                			break;
                		case 'EXISTS':
                			$("#result-form").html("Cet email est déja enregistré");
                			break;
                		case 'ERROR':
                			$("#result-form").html("Une erreur est survenue, veuillez réessayer plus tard");
                			break;
                		default:
                			console.log('Case ???');
                			break;

                	}
                    $('#sendForm :input').attr('disabled', 'disabled');
                    $('#sendForm').fadeTo( "slow", 0.15, function() {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor','default');
                        $('#success').fadeIn();
                    });
                },
                error: function(data) {
                	console.log(data);
                    $('#sendForm').fadeTo( "slow", 0.15, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });

</script>
