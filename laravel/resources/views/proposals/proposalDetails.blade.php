@extends('main')

@section('title', 'Detalhes Proposta de Estágio ')

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
                                <td class="subtitle">{{$proposal->PROP_TITLE}}</td>
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
                                    <td class="cellcontent cellcontentwithinputtext">
                                        <span class="mandatory">
                                          Pendente
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">
                                        Número de Interessados:
                                    </td>
                                    <td class="cellcontent cellcontentwithinputtext">
                                      {{$proposal->PROP_INTERESTED}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">
                                        Descrição:
                                    </td>
                                    <td class="cellcontent cellcontentwithinputtext">
                                      {{$proposal->PROP_DESCRIPTION}}
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </td>
                    <td class="gea_flex_end">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{$proposal->PROP_PHOTO}}" id="prop_img_c" class="img_prop">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td class="gea_flex_end">
                        <table class="zoneformbuttons ">
                            <tbody>
                                <tr>
                                    <td>
                                      <form action="{{$proposal->PROP_ID}}" method="POST" >
                                          @csrf
                                        <input type="submit" value="Aprovar" class="button buttonFront">
                                        </form>
                                      </td>

                                      <td>
                                        <form action="{{$proposal->PROP_ID}}/r" method="POST" >
                                            @csrf
                                        <input type="submit" value="Rejeitar" action="{{$proposal->PROP_ID}}/r" class="button buttonBack">
                                        </form>
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
@endsection
