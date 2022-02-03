@extends('main')

@section('title', 'Página principal de Administrador')

@section('content')
<div id="context" class="contextOverflow"></div>
<div id="content">
    @include('searchTab')
    <table class="page zone">
        <tbody>
            <tr>
                <td>
                    <table class="horizontalline">
                        <tbody>
                            <tr>
                                <td class="subtitle">
                                    Propostas de Estágio
                                </td>
                                <td class="contentRight">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16">
                                            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                                        </svg>
                                    </a>
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
                                    <table style="width: 100%" class="displaytable">
                                        <thead>
                                            <tr>
                                                <th class="cellheaderleft">Empresa</th>
                                                <th class="cellheader">Descrição</th>
                                                <th class="cellheader">Estado</th>
                                                <th class="cellheader">&nbsp;</th> <!-- Para botão de detalhes -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="lightrow">
                                                <td class="contentLeft">Empresa exemplo 1</td>
                                                <td class="contentCenter" style="width: 40%">Configurar Redes</td>
                                                <td class="contentCenter" style="width: 20%"><label title="T1">Pendente</label></td>
                                                <td class="contentRight" style="width: 10%"><a class="botaodetalhes" href="#"> Detalhes</a></td>
                                            </tr>
                                            <tr class="lightrow">
                                                <td class="contentLeft">Empresa exemplo 2</td>
                                                <td class="contentCenter" style="width: 40%">Gestão Organizacional do grupo de Armazenamento</td>
                                                <td class="contentCenter" style="width: 20%"><label title="T1">Pendente</label></td>
                                                <td class="contentRight" style="width: 10%"><a class="botaodetalhes" href="#"> Detalhes</a></td>
                                            </tr>
                                            <tr class="lightrow">
                                                <td class="contentLeft">Empresa exemplo 3</td>
                                                <td class="contentCenter" style="width: 40%">Contabilidade no mini-mercado local</td>
                                                <td class="contentCenter" style="width: 20%"><label title="T1">Pendente</label></td>
                                                <td class="contentRight" style="width: 10%"><a class="botaodetalhes" href="#"> Detalhes</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection