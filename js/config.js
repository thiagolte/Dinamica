$(document).ready( function() {
	$("#contatoForm").validate({
		rules:{
			nome:{
				required: true, minlength: 3
			},
			email:{
				required: true, email: true
			},
			telefone:{
				required: true, minlength: 8
			},
			assunto:{
				required: true
			},
			mensagem:{
				required: true
			}
		},
		messages:{
			nome:{
				required: "digite seu nome",
				minlength: "seu nome deve ter no mínimo 3 caracteres"
			},
			email:{
				required: "digite seu e-mail!",
				email: "digite um e-mail válido!"
			},
			telefone:{
				required: "digite seu telefone",
				minlength: "seu telefone deve ter no mínimo 8 caracteres"
			},
			assunto:{
				required: "digite um assunto"
			},
			mensagem:{
				required: "digite uma mensagem"
			}
		}
	});
    
    $("#re_pass").validate({
		rules:{
			Password:{
				required: true, minlength: 5
			},
			Re_password:{
				required: true, equalTo: "#Senha"
			}
        },
        messages:{
            Password:{
                minlength: 'sua deve ter pelo no mínimo 5 caracteres'
            },
            Re_password:{
                equalTo: 'suas senhas não conferem!'
            }
        }
    });
});	
	
	