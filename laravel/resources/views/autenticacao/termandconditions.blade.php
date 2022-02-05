@extends('header')

    <div class="ui-widget ui-widget-content ui-corner-all " tabindex="-1" 
        aria-labelledby="ui-dialog-title-ecraModalPoliticaPrivacidade"
        style="display: block; outline: 0px; height: auto;">
        <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span class="ui-dialog-title"
                id="ui-dialog-title-ecraModalPoliticaPrivacidade"><strong>Política de Privacidade</strong></span><a href="#"
                class="ui-dialog-titlebar-close ui-corner-all" role="button" style="display: none;"><span
                    class="ui-icon ui-icon-closethick">close</span></a></div>
        <div id="ecraModalPoliticaPrivacidade" style="width: auto; min-height: 0px; height: auto;"
            class="ui-dialog-content ui-widget-content">
            <div id="ecraModalPoliticaPrivacidadeConteudo">
                <form id="formPoliticaDePrivacidade">
                    <div id="divFormPoliticaDePrivacidade" style="overflow-y: auto; ">
                        <div id="div_erros_preenchimento_formulario" class="boxTagLibErrors" style="display: none;">
                            <div class="contentTagLibErrors" align="left">
                                <ul id="errorList"></ul>
                            </div>
                        </div>

                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <table style="width:100%;">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <i class="remember"><strong>Em vigor desde:</strong>
                                                            16-04-2020</i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>



                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="horizontalline">
                                            <tbody>
                                                <tr>
                                                    <td class="subtitle">
                                                        Termos e condições de utilização
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="zonecontent">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p><b>Direitos de autor</b></p>
                                                        <p>Todos os textos, conteúdos e imagens deste portal pertencem ao
                                                            Instituto Politécnico de Coimbra (IPC), salvo outra indicação, e
                                                            só podem ser descarregados ou copiados sem prévia autorização do
                                                            IPC se se destinarem a fins de ensino, administração e
                                                            investigação da própria Instituição ou para uso pessoal, não
                                                            comercial.</p>
                                                        <p>Para citações e menção da fonte, deverá utilizar-se uma notação
                                                            que identifique o Instituto Politécnico de Coimbra e o endereço
                                                            Web dos conteúdos específicos consultados, com indicação das
                                                            datas de consulta desses mesmos conteúdos.</p>
                                                        <p><b>Exoneração de responsabilidade</b></p>
                                                        <p>Os dados contidos neste portal são divulgados simplesmente a
                                                            título informativo, não podendo o Instituto Politécnico de
                                                            Coimbra assumir a responsabilidade a seu respeito, nomeadamente:
                                                        </p>
                                                        <ul>
                                                            <li>O IPC não garante a inexistência de erros de conteúdos, no
                                                                que respeita à divulgação ou à atualização da informação,
                                                                sem prejuízo de desenvolver todos os esforços no sentido de
                                                                divulgar apenas informações atualizadas e rigorosas.
                                                                Procuramos corrigir todos os erros que nos forem
                                                                comunicados.</li>
                                                            <li>O IPC não assume qualquer responsabilidade pela utilização
                                                                dos dados ou informações constantes deste portal por parte
                                                                de quem o visita. Os utilizadores deverão, portanto, tomar
                                                                todas as precauções necessárias antes de utilizarem os
                                                                referidos dados. Tal utilização é efetuada por sua própria
                                                                conta e risco.</li>
                                                            <li>As informações constantes deste portal podem conter ligações
                                                                para portais externos sobre os quais o IPC não tem qualquer
                                                                controlo e pelos quais não assume qualquer responsabilidade.
                                                            </li>
                                                            <li>O IPC reserva-se ao direito de modificar e/ou atualizar, a
                                                                qualquer momento, as informações constantes neste portal,
                                                                assim como alterar a sua apresentação ou configuração, sem
                                                                necessidade de aviso prévio.</li>
                                                        </ul>
                                                        <p></p>
                                                        <p><b>Política de privacidade/confidencialidade de dados</b></p>
                                                        <p>O Instituto Politécnico de Coimbra respeita o seu direito à
                                                            privacidade e não recolhe neste portal qualquer informação
                                                            pessoal sobre os utilizadores sem o seu consentimento ou de
                                                            forma ilícita.</p>
                                                        <p>O Instituto Politécnico de Coimbra, enquanto organização que lida
                                                            diariamente com dados pessoais, considera-se comprometida com as
                                                            matérias reguladas e as obrigações impostas pela legislação
                                                            europeia sobre proteção de dados constituída, nomeadamente, pelo
                                                            Regulamento (EU) 2016/679 do Parlamento e do Conselho - RGPD
                                                            (relativo à proteção das pessoas singulares no que diz respeito
                                                            ao tratamento de dados pessoais e à livre circulação desses
                                                            dados). Assim, quaisquer dados pessoais que sejam fornecidos
                                                            serão tratados com as garantias de segurança e
                                                            confidencialidade, exigidas pela referida legislação e demais
                                                            normativos legais aplicáveis.</p>
                                                        <p><b>Política de Cookies</b></p>
                                                        <p>No portal do Instituto Politécnico de Coimbra, são utilizados
                                                            cookies próprios e de terceiros. Alguns cookies são obrigatórios
                                                            para a navegação e são ativados automaticamente na utilização do
                                                            portal. Nenhum dos cookies utilizados no portal do IPC armazena
                                                            informação pessoal do utilizador, tais como o nome, telefone ou
                                                            morada. São utilizados única e exclusivamente para melhorar o
                                                            desempenho do portal e melhorar a experiencia do utilizador.</p>
                                                        <p>O portal do IPC utiliza cookies do Google Analytics para recolher
                                                            dados relacionados com os dispositivos/navegadores de acesso e
                                                            atividades de navegação com o objetivo de produzir estatísticas
                                                            de utilização.</p>
                                                        <p>A qualquer momento, o utilizador pode bloquear ou desativar os
                                                            cookies previamente armazenados no seu dispositivo. Este
                                                            bloqueio ou desativação poderá limitar ou impossibilitar o
                                                            acesso a determinadas áreas ou conteúdos do portal.</p>
                                                        <p><b>Aceitação e vinculação</b></p>
                                                        <p>Todos os utilizadores ao acederem e utilizarem este portal do
                                                            Instituto Politécnico de Coimbra, estão vinculados à aceitação e
                                                            respeito pelas condições aqui expressas.</p>
                                                        <p>Para qualquer esclarecimento adicional sobre os termos e
                                                            condições de utilização ou politica de privacidade deste portal,
                                                            contacte o Encarregado de Proteção de Dados, através do telefone
                                                            239791250, ou endereço de correio eletrónico epd@ipc.pt.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>





                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="horizontalline">
                                            <tbody>
                                                <tr>
                                                    <td class="subtitle">
                                                        Utilização/Recolha de dados pessoais
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="zonecontent">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p>O IPC, enquanto organização que lida diariamente com dados
                                                            pessoais, considera-se comprometida com as matérias reguladas e
                                                            as obrigações impostas pela nova legislação europeia sobre
                                                            proteção de dados constituída, nomeadamente, pelo Regulamento
                                                            (EU) 2016/679 do Parlamento e do Conselho - RGPD (relativo à
                                                            proteção das pessoas singulares no que diz respeito ao
                                                            tratamento de dados pessoais e à livre circulação desses
                                                            dados).<br>Assim, os dados pessoais recolhidos neste
                                                            questionário não serão objeto de tratamentos adicionais, sendo
                                                            os mesmos arquivados pelos responsáveis pelo tratamento dos
                                                            dados, sendo destruídos um mês após deixarem de ser relevantes
                                                            para as atividades que se pretendem promover.<br>Qualquer dúvida
                                                            relativa a esta matéria ou ao RGPD pode ser endereçada ao
                                                            Encarregado de proteção dos dados do IPC – epd@ipc.pt</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>

