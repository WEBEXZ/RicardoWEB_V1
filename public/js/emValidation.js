/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$.validator.setDefaults( {
    submitHandler: function () {
	var url = $('#tURL').val(); // the script where you handle the form input.
        $.ajax({
             type: "POST",
             url: url,
             data: $("#frmAlta").serialize(), // serializes the form's elements.
             success: function(data)
             {
                 //alert(JSON.stringify(data)); 
                 // show response from the php script.
                  $( "#alta_empresa" ).html(data);
             }
           });

     return false;
			}});
$(document).ready(function(){
  $("#frmAlta" ).validate( {
				rules: {
					tEmpresa: "required",
                                        tRfc:'required',
                                        tDescripcion:'required',
                                        tDireccion:'required',
                                        tTelefono:{
                                            required:true,
                                            digits:true
                                        },
                                        tResponsable:'required',
                                        tPagina:{
                                            required:true,
                                            url:true
                                        },
                                        tMail:{
                                            required:true,
                                            email:true
                                        },
                                        tPais:'required',
                                        tEstado:'required',
                                        tCiudad:'required'
				},
				messages: {
					tEmpresa: "El nombre de la empresa no es válido.",
                                        tRfc:'El RFC no es válido.',
                                        tDescripcion:'La descripción no es válida.',
                                        tDireccion:'La dirección no es válida.',
                                        tTelefono:'El teléfono no es vaálido.',
                                        tResponsable:'El responsable no es válido.',
                                        tPagina:'La página no es válida.',
                                        tMail:'El correo no es válido.',
                                        tPais:'El país no es válido.',
                                        tEstado:'El estado no es válido.',
                                        tCiudad:'La ciudad no es válida.'
				},
				errorElement: "span",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( "#val" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( "#val" ).addClass( "has-success" ).removeClass( "has-error" );
				}
                            } );   
                    });
  