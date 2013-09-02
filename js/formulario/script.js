$(document).ready(function() {

    $(function ($) {
        $("#CPF").mask("999.999.999-99");
        $("#Telefone").mask("(99) 9999-9999");
        $('#Celular')  
          .mask("(99) 9999-9999?9")  
          .live('focusout', function (event) {  
              var target, phone, element;  
              target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
              phone = target.value.replace(/\D/g, '');  
              element = $(target);  
              element.unmask();  
              if(phone.length > 10) {  
                  element.mask("(99) 99999-999?9");  
              } else {  
                  element.mask("(99) 9999-9999?9");  
              }  
          }); 
    });		
  
    $.validator.addMethod("valueNotEquals", function(value, element, arg){
      return arg != value;
    }, "Selecione uma opção.");

    $("#FormDados").validate({
        rules:{
                Email:{
                    required: true,
                    email: true
                },
                Contato:{
                    required: true
                },
                Telefone:{
                    required: true,
                    minlength: 8
                }
        },
        messages:{
                Email:{
                    required: "digite seu e-mail",
                    minlength: "informe um e-mail válido!"
                },
                Contato:{
                    required: "digite seu nome"
                },
                Telefone: {
                    required: "digite o número do seu telefone"
                }
        }
    });



    //Enviar Dados CV
    $('#Enviar').click(function(){
        if($("#FormDados").valid()){
            
            modelo = "";
            modelos = document.getElementsByName("Modelo");
            for (e = 0; e < modelos.length; e++)
            {
                if (modelos[e].checked == true)
                {
                    modelo += modelos[e].value;
                }
            }
            
            $.ajax({
                url: "index.php?formulario",
                type: "GET",
                data: {Empresa:$('#Empresa').attr('value'),
                        Contato:$('#Contato').attr('value'),
                        Telefone:$('#Telefone').attr('value'),
                        Celular:$('#Celular').attr('value'),
                        Email:$('#Email').attr('value'),
                        Duvidas:$('#Duvidas').attr('value'),
                        Modelo:modelo,
                        Marca1:$('#Marca1').attr('value'),
                        Marca2:$('#Marca2').attr('value'),
                        Marca3:$('#Marca3').attr('value'),
                        Marca4:$('#Marca4').attr('value'),
                        Marca5:$('#Marca5').attr('value'),
                        Marca6:$('#Marca6').attr('value'),
                        Marca7:$('#Marca7').attr('value'),
                        Marca8:$('#Marca8').attr('value')
                        },
                success: function(data)
                {
                    if(data > 0){
                        alert('Dados enviados com sucesso, aguarde o retorno!');
                    }else{
                        alert('ERRO: Tente novamente mais tarde ou ligue: (11) 2232-7207');
                    }
                }
            });  
        }
        return false;
    });  
});
