@extends('main')

@section('title', 'Confirmação da Conta')

@section('content')
<div class="navtableLight">
    <a href="/main">
        <span id="spanPrimeiroElementoBarraNavegacao" class="darkArrow clickArrow" style="z-index: 100;">
            Início
            <span class="arrow"></span>
        </span>
    </a>
    @if($user->USER_TYPE == 'admindocente')
    <a href="/users.create.docente">
        <span style="z-index: 2;" class="lightArrow clickArrow">
            Criar Docente
            <span class="arrow"></span>
        </span>
    </a>
    @elseif($user->USER_TYPE == 'admin')
    <a href="">
        <span style="z-index: 2;" class="lightArrow clickArrow">
            Criar Não Docente
            <span class="arrow"></span>
        </span>
    </a>
    @endif
    <span style="z-index: 1;" class=" lastArrow">
        Confirmação
        <span class="arrow"></span>
    </span>
    <br>
</div>
<br>
<div id="context" class="contextOverflow"></div>
<div id="content">
    <form id="register" method="post" action="/users.create.docente">
        @csrf
        <input type="hidden" name="username" value="{{$user->USER_NAME}}">
        <input type="hidden" name="email" value="{{$user->USER_MAIL}}">
        <input type="hidden" name="userpass" value="{{$user->USER_PWD}}">
        <input type="hidden" name="admin" value="{{$user->USER_ADMIN}}">
        @if($user->USER_TYPE == "admindocente")
        <input type="hidden" name="usercourse" value="{{$user->USER_COURSE}}">
        @endif
        <table class="page zone">
            <tbody>
                <tr>
                    <td class="label">
                        Nome Completo:
                    </td>
                    <td class="cellcontentSmall" id="nome">
                        {{ $user->USER_NAME }}
                    </td>
                </tr>
                <tr>
                    <td class="label">
                        E-Mail:
                    </td>
                    <td class="cellcontentSmall" id="email">
                        {{ $user->USER_MAIL }}
                    </td>
                </tr>
                @if($user->USER_TYPE == 'admindocente')
                <tr>
                    <td class="label">
                        Curso:
                    </td>
                    <td class="cellcontentSmall" id="curso">
                        {{ App\Http\Controllers\PageController::cursoExtenso($user->USER_COURSE) }}
                    </td>
                </tr>
                @endif
                <tr>
                    <td class="label">
                        Premissões de Administrador:
                    </td>
                    <td class="cellcontentSmall" id="admin">
                        @if($user->USER_ADMIN == 1)
                        Sim
                        @else
                        Não
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="page">
            <tbody>
                <tr>
                    <td>
                        <table class="zoneformbuttons">
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="submit" value="Confirmar" onclick="" class="button buttonFront">
                                        <input type="button" value="Voltar" onclick="window.location='/users.create.docente'" class="button buttonBack">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
@endsection