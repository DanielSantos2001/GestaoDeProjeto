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
    <a href="/registoconta">
        <span style="z-index: 2;" class="lightArrow clickArrow">
            Registos de Contas
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
                                    {{ $empresas->USER_NAME }}
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
                                    Nome da Empresa:
                                </td>
                                <td class="cellcontentLarge" id="nome">
                                    {{ $empresas->USER_NAME }}
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    Contacto Telefónico:
                                </td>
                                <td class="cellcontentLarge">
                                    {{ $empresas->USER_CONTACT }}
                                </td>
                            </tr>
                            <tr>
                                <td class="label" id="email">
                                    Email:
                                </td>
                                <td class="cellcontentLarge" id="mailOficial">
                                    {{ $empresas->USER_MAIL }}
                                </td>
                            </tr>

                            <tr>
                                <td class="label">
                                    Morada:
                                </td>
                                <td class="cellcontentLarge">
                                    {{ $empresas->USER_ADDRESS }}
                                </td>
                            </tr>
                            <tr>
                                <td class="label" id="estado">
                                    Estado:
                                </td>
                                <td class="cellcontentLarge" id="estado">
                                    @if($empresas->USER_STATE == 1)
                                    Ativo
                                    @else
                                    Inativo
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            @if($empresas->USER_STATE == 0)
            <tr class="gea_flex_end">
                <form id="estadoEmpresa" method="post" action="/registoconta/detalhes/change">
                    @csrf
                    <input type="hidden" name="id" value="{{ $empresas->USER_ID }}">
                    <input type="hidden" id="value" name="value" value="">
                    <td>
                        <input type="submit" value="Aceitar" onclick="changeValueOne();" class="button buttonFront">
                    </td>
                    <td>
                        <input type="submit" value="Rejeitar" onclick="changeValueZero();" class="button buttonBack">
                    </td>
                </form>
            </tr>
            @endif
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
                                    <input type="button" value="Voltar" onclick="window.location='/registoconta'" class="button buttonBack">
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
    function changeValueOne() {
        document.getElementById('value').value = 1;
    }
    
    function changeValueZero() {
        document.getElementById('value').value = 0;
    }
</script>
@endsection