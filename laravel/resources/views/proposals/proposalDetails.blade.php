@extends('main')

@section('title', 'Detalhes Proposta de Estágio ')

@section('content')
<div class="containermain">
    <div class="navtableLight">
        <a href="/main">
            <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
                Início
                <span class="arrow"></span>
            </span>
        </a>
        <span style="z-index: 1;" class=" lastArrow">
            Detalhes de Proposta de Estágio
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
                                    <td class="subtitle">{{ $proposal->PROP_TITLE }}</td>
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
                                    <td class="label">
                                        Estado:
                                    </td>
                                    <td class="cellcontentLarge mandatory">
                                        Pendente
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">
                                        Número de Intressados:
                                    </td>
                                    <td class="cellcontentLarge">
                                        {{ $proposal->PROP_INTERESTED }} Alunos
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">
                                        Descrição:
                                    </td>
                                    <td class="cellcontentLarge" style="margin-right: 10vw;">
                                        {{ $proposal->PROP_DESCRIPTION }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td class="contentRight gea_flex_end">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{ $proposal->PROP_PHOTO }}" id="prop_img_c" class="img_prop">

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="button" value="ficheiro.pdf" onclick="" class="button buttonFront">
                    </td>
                    <td class="gea_flex_end">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <form action="{{ $proposal->PROP_ID }}" method="POST">
                                            @csrf
                                            <input type="submit" value="Aprovar" class="button buttonFront">
                                        </form>
                                    </td>

                                    <td>
                                        <form action="{{ $proposal->PROP_ID }}/r" method="POST">
                                            @csrf
                                            <input type="submit" value="Rejeitar" action="{{ $proposal->PROP_ID }}/r" class="button buttonBack">
                                        </form>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
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
                                        <input type="button" value="Voltar" onclick="window.location='/main'" class="button buttonBack">
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