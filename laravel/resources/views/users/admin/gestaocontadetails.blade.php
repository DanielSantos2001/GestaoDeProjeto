@extends('main')

@section('title', 'Detalhes da Conta')

@section('content')
<div class="navtableLight">
    <a href="/main">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span>
        </span>
    </a>
    <a href="/gestaoconta">
        <span style="z-index: 2;" class="lightArrow clickArrow">
            Gestão de Contas
            <span class="arrow"></span>
        </span>
    </a>
    <span style="z-index: 1;" class=" lastArrow">
        Detalhes
        <span class="arrow"></span>
    </span>
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
                                    {{$user->USER_NAME}}
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
                                <td class="label" id="nome">
                                    Nome Completo:
                                </td>
                                <td class="cellcontentLarge" id="nome">
                                    {{$user->USER_NAME}}
                                </td>
                            </tr>
                            <tr>
                                <td class="label" id="estado">
                                    Estado:
                                </td>
                                <td class="cellcontentLarge" id="estado">
                                    Pendente
                                </td>
                            </tr>
                            <tr>
                                <td class="label" id="email">
                                    Email:
                                </td>
                                <td class="cellcontentLarge" id="mailOficial">
                                    {{$user->USER_MAIL}}
                                </td>
                            </tr>
                            @if($user->USER_TYPE== 'docente')
                            <tr>
                                <td class="label">
                                    Curso:
                                </td>
                                <td class="cellcontentLarge">
                                    {{ App\Http\Controllers\PageController::cursoExtenso($user->USER_COURSE) }}
                                </td>
                            </tr>
                            @endif
                            <tr>
                                <td class="label">
                                    Premissões de <br> Administrador:
                                </td>
                                <td class="cellcontentLarge">
                                    <br>
                                    {{$user->USER_ADMIN}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <form id="estadogestao" method="post" action="/gestaoconta/detalhes/change">
                @csrf 
                <input type="hidden" name="id" value="{{$user->USER_ID}}">
                <input type="hidden" name="valoralterado" id="valoralterado" value="">
                @if($user->USER_STATE==1)
                <tr class="gea_flex_end">
                    <td>
                        <input type="submit" value="Desativar" onclick="desativar()" class="button buttonFront">
                    </td>
                </tr>
                @elseif ($user->USER_STATE==0)
                <tr class="gea_flex_end">
                    <td>
                        <input type="submit" value="Ativar" onclick="ativar()" class="button buttonFront">
                    </td>
                </tr>
                @endif
            </form>
        </tbody>
    </table>
    <table class="page">
        <tbody>
            <tr>
                <td class="flex_buttons_int">
                    <table class="zoneformbuttons">
                        <tbody>
                            <tr>
                                <td>
                                    <input type="button" value="Voltar" onclick="window.location='/gestaoconta'" class="button buttonBack">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>

function desativar(){
    document.getElementById('valoralterado').value = 0;
}

function ativar(){
    document.getElementById('valoralterado').value = 1;
}

</script>
@endsection

