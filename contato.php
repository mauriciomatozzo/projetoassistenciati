<!DOCTYPE html>
<html lang="pt-br">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

    <head>
        <title>computechmanu</title>
        <style>
            p.destaque{
                background-color: black;
                display: block;
                margin: auto;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1><i><center><big><font> CONTATO</big></center></i> <text> </h1>

        <article><h1> 
                <center>

                    <head> 
                        <!--sript Java-->
                        <script scr="mensagemOk.js" type="text/javascript"
                    </script>
                    <script scr="limpar.js" type="text/javascript"
                </script>
<form action="enviadoSuces.php" method="POST">
<link href="css/formulario.css" rel="stylesheet">
    <h1><center><font color="0000FF">Solicitação de Orçamento Assistência TI</center></font></h1> 
            </form  
                </head>

                <div id = "menu">
                <ul><h5><center><big><font>
                <li><a href="aEmpresa.html">A EMPRESA</a></li> 
    <li><a href="serviços.html">SERVIÇOS</a></li>
        <li><a href="contato.html">CONTATO/FORMULÁRIO</a></li>
        <li><a href="sobre.html">SOBRE</a></li>
                    <li><a href="newhtml5.html">QUEM SOU</a></li>
                        <li><a href="newhtml6.html">LINKS</a></li>
                    <li><a href="index.html">FORMULÁRIO DE ATENDIMENTO</a></li>
                    </ul>
                </div>
                <center>    
<img src="topo.png">
</center> 
<p><center><font color="red">Preparamos este formulário para você abrir um chamado de forma simples. Entraremos em contato o mais breve possível.</font></center></p>
            <form action="mensagemSuces.html" method="post">
                <fieldset>
                <label class="checkbox">
                ESTÁ COM PROBLEMAS NO SEU COMPUTADOR? QUAIS? POR FAVOR SELECIONE A OPÇÃO:
    <p><input type="checkbox" name="Op1" value="Opcao1">Manutenção do computador (micro não liga, travando, lento, com vírus, reinicia sozinho, etc)</p>
                    <p><input type="checkbox" name="Op2" value="Opcao2">Limpeza interna do Computador (micro com ruído elevado, desliga sozinho, tela azul, etc)</p>
                    <p><input type="checkbox" name="Op3" value="Opcao3">Formatação do computador (necessito que faça backup dos meus dados)</p>
<p><input type="checkbox" name="Op4" value="Opcao4">Formatação do computador (já realizei backup dos meus dados)</p>
<p><input type="checkbox" name="Op5" value="Opcao5">Atualização do seu computador (upgrade: troca de hardware/ componentes)</p>
                <p><input type="checkbox" name="Op6" value="Opcao6">Instalação e Configuração de Softwares (adobe PDF, java, office, anti-vírus, skype, outros )</p>
    <p><input type="checkbox" name="Op7" value="Opcao7">Instalação e Configuração de Internet (switch, modem, roteadores, etc)</p>
                    </label>
                    <p>DESCREVA ABAIXO SEU PROBLEMA</p>
                    
                    <insert> <p>Informe qual o tipo de problema que apresenta</p>
                    <textarea name="Problema" cols="60" rows="10"></textarea>
                    </insert>
<p>COMO DESEJA SER ATENDIDO?</p>
<p>Selecione abaixo uma opção</p>

<select name="Opção"><option value="SELECIONE" required="required"></option>
<option value="TI, Local">Enviem um Técnico até o meu Local(mediante consulta de disponibilidade)</option> 
                <option value="Remoto">Acesso Remoto</option> 
                <option value="Levarei">Levarei meu Computador até vocês</option> 
    </select>
    
    <p class="nome">QUAL SEU NOME?</p>
    <p>Informe abaixo nome completo sem abreviações</p>
    <input type="Text" name="Nome" size="40" id="nomeid" required="required" palceholder="Jimbo Doe">
                    
                    <p class="empresa">EMPRESA</p>
                    <p>Informe o nome da empresa, ou deixe em branco caso seja pessoa física</p>
                    <input type="Text" name="Empresa" size="40" required="required" placeholder="Jubilau LTD"> 

<p class="fone">TELEFONE COM DDD</p>
<input type="Text" name="TelFix" size="40" required="required" placeholder="55 3314-3980">

<p class="fone">NÚMERO WHATSAPP</p>
<p>Podemos entrar em contato pelo Whatsapp/Telegram para agilizar o atendimento</p>
                <input type="Text" name="whats" size="40" required="required" placeholder="55 99928-5918">
    
    <p class="email">EMAIL</p>
    <p>Informe abaixo seu e-mail para contato</p>
    <input type="Text" name="email" size="40" required="required" placeholder="Exemplo: shup@up.com">
                    
                    <p class="city_Adress">ENDEREÇO</p>
                    <input type="Text" name="endereco" size="40" required="required" placeholder="Exemplo: R Sul, 428">
                    <p class="city_name">CIDADE</p>
                    <input type="Text" name="city" size="40" required="required" placeholder="Exemplo: Santo Ângelo RS">
<select name="estado" id="estado">
<option>Selecione...</option>
<option value="AC">AC</option>
<option value="AL">AL</option>
<option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
    <option value="ES">ES</option>
    <option value="DF">DF</option>
    <option value="MA">MA</option>
    <option value="MT">MT</option>
    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
<option value="RN">RN</option>
<option value="RS">RS</option>
<option value="RO">RO</option>
<option value="RR">RR</option>
<option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>
    </select>
    </fieldset>
    
    <input type="Submit" value="Enviar " onclick=Enviar();> 
    <input type="Reset" id="Clean" value="Limpar Dados" onclick=Limpar();>
                    </form>
                    
                    <p>
                    <img src="https://png.icons8.com/ios/50/000000/whatsapp-filled.png">(55)9.99285918
                    </p>
                    <a href="https://www.facebook.com/computech.manutencao.9" target="parent"><img src="https://png.icons8.com/metro/50/000000/facebook.png">
</center> 

</article></h1>


<button> <class="btn"><a href="home1.html"> VOLTAR</button>
</html>
