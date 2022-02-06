@extends('main')

@section('title', 'Detalhes da Ata')

@section('content')
<div class="navtableLight">
    <a href="#">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span></span>
    </a>
    <a href="#">
        <span style="z-index: 2;" class="lightArrow clickArrow">
            Meu Estágio
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
                                    Ata Exemplo 1
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
                                <td class="label">
                                    Data:
                                </td>
                                <td class="cellcontentLarge">
                                    01-01-01
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    Descrição:
                                </td>
                                <td class="cellcontentLarge">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Nulla eleifend arcu quis tortor dignissim dignissim.
                                    Pellentesque non aliquet mauris.
                                    Phasellus orci nisi, ullamcorper non elit eu, dignissim pretium nisl.
                                    Donec in molestie diam, sed pulvinar sapien.
                                    Cras porta sed velit ac vehicula.
                                    Nunc diam diam, suscipit sit amet venenatis vel, egestas at turpis.
                                    Donec orci lacus, tincidunt ac pellentesque dictum, ultrices at lacus.
                                    Maecenas imperdiet id ex eget sagittis.
                                </td>
                            </tr>
                            <tr>
                                <td class="cellcontentLarge">
                                    <a class="botaodetalhes" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                        </svg>&nbsp;
                                        horario.pdf
                                    </a>
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