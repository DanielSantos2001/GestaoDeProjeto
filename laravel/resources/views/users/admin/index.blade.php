@extends('main')

@section('title', 'Página principal de Administrador')

@section('content')
<div id="flxContainer" style="display: block;">
    <div class="flxContainer" id="areaMenuConteudo">
        <div class="menu hidden-tablet hidden-phone" style="min-height: 900px;">
            <div class="menuTitle handMouseCursor" onclick="window.location ='/main'">
                <p>Menu</p>
            </div>
            <ul class="menuGroup">

                @if(Session::get('usertype') == 'docente' )
                <li class="menuItem">
                    <span class="menuItemTitle">
                        Docente
                    </span>
                    <ul class="menu-list">
                        <a href="/main/perfil">
                            <li class="">
                                Informação Pessoal
                            </li>
                        </a>
                        <a href="">
                            <li class="">
                                Acompanhamento de Estágio
                            </li>
                        </a>
                    </ul>
                </li>

                @endif

                <li class="menuItem">
                    <span class="menuItemTitle">
                        Administrador
                    </span>
                    <ul class="menu-list">
                        <a href="">
                            <li class="">
                                Propostas de Estágio
                            </li>
                        </a>
                        <a href="">
                            <li class="">
                                Minhas Propostas
                            </li>
                        </a>
                        <a href="/proposals/createProposal">
                            <li class="">
                                Criar Estágio
                            </li>
                        </a>
                        <a href="">
                            <li class="">
                                Candidatura Estágio
                            </li>
                        </a>
                        <a href="">
                            <li class="">
                                Criar Docente
                            </li>
                        </a>
                        <a href="">
                            <li class="">
                                Criar Não Docente
                            </li>
                        </a>
                        <a href="">
                            <li class="">
                                Registos
                            </li>
                        </a>
                        <a href="">
                            <li class="">
                                InfoDocente
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
        <div class="containermain">
            <div class="wrap">
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
                                                    <div id="notificacoes">

                                                        @php
                                                        $proposals = App\Http\Controllers\ProposalController::index();
                                                        @endphp

                                                        @if(count($proposals) == 0)
                                                        <p>Não existe estágios disponíveis</p>

                                                        @else
                                                        <table style="width: 100%" class="displaytable">
                                                            <thead>
                                                                <tr>
                                                                    <th class="cellheaderleft">Empresa</th>
                                                                    <th class="cellheader">Descrição de Estágio</th>
                                                                    <th class="cellheader">Estado</th>
                                                                    <th class="cellheader">&nbsp;</th> <!-- Para botão de detalhes -->
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <form id="destalhesEstagio" method="post" action="/destalhes">
                                                                    @csrf

                                                                    @foreach ($proposals as $proposal)

                                                                    @if($proposal->PROP_APPROVED == 0)
                                                                    <tr class="lightrow">
                                                                        <td class="contentLeft" style="width: 60%">
                                                                            {{App\Http\Controllers\PageController::buscarUtil($proposal->PROP_COMPANY_ID)}}
                                                                        </td>
                                                                        <td class="contentCenter" style="width: 30%">{{$proposal->PROP_DESCRIPTION}}</td>
                                                                        <td class="contentCenter" style="width: 30%">Pendete</td>
                                                                        <td class="contentCenter" style="width: 30%">
                                                                            <input type="hidden" name="id" value="{{$proposal->PROP_ID}}">
                                                                        </td>
                                                                        <td class="contentRight" style="width: 10%"><a class="botaodetalhes" href="/destalhes"> Detalhes</a></td>
                                                                    </tr>
                                                                    @endif
                                                                    @endforeach
                                                                </form>
                                                            </tbody>
                                                        </table>
                                                        @endif
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
    </div>
</div>
@endsection