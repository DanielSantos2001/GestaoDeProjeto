@extends('header')

    <body onload='initDynamicOptionLists();'>
        <div id="master">
            <div id="header">
                <table class="headerTable">
                    <tbody>
                        <tr>
                            <td>
     
                                <a href="http://inforestudante.ipc.pt/nonio/security/init.do">								
                                    <img src="/img/IPC-PRETO.png" class="hidden-phone hidden-tablet header-normal" border="0">
                                    <img src="/img/IPC-PRETO.png" class="hidden-desktop header-mobile" border="0">
                                </a>
                            </td>
                            <td>
                                <table>
                                    <tr>
                        
                                        <td class="hidden-phone">
                                             <span class="hidden-tablet">Nome do Utilizador/Numero&nbsp;|&nbsp;</span><a class="navtableGo" href="/logout">Sair</a>   
                                        </td>
                                        <td>     
                                        </td>
                                            <td class="hidden-tablet hidden-desktop">
                                                <button id="link-menu-mob" class="link-menu-mob" href="#">
                                                    <div class="button-menu-bar"></div>
                                                    <div class="button-menu-bar"></div>
                                                    <div class="button-menu-bar"></div>
                                                </button>
                                            </td>
                                        
                                    </tr>
                                </table>
                            </td>
                        </tr>								
                    </tbody>
                </table>
            </div>
            <div id="flxContainer" style="display: block;">
                <div class="flxContainer" id="areaMenuConteudo">           
                    <div class="menu hidden-tablet hidden-phone" style="min-height: 900px;">
                        <div class="menuTitle handMouseCursor" onclick="window.location ='../security/init.do'">					    			    
                            <p>GEA</p>
                        </div>	
                        <ul class="menuGroup">
                            <li class="menuItem">		
                                <span class="menuItemTitle">
                                    Administrador
                                </span>
                                    <ul class="menu-list">
                                                <a href="../util/menu.do?menu=5">	
                                                    <li class="menu_5">																		
                                                        1									
                                                    </li>
                                                </a>															
                                                <a href="../util/menu.do?menu=6">
                                                    <li class="menu_6">									
                                                        2									
                                                    </li>
                                                </a>								
                                                <a href="../util/menu.do?menu=10">
                                                    <li class="menu_10">																	
                                                        3 																		
                                                    </li>
                                                </a> 
                                                                            
                                                <a href="../util/menu.do?menu=23">									
                                                    <li class="menu_23">
                                                        4																		
                                                    </li>
                                                </a>
                                    </ul>
                                
                            </li>
                                <li class="menuItem">
                
                                    <span class="menuItemTitle">
                                        Docente
                                    </span>
                                    
                                    
                                        <ul class="menu-list">
                                                <a href="../util/menu.do?menu=20">
                                                    <li class="menu_20">																
                                                        1															
                                                    </li>
                                                </a>							
                                                <a href="../util/menu.do?menu=25">
                                                    <li class="menu_25">							
                                                        2																
                                                    </li>
                                                </a>
                                                                    
                                                <a href="../util/menu.do?menu=21">
                                                    <li class="menu_21">							
                                                        3															
                                                    </li>
                                                </a>
                                            
                                                <a href="../util/menu.do?menu=24">
                                                    <li class="menu_24">																
                                                        4																
                                                    </li>
                                                </a>
                                            
                                                <a href="../util/menu.do?menu=26">
                                                    <li class="menu_26">						
                                                        5								
                                                    </li>
                                                </a>
        
                                                <a href="../util/menu.do?menu=27">
                                                    <li class="menu_27">							
                                                        6							
                                                    </li>
                                                </a>								 
                                                    <a href="../util/menu.do?menu=43">	
                                                        <li class="menu_43">								   									
                                                            7							
                                                        </li>
                                                    </a>									                               
                                                <a href="../util/menu.do?menu=31">
                                                    <li class="menu_31">							
                                                        8							
                                                    </li>
                                                </a>								                                
                                                <a href="../util/menu.do?menu=36">
                                                    <li class="menu_36">						
                                                        9							
                                                    </li>
                                                </a>								    
                                        </ul>
                                    
                                </li>
                                <div style="position: relative; bottom:0;">
                                    <ul class="menuGroup">
                                    <li class="menuItem">
                                        <ul class="menu-list" style="list-style: none;">			
                                            <li>
                                                <a onclick="abrirEcraModalPrivacidade();">					
                                                    <span class="hand" id="politicaPrivacidade">Política de Privacidade</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    </ul>
                                </div>
                        </ul>
                
                    </div>
                
                    <div class="countainermain">
                        <div class="wrap">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer">
                <div class="footerTable">
                    <div class="footerTableBody">
                        <div class="footerTableRow">
                            <div class="footerTableLeft">
                                
                                    
                                        <div class="menuLastAcess">
                                            <strong> Último acesso: </strong><br class="hidden-desktop">
                                            23-12-2021 13:10
                                        </div>
                                               
                            </div>
                        </div>
                    </div>
                            
                        <div class="footerTableMiddle">
                            <table class="footerLogo">
                                <tbody><tr>
                                    <td width="100%">
                                        &nbsp;
                                    </td>
                                </tr>
                                    </tbody></table>
                        </div>
                            <div class="footerTableRight">
                                2021&nbsp;·&nbsp;IPC&nbsp;·&nbsp;
                            </div>
                        </div>
            </div>  
            
        </div> 
        
    </body>       
</html>
