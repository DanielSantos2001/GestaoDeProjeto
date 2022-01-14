@extends('header')

<div class="" bis_skin_checked="1">	
    <div class="wrap" bis_skin_checked="1">
    
        <div id="contentLogin" class="contentLogin" style="display: block;" bis_skin_checked="1">
            <div id="contentLoginMessageContainer" bis_skin_checked="1">
                <div id="contentLoginMessage" bis_skin_checked="1">
                    













                </div>
            </div>
            <div id="contentLoginContainer" class="contentLoginContainer" bis_skin_checked="1">
                
                <div class="contentLoginContainerRight" bis_skin_checked="1">
                    <table>
                        <tbody><tr>
                            <td class="tituloSeccaoLogin">
                                Bem-vindo ao Inforestudante
                            </td>
                        </tr>
                        <tr>
                            <td class="contentLoginContainerRightBody">
                                

<form id="loginFormBean" method="post" action="/nonio/security/login.do?method=submeter"><div bis_skin_checked="1"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="b6239d131a7c34dfffe7c20a4d75bffc"></div>

<input type="hidden" name="tipoCaptcha" value="text" id="tipoCaptcha">	   
<table class="logintable" style="width: 100%;">
   
   


<tbody><tr>
    <td>	
        
        <input type="text" name="username" value="" id="username" style="width: 100%" class="inputText focarPrimeiroElemento" placeholder="Utilizador">
    </td>
</tr>

<tr>
    <td><br>		           
        <input type="password" name="password" value="" id="password1" style="width: 100%" class="inputText" placeholder="Palavra-chave"><br>
        <span class="logintableSpan"><a href="recuperarPalavraChave.do" class="" bis_skin_checked="1"><span>Esqueceu-se da palavra-chave?</span></a></span>
    </td>
</tr>


<tr>
    <td>
        <div style="margin-top:8px;min-height: 50px; text-align: center;" bis_skin_checked="1">
            <span id="spanSubmitTag" style="display:none;"><img src="../images/progressIndicator.svg?v=1641501089115" align="absmiddle">&nbsp;&nbsp;A processar. Por favor aguarde.</span> <input type="submit" value="Entrar" onclick="escondeBotoesTagLib(this);" class="button">
        </div>
    </td>
</tr>
</tbody></table>
</form>


                            </td>
                        </tr>
                    </tbody></table>
                </div>
            
                <div id="contentLoginContainerLeft" class="contentLoginContainerLeft" bis_skin_checked="1">
                    
                    <div class="loginDesc" bis_skin_checked="1">
                        <table style="width: 100%;">
                            <tbody><tr>
                                <td class="tituloSeccaoLogin2">
                                    Inforestudante
                                </td>
                            </tr>
                            <tr>
                                <td id="contentLoginContainerLeftBody2">
                                    

<table style="width: 100%;">
<tbody><tr>
    <td>
           O InforEstudante é a plataforma de apoio aos alunos do Instituto Politécnico de Coimbra fazendo parte do sistema NONIO utilizado na Gestão Académica do Instituto Politécnico de Coimbra. Permite realizar:
           <ul><li>Candidaturas a cursos;</li><li>Matrículas e Inscrições;</li><li>Consultar pautas de avaliação;</li><li>Consultar Turmas, Horários e Sumários;</li><li>Consultar Informação sobre Cursos e Disciplinas;</li><li>Obter o seu suplemento ao Diploma.</li></ul>
    </td>
</tr>
</tbody></table>


                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    
                    <div class="loginDesc" bis_skin_checked="1">
                        <table style="width: 100%;">
                            <tbody><tr>
                                <td class="tituloSeccaoLogin2">
                                    

   Novo utilizador?


                                </td>
                            </tr>
                            <tr>
                                <td id="contentLoginContainerLeftBody3">
                                    

<table style="width: 100%;">




<tbody><tr>
    <td style="padding-bottom: 15px;">
           Se esta é a <b>primeira vez</b> que acede a este serviço como aluno e não sabe as suas credenciais por favor selecione o seguinte <a href="instrucoesPrimeiraVez.do" class="" bis_skin_checked="1"><span>link</span></a>.
    </td>
</tr>




    <tr>
        <td>
            Caso <b>não tenha acesso</b> ao Inforestudante e pretenda:
               <ul>
                
                    <li>Efetuar uma candidatura a um curso;</li>
                
                
                    <li>Efetuar uma candidatura a programas de mobilidade;</li>
                
                
                    <li>Efetuar uma candidatura a disciplinas isoladas;</li>
                
                
                    <li>Aderir à Rede Alumni;</li>
                
                
                    <li>Inscrição nas provas para acesso aos concursos especiais maiores de 23;</li><li>Inscrição nas provas de pré-requisitos ou de aptidão vocacional para concursos locais..</li>
                
                                            
               </ul>   	
        </td>
    </tr>
    <tr>
        <td>
            <form action="novoRegisto.do" target="_parent" method="POST"><input type="submit" name="voltar" value="Registar" class="button"></form>
        </td>
    </tr>

</tbody></table>

                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    
                    <div class="loginDesc" bis_skin_checked="1">
                        <table style="width: 100%;">
                            <tbody><tr>
                                <td class="tituloSeccaoLogin2">
                                    
Ajuda

                                </td>
                            </tr>
                            <tr>
                                <td id="contentLoginContainerLeftBody">
                                     
<table style="width: 100%;">
<tbody><tr>
    <td>
           <div style="margin-bottom: 10px;" bis_skin_checked="1">Caso necessite de ajuda, por favor não hesite em contactar-nos:</div>
<div bis_skin_checked="1"><a href="https://www.ipc.pt/pt/o-ipc/localizacao-e-contactos" target="_blank" bis_skin_checked="1"><img border="0" width="18" height="14" align="center" style="vertical-align: sub;" src="../images/email.png?v=1641501089115"> Contactos do Instituto Politécnico de Coimbra</a></div>

    </td>
</tr>
</tbody></table>

                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    
                </div>			
            </div>
        </div>
        
        
        


<div id="avisoJavaScript" style="margin-left: auto; margin-right: auto; display: none;" bis_skin_checked="1">
<script type="text/javascript">
<!--
document.getElementById ("avisoJavaScript").style.display='none';
if(document.getElementById ("contentLogin"))
document.getElementById ("contentLogin").style.display='block';
-->
</script>
<table class="zone" style="width: 60%; margin-left: auto; margin-right: auto; margin-top:100px;">
<tbody><tr>
<td style="min-height: 300px; text-align: center;">
    <br>
    <img src="../images/error_js.png?v=1641501089115">
    <br><br>
    <p>
        <span style="font-weight: bold;">
            Aviso(s):
        </span>
        O browser não tem suporte ativo para JavaScript. É necessária a sua ativação para poder continuar a usar a aplicação.
    </p>
</td>
</tr>
</tbody></table>
</div>

        <div class="clear" bis_skin_checked="1">&nbsp;</div>

    </div>
</div>