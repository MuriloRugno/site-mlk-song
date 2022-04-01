/* Kassiel - Kelvin - Lucas Scarpini - Murilo */
function enviar() {/* variáveis que estão ligadas a campos preenchiveis de enviar no html*/
	var nome = document.getElementById("nome").value;
	var email = document.getElementById("email").value;
	var tel = document.getElementById("tel").value;



	if (nome == "" || nome.length < 5) {/* nome deve conter pelo menos 5 caracteres*/
		alert("Nome Incorreto, ou esta preencha até 5 caracteres");/* Se não conter um alert ira ser chamado*/
		formulario.nome.focus();
		return false;

	}

	if (email.length < 10) {/* email deve conter pelo menos 10 caracteres*/
		alert("E-mail Incorreto!, aprensente 10 caracteres");/* Se não conter um alert ira ser chamado*/
		formulario.email.focus();
		return false;

	}
	/* O email deve conter @ e . */
	if (formulario.email.value == ""
		&& formulario.email.value.indexOf('@') == -1
		&& formulario.email.value.indexOf('.') == -1) {
		alert("Por favor, digite um email válido, com @ e .");/* Se não conter um alert ira ser chamado*/
		formulario.email.focus();
		return false;
	}
	alert('Dados enviados com sucesso!');/* Alert para confirmação de que tudo foi preenchido corretamente*/
}

function registrar() {/* variáveis que estão ligadas a campos preenchiveis de registrar no html*/
	var email = document.getElementById("email").value;
	var nomecompleto = document.getElementById("nomecompleto").value;
	var nomeusuario = document.getElementById("nomeusuario").value;
	var senha = document.getElementById("senha_registrar").value;

	/* O email deve conter @ e . */
	if (registro.email.value == "" 
		&& registro.email.value.indexOf('@') == -1 
		&& (registro.email.value.indexOf('.') == -1)) {
		alert("Por favor, digite um email válido, com @ e .");/* Se não conter um alert ira ser chamado*/
		registro.email.focus();
		return false;

	}

	if (nomecompleto == "" || nomecompleto.length < 5) {/* nome deve conter pelo menos 5 caracteres*/
		alert("Nome Incorreto, preencha até 5 caracteres");/* Se não conter um alert ira ser chamado*/
		registro.nomecompleto.focus();
		return false;

	}
	if (nomeusuario == "" || nomeusuario.length < 5) {/* nome deve conter pelo menos 5 caracteres*/
		alert("Usuário Incorreto, preencha até 5 caracteres");/* Se não conter um alert ira ser chamado*/
		registro.nomeusuario.focus();
		return false;
	}
	if (senha == "") {/* javascript para o campo de preenchimento do telefone*/
		alert("Senha Incorreta, mínimo 8 caracteres");
		registro.senha_registrar.focus();
		return false;
	}

	alert('Dados enviados com sucesso!');/* Alert para confirmação de que tudo foi preenchido corretamente*/
}
function login() {/* variáveis que estão ligadas a campos preenchiveis de logar no html*/
	var nomeusuario_entrar = document.getElementById("nome_usuario_login").value;
	var senha_entrar = document.getElementById("senha_login").value;


	if (nomeusuario_entrar == "" || nomeusuario_entrar.length < 5) {/* nome deve conter pelo menos 5 caracteres*/
		alert("Usuário Incorreto, preencha até 5 caracteres");/* Se não conter um alert ira ser chamado*/
		registro.nome_usuario_login.focus();
		return false;
	}
	if (senha_entrar == "") {/* javascript para o campo de preenchimento do telefone*/
		alert("Senha Incorreta, mínimo 8 caracteres");
		registro.senha_login.focus();
		return false;
	}

	alert('Logado com sucesso!');/* Alert para confirmação de que tudo foi preenchido corretamente*/
}