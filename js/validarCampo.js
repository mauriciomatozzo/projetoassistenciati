function validarCampo()
{
if(document.cadastro.nome.value==="")
	{
	alert("O Campo nome � obrigat�rio!");
	return false;
	}
else
	if(document.cadastro.email.value==="")
	{
	alert("O Campo email � obrigat�rio!");
	return false;
	}
else
	if(document.cadastro.endereco.value==="")
	{
	alert("O Campo endere�o � obrigat�rio!");
	return false;
	}
else
	if(document.cadastro.cidade.value==="")
	{
	alert("O Campo Cidade � obrigat�rio!");
	return false;
	}
else
	if(document.cadastro.estado.value==="")
	{
	alert("O Campo Estado � obrigat�rio!");
	return false;
	}
else
	if(document.cadastro.bairro.value==="")
	{
	alert("O Campo Bairro � obrigat�rio!");
	return false;
	}
else
	if(document.cadastro.pais.value==="")
	{
	alert("O Campo pa�s � obrigat�rio!");
	return false;
	}
else
	if(document.cadastro.login.value==="")
	{
	alert("O Campo Login � obrigat�rio!");
	return false;
	}
else	
if(document.cadastro.senha.value==="")
	{
	alert("Digite uma senha!");
	return false;
	}
else
return true;
}


