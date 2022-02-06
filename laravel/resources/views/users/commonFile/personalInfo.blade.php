@extends('main')

@section('title', 'Informação Pessoal')

@section('content')
<div class="navtableLight">
    <a href="#">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span>
        </span>
    </a>
    <span style="z-index: 1;" class=" lastArrow">Informação Pessoal<span class="arrow"></span></span>
    <br>
</div>
<br>
<div id="context" class="contextOverflow"></div>
<div id="content">
    <table class="page zone">
        <tbody>
            <tr>
                <td>
                    <table class="horizontalline">
                        <tbody>
                            <tr>
                                <td class="subtitle">
                                    Informação Pessoal
                                </td>
                                <td class="zonelinks">
                                    <a href="#" class="botaodetalhes"><span>Alterar Palavra-chave</span></a>
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
                                <td class="label" id="lblnome">
                                    Nome Completo:
                                </td>
                                <td class="cellcontentLarge" id="nome">
                                    {{$user->USER_NAME}}
                                </td>
                            </tr>
                            <tr>
                                <td class="label" id="lblestado">
                                    Estado:
                                </td>
                                <td class="cellcontentLarge" id="estado">
                                    Ativo
                                </td>
                            </tr>
                            <tr>
                                <td class="label" id="lblmailOficial">
                                    Email:
                                </td>
                                <td class="cellcontentLarge" id="mailOficial">
                                    {{$user->USER_MAIL}}
                                </td>
                            </tr>
                            @if(Session::get('usertype') == 'estudante')
                            <tr>
                                <td class="label">
                                    Curso:
                                </td>
                                <td class="cellcontentLarge">
                                    {{ Session::get('usercourse') }}
                                </td>
                            </tr>
                            @elseif(Session::get('usertype') == 'empresa')
                            <tr>
                                <td class="label">
                                    Contacto:
                                </td>
                                <td class="cellcontentLarge">
                                    {{ $info['contacto'] }}
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    Morada:
                                </td>
                                <td class="cellcontentLarge">
                                    {{ $info['morada'] }}
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection