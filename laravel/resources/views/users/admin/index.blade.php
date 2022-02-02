<div id="wrap" class="wrap">
    <div id="navigation">
        <div id="avisoBrowserSemSuporte" class="avisoBrowserSemSuporteContainer" style="display: none;">
            <div class="avisoBrowserSemSuporte">
                <b><u>Aviso:</u></b> Apenas são suportados os browsers Firefox, I.E e Chrome.
            </div>
        </div>
        <script type="text/javascript">
            if (navigator.userAgent.indexOf("AppleWebKit") != -1 || navigator.userAgent.indexOf("Firefox") != -1 || navigator.userAgent.indexOf('Chrome') != -1 || navigator.appName == "Microsoft Internet Explorer" || (navigator.userAgent.indexOf('Windows NT') != -1 && navigator.userAgent.indexOf('rv:11.0') != -1)) {
                document.getElementById("avisoBrowserSemSuporte").style.display = 'none';
            } else {
                document.getElementById("avisoBrowserSemSuporte").style.display = 'block';
            }
        </script>
        <div class="navtableLight  hidden-tablet hidden-desktop avisoResMobileContainer">
            <div class="avisoResMobile">
                <div class="imagemResMobile"><img src="../images/images-PRT-CLOUD/landscape-mobile-icon.svg"></div><br>
                Recomendamos a utilização do modo paisagem.
            </div>
        </div>
        <style type="text/css">
            #context {
                padding: 0;
            }
        </style>
    </div>
    <div id="context" class="contextOverflow">

    </div>
    <div id="separatorsArea">
        <div class="linkFerramentas">
            <div id="linkFerramentas" style=""><a href="javascript: ferramentas();">Adicionar Ferramentas</a></div>
        </div>
    </div>
    <div id="content">
        <script type="text/javascript" src="../js/dashboard/jquery-1.5.1.min.js?v=1643324203147"></script>
        <script type="text/javascript" src="../js/dashboard/jquery-ui-1.8.13.custom.min.js?v=1643324203147"></script>
        <script type="text/javascript" src="../js/fullcalendar/jquery.qtip-1.0.0-rc3.js?v=1643324203147"></script>
        <script type="text/javascript" src="../js/dashboard/dash.js?v=1643324203147"></script>
        <style type="text/css">
            #separators {
                margin-left: inherit;
                border: none;
            }
        </style>
        <div id="tabelaFerramentas" class="unselectable" style="display:none;">
            <div class="dashFerramentas">
                <div class="dashWidgetHeaderMargin">
                    <div class="dashWidgetHeader removeHover">
                        <div class="left">&nbsp;<b><label>Adicionar Ferramentas</label></b></div>
                        <div class="right"><img title="Fechar" class="imgcloseFerramentas removeHover" style="cursor: pointer;" onclick="javascript: ferramentas();" src="../images/close.png?v=1643324203147"></div>
                    </div>
                </div>
                <div class="dashWidgetContent" align="left">
                    <div>
                        <div id="bigContainer" class="bigContainer" style="overflow: hidden; width: 1043px;">
                            <div id="bigContent" class="bigContent" style="width: 172px;">
                                <div id="prefTituloDefaultW_AL_09" style="display: none;"></div>
                                <div id="miniW_AL_09" class="miniWidget miniW_AL_09 ui-draggable" style="display: none;">
                                    <div class="miniWidgetHeader"></div>
                                    <label style="cursor: move;">Calendário</label>
                                </div>
                                <script type="text/javascript">
                                    tooltip("miniW_AL_09", "Permite visualizar as aulas, avaliações e as submissões calendarizadas.");
                                </script>
                                <div id="emptyminiW_AL_09" class="dashWidgetShadow" style="display: none;">
                                    <div class="dashWidget">
                                        <div class="dashWidgetHeaderMargin">
                                            <div class="dashWidgetHeader hover">
                                                <table style="width: 100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="94%" align="left">
                                                                <a class="removeHover" href="../util/menu.do?menu=23">
                                                                    <label style="cursor: pointer; font-weight: bold;">Calendário</label>
                                                                </a>
                                                            </td>
                                                            <td width="6%" align="right" style="visibility: visible;">
                                                                <img class="imgconf removeHover" onclick="javascript: openConfig('W_AL_09');" style="cursor: pointer;" height="13px" src="../images/tool.png?v=1643324203147">
                                                            </td>
                                                            <td width="6%" align="right" style="visibility: visible;">
                                                                <img class="imgclose removeHover" onclick="javascript: removerWidget('W_AL_09');" style="cursor: pointer;" src="../images/close.png?v=1643324203147">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="dashWidgetContent">
                                            <table width="100%" border="0" cellpadding="2" cellspacing="4">
                                                <tbody>
                                                    <tr>
                                                        <td width="100%" class="separator" align="center">
                                                            <img src="../images/progressIndicator.svg?v=1643324203147" align="absmiddle">&nbsp;&nbsp;A Processar por Favor Aguarde
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="prefTituloDefaultW_AL_06" style="display: none;">Últimos três meses</div>
                                <div id="miniW_AL_06" class="miniWidget miniW_AL_06 ui-draggable" style="display: none;">
                                    <div class="miniWidgetHeader"></div>
                                    <label style="cursor: move;">Material de Apoio</label>
                                </div>
                                <script type="text/javascript">
                                    tooltip("miniW_AL_06", "Permite visualizar o estado de visualização dos materiais de apoio de cada disciplina.");
                                </script>
                                <div id="emptyminiW_AL_06" class="dashWidgetShadow" style="display: none;">
                                    <div class="dashWidget">
                                        <div class="dashWidgetHeaderMargin">
                                            <div class="dashWidgetHeader hover">
                                                <table style="width: 100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="94%" align="left">
                                                                <a class="removeHover" href="../util/menu.do?menu=21">
                                                                    <label style="cursor: pointer; font-weight: bold;">Material de Apoio</label> - <label id="emptyminitituloPrefW_AL_06" class="labelPrefTitulo" style="cursor: pointer; font-weight: bold;">Últimos três meses</label>
                                                                </a>
                                                            </td>
                                                            <td width="6%" align="right" style="visibility: visible;">
                                                                <img class="imgconf removeHover" onclick="javascript: openConfig('W_AL_06');" style="cursor: pointer;" height="13px" src="../images/tool.png?v=1643324203147">
                                                            </td>
                                                            <td width="6%" align="right" style="visibility: visible;">
                                                                <img class="imgclose removeHover" onclick="javascript: removerWidget('W_AL_06');" style="cursor: pointer;" src="../images/close.png?v=1643324203147">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="dashWidgetContent">
                                            <table width="100%" border="0" cellpadding="2" cellspacing="4">
                                                <tbody>
                                                    <tr>
                                                        <td width="100%" class="separator" align="center">
                                                            <img src="../images/progressIndicator.svg?v=1643324203147" align="absmiddle">&nbsp;&nbsp;A Processar por Favor Aguarde
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="prefTituloDefaultW_AL_04" style="display: none;"></div>
                                <div id="miniW_AL_04" class="miniWidget miniW_AL_04 ui-draggable" style="display: block;">
                                    <div class="miniWidgetHeader"></div>
                                    <label style="cursor: move;">Normas e Procedimentos</label>
                                </div>
                                <script type="text/javascript">
                                    tooltip("miniW_AL_04", "Permite visualizar as normas e procedimentos por consultar.");
                                </script>
                                <div id="emptyminiW_AL_04" class="dashWidgetShadow" style="display: none;">
                                    <div class="dashWidget">
                                        <div class="dashWidgetHeaderMargin">
                                            <div class="dashWidgetHeader hover">
                                                <table style="width: 100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="94%" align="left">
                                                                <a class="removeHover" href="../util/menu.do?menu=28">
                                                                    <label style="cursor: pointer; font-weight: bold;">Normas e Procedimentos</label>
                                                                </a>
                                                            </td>
                                                            <td width="6%" align="right" style="visibility: visible;">
                                                                <img class="imgconf removeHover" onclick="javascript: openConfig('W_AL_04');" style="cursor: pointer;" height="13px" src="../images/tool.png?v=1643324203147">
                                                            </td>
                                                            <td width="6%" align="right" style="visibility: visible;">
                                                                <img class="imgclose removeHover" onclick="javascript: removerWidget('W_AL_04');" style="cursor: pointer;" src="../images/close.png?v=1643324203147">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="dashWidgetContent">
                                            <table width="100%" border="0" cellpadding="2" cellspacing="4">
                                                <tbody>
                                                    <tr>
                                                        <td width="100%" class="separator" align="center">
                                                            <img src="../images/progressIndicator.svg?v=1643324203147" align="absmiddle">&nbsp;&nbsp;A Processar por Favor Aguarde
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    &nbsp;&nbsp;<label style="color:#999;">Arraste os componentes para a área a tracejado.</label>
                </div>
            </div>
        </div>
        <div id="dash" class="unselectable">
            <div class="left2">
                <div id="W_AL_07" class="dashWidgetShadow">
                    <div class="dashWidget">
                        <div class="dashWidgetHeaderMargin">
                            <div class="dashWidgetHeader ">
                                <table style="width:100%;">
                                    <tbody>
                                        <tr>
                                            <td width="94%" align="left">
                                                <span style="font-weight: bold;">Balcão Académico</span>
                                            </td>
                                            <td width="6%" align="right" style="visibility: hidden;">
                                                <img src="../images/close.png?v=1643324203147">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="dashWidgetContentW_AL_07" class="dashWidgetContent">
                            <form id="vazioFormBean" method="post" action="/nonio/dashboard/w_al_07.do">
                                <table width="100%" border="0" cellpadding="2" cellspacing="2">
                                    <tbody>
                                        <tr>
                                            <td width="100%" align="left">
                                                Não existe informação relevante que requeira a sua atenção.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    var link = "w_al_07.do?args=12734014998514097&method=getW_AL_07";

                    $.ajax({
                        url: link,
                        type: 'post',
                        async: true,
                        success: function(msg) {
                            $("#W_AL_07").children(".dashWidget").children(".dashWidgetContent").html(msg);
                        },
                        error: function(msg) {
                            $("#imgconfW_AL_07").hide();
                            $("#W_AL_07").children(".dashWidget").children(".dashWidgetContent").html("<table width='100%' cellspacing='2' cellpadding='2' border='0'><tr><td><a href='../security/init.do'>" + $("#conteudoError").text() + "</a></td></tr></table>");
                        }
                    });
                </script>
                <div id="dashLeft" class="coluna ui-sortable">
                    <div id="W_AL_09" class="dashWidgetShadow">
                        <div class="dashWidget">
                            <div class="dashWidgetHeaderMargin">
                                <div class="dashWidgetHeader hover">
                                    <table style="width:100%;">
                                        <tbody>
                                            <tr>
                                                <td width="94%" align="left">
                                                    <a style="cursor: pointer;" class="removeSort removeHover" href="../util/menu.do?menu=23">
                                                        <span style="font-weight: bold;">Calendário</span>
                                                    </a>
                                                </td>
                                                <td width="6%" align="right" style="visibility: visible;">
                                                    <img id="imgconfW_AL_09" class="imgconf removeHover removeSort" onclick="javascript: openConfig('W_AL_09');" style="cursor: pointer;" height="13px" src="../images/tool.png?v=1643324203147">
                                                </td>
                                                <td width="6%" align="right" style="visibility: visible;">
                                                    <img id="imgcloseW_AL_09" class="imgclose removeHover removeSort" onclick="javascript: removerWidget('W_AL_09');" style="cursor: pointer;" src="../images/close.png?v=1643324203147">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="dashWidgetContentW_AL_09" class="dashWidgetContent">
                                <table style="width: 100%; border: none;">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <table style="width: 100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="tdAulas">
                                                                <a href="../util/menu.do?menu=23">
                                                                    Aulas
                                                                </a>
                                                                - <span>Dois dias</span>
                                                            </td>
                                                            <td class="tdAvaliacoes">
                                                                <a href="../util/menu.do?menu=27">
                                                                    Avaliações
                                                                </a>
                                                                - <span>Um Mês</span>
                                                            </td>
                                                            <td class="tdTrabalhos">
                                                                <a href="../util/menu.do?menu=26">
                                                                    Trabalhos
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td id="tdAulas">
                                                                <br>
                                                                <span>Não existem aulas no período temporal selecionado.</span>
                                                            </td>
                                                            <td id="tdAvaliacoes">
                                                                <div id="smallContainerW_AL_09_Avaliacoes" class="smallContainer smallContainerExtended" style="overflow: hidden;">
                                                                    <div id="smallContentW_AL_09_Avaliacoes" class="smallContent">
                                                                        <div>
                                                                            <table class="eventTable">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="dateEventTag">
                                                                                            <b>08/02<br>2022</b>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="eventTagSimples" onclick="javascript: submitToActionSemParams('w_al_09.do?args=12734015261870814');">
                                                                                                <label title="Gestão de Projeto">GP</label>
                                                                                                <span class="tagInscrito">[Inscrito]</span>
                                                                                                <br>
                                                                                                09:30 «2h»
                                                                                                <br>
                                                                                                Época de recurso
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div>
                                                                            <table class="eventTable">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="dateEventTag">
                                                                                            <b>10/02<br>2022</b>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="eventTagSimples" onclick="javascript: submitToActionSemParams('w_al_09.do?args=12734015262030743');">
                                                                                                <label title="Engenharia de Software">ES</label>
                                                                                                <span class="tagNaoInscrito">[Não Inscrito]</span>
                                                                                                <br>
                                                                                                14:30 «2h»
                                                                                                <br>
                                                                                                Época de recurso
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div>
                                                                            <table class="eventTable">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="dateEventTag">
                                                                                            <b>15/02<br>2022</b>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="eventTagSimples" onclick="javascript: submitToActionSemParams('w_al_09.do?args=12734015262085588');">
                                                                                                <label title="Introdução à Inteligência Artificial">IIA</label>
                                                                                                <span class="tagNaoInscrito">[Não Inscrito]</span>
                                                                                                <br>
                                                                                                09:30 «2h»
                                                                                                <br>
                                                                                                Época de Recurso
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div>
                                                                            <table class="eventTable">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="dateEventTag">
                                                                                            <b>17/02<br>2022</b>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="eventTagSimples" onclick="javascript: submitToActionSemParams('w_al_09.do?args=12734015262132950');">
                                                                                                <label title="Redes de Computadores II">RCII</label>
                                                                                                <span class="tagNaoInscrito">[Não Inscrito]</span>
                                                                                                <br>
                                                                                                09:30 «2h»
                                                                                                <br>
                                                                                                Época de Recurso
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="smallSliderContainerW_AL_09_Avaliacoes" class="smallSliderContainer" style="height: 300px;">
                                                                    <div id="smallSliderSubContainerW_AL_09_Avaliacoes" class="smallSliderSubContainer ui-slider ui-slider-vertical ui-widget ui-widget-content ui-corner-all" style="height: 70px; margin-top: 115px;"><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="bottom: 100%; height: 230px; margin-bottom: -115px;"></a></div>
                                                                </div>
                                                            </td>
                                                            <td id="tdTrabalhos">
                                                                <div id="smallContainerW_AL_09_Trabalhos" class="smallContainer smallContainerExtended" style="overflow: hidden; width: 100%; height: 258px;">
                                                                    <div id="smallContentW_AL_09_Trabalhos" class="smallContent">

                                                                        <table style="width: 100%;">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="eventTagTrabPorEntregar" onclick="javascript: submitToActionSemParams('w_al_09.do?method=detalhesTrabalhos&amp;id=140403&amp;feId=107150');">
                                                                                            <b>09 fev 2022 às 23:55</b>
                                                                                            <br>
                                                                                            <label title="Engenharia de Software">ES</label>
                                                                                            <b><span>[Por Entregar]</span></b>
                                                                                            <br>
                                                                                            <div class="divTrunc">Trabalho prático - recurso</div>
                                                                                        </div>
                                                                                        <div class="eventTagTrabPorEntregar" onclick="javascript: submitToActionSemParams('w_al_09.do?method=detalhesTrabalhos&amp;id=135922&amp;feId=107207');">
                                                                                            <b>12 fev 2022 às 23:00</b>
                                                                                            <br>
                                                                                            <label title="Gestão de Projeto">GP</label>
                                                                                            <b><span>[Por Entregar]</span></b>
                                                                                            <br>
                                                                                            <div class="divTrunc">Avaliação Recurso (Individual)</div>
                                                                                        </div>
                                                                                        <div class="eventTagTrabPorEntregar" onclick="javascript: submitToActionSemParams('w_al_09.do?method=detalhesTrabalhos&amp;id=135923&amp;feId=107207');">
                                                                                            <b>12 fev 2022 às 23:00</b>
                                                                                            <br>
                                                                                            <label title="Gestão de Projeto">GP</label>
                                                                                            <b><span>[Por Entregar]</span></b>
                                                                                            <br>
                                                                                            <div class="divTrunc">Avaliação Recurso (Grupo)</div>
                                                                                        </div>
                                                                                        <div class="eventTagTrabPorEntregar" onclick="javascript: submitToActionSemParams('w_al_09.do?method=detalhesTrabalhos&amp;id=135924&amp;feId=107207');">
                                                                                            <b>12 fev 2022 às 23:00</b>
                                                                                            <br>
                                                                                            <label title="Gestão de Projeto">GP</label>
                                                                                            <b><span>[Por Entregar]</span></b>
                                                                                            <br>
                                                                                            <div class="divTrunc">Submissão Projecto (Recurso)</div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript" style="">
                        var link = "w_al_09.do?args=12734014998582642&method=getW_AL_09";
                        $.ajax({
                            url: link,
                            type: 'post',
                            async: true,
                            success: function(msg) {
                                $("#W_AL_09").children(".dashWidget").children(".dashWidgetContent").html(msg);
                            },
                            error: function(msg) {
                                $("#imgconfW_AL_09").hide();
                                $("#W_AL_09").children(".dashWidget").children(".dashWidgetContent").html("<table width='100%' cellspacing='2' cellpadding='2' border='0'><tr><td><a href='../security/init.do'>" + $("#conteudoError").text() + "</a></td></tr></table>");
                            }
                        });
                    </script>
                </div>
            </div>
            <div class="right2">
                <div id="W_AL_01" class="dashWidgetShadow">
                    <div class="dashWidget">
                        <div class="dashWidgetHeaderMargin">
                            <div class="dashWidgetHeader ">
                                <table style="width:100%;">
                                    <tbody>
                                        <tr>
                                            <td width="94%" align="left">
                                                <a style="cursor: pointer;" class="removeSort " href="../util/menu.do?menu=10">
                                                    <span style="font-weight: bold;">Notificações</span>
                                                </a>
                                            </td>
                                            <td width="6%" align="right" style="visibility: hidden;">
                                                <img src="../images/close.png?v=1643324203147">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="dashWidgetContentW_AL_01" class="dashWidgetContent">
                            <table style="width: 100%;" border="0" cellpadding="2" cellspacing="2">
                                <tbody>
                                    <tr>
                                        <td width="100%" align="left">
                                            Não existem notificações por ler.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    var link = "w_al_01.do?args=12734014998638858&method=getW_AL_01";

                    $.ajax({
                        url: link,
                        type: 'post',
                        async: true,
                        success: function(msg) {
                            $("#W_AL_01").children(".dashWidget").children(".dashWidgetContent").html(msg);
                        },
                        error: function(msg) {
                            $("#imgconfW_AL_01").hide();
                            $("#W_AL_01").children(".dashWidget").children(".dashWidgetContent").html("<table width='100%' cellspacing='2' cellpadding='2' border='0'><tr><td><a href='../security/init.do'>" + $("#conteudoError").text() + "</a></td></tr></table>");
                        }
                    });
                </script>
                <div id="dashRight" class="coluna ui-sortable">
                    <div id="W_AL_06" class="dashWidgetShadow">
                        <div class="dashWidget">
                            <div class="dashWidgetHeaderMargin">
                                <div class="dashWidgetHeader hover">
                                    <table style="width:100%;">
                                        <tbody>
                                            <tr>
                                                <td width="94%" align="left">
                                                    <a style="cursor: pointer;" class="removeSort removeHover" href="../util/menu.do?menu=21">
                                                        <span style="font-weight: bold;">Material de Apoio</span> - <span id="tituloPrefW_AL_06" style="cursor: pointer; font-weight: bold;">Últimos três meses</span>
                                                    </a>
                                                </td>
                                                <td width="6%" align="right" style="visibility: visible;">
                                                    <img id="imgconfW_AL_06" class="imgconf removeHover removeSort" onclick="javascript: openConfig('W_AL_06');" style="cursor: pointer;" height="13px" src="../images/tool.png?v=1643324203147">
                                                </td>
                                                <td width="6%" align="right" style="visibility: visible;">
                                                    <img id="imgcloseW_AL_06" class="imgclose removeHover removeSort" onclick="javascript: removerWidget('W_AL_06');" style="cursor: pointer;" src="../images/close.png?v=1643324203147">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="dashWidgetContentW_AL_06" class="dashWidgetContent">
                                <div id="smallContainerW_AL_06" class="smallContainer" style="overflow: hidden; width: 100%; height: 26px;">
                                    <div id="smallContentW_AL_06" class="smallContent">
                                        <table width="100%" border="0" cellpadding="2" cellspacing="2">
                                            <tbody>
                                                <tr>
                                                    <td width="100%" align="left">

                                                        Não existem materiais atualizados ou por consultar.
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript" style="">
                        var link = "w_al_06.do?args=12734014998688381&method=getW_AL_06";

                        $.ajax({
                            url: link,
                            type: 'post',
                            async: true,
                            success: function(msg) {
                                $("#W_AL_06").children(".dashWidget").children(".dashWidgetContent").html(msg);
                            },
                            error: function(msg) {
                                $("#imgconfW_AL_06").hide();
                                $("#W_AL_06").children(".dashWidget").children(".dashWidgetContent").html("<table width='100%' cellspacing='2' cellpadding='2' border='0'><tr><td><a href='../security/init.do'>" + $("#conteudoError").text() + "</a></td></tr></table>");
                            }
                        });
                    </script>
                </div>
            </div>
            <div id="tabelaDashboard" class="dashboard unselectable"></div>
            <div id="clear" style="clear:both;"></div>
        </div>
        <div id="empty" class="dashWidgetShadow" style="display: none;">
            <div class="dashWidget">
                <div class="dashWidgetHeaderMargin">
                    <div class="dashWidgetHeader">
                        <div>
                            <div align="left">
                                &nbsp;<a id="emptyLink" class="removeHover" href="">
                                    <label id="emptyTitulo" style="cursor: pointer; font-weight: bold;"></label></a>
                            </div>
                            <div class="right" style="visibility: hidden">
                                <img class="imgclose removeHover" style="cursor: pointer;" src="../images/close.png?v=1643324203147">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="emptyDashWidgetContent" class="dashWidgetContent">
                    <div style="width:100%;">
                        <div class="separator" align="center">
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="progressIcon" style="display: none;">
            <div class="separator" align="center">
                <img src="../images/progressIndicator.svg?v=1643324203147" align="top">&nbsp;&nbsp;A Processar por Favor Aguarde
            </div>
        </div>
        <div id="conteudoError" style="display: none;">
            Recarregar
        </div>
        <div id="modal_avisos" style="display:none;" title="Avisos">
            <div id="calendar"></div>
        </div>
        <div class="clear">&nbsp;</div>
    </div>
</div>