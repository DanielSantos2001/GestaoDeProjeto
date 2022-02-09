@extends('layout')

@section('title', 'Detalhes da Proposta de Estágio')

@section('content')
<div class="containermain">

  <table class="page">
    <tbody>
      <tr>
        <td>
          <table style="width: 70%" class="zone">
            <tbody>
              <tr>
                <td>
                  <table class="horizontalline">
                    <tbody>
                      <tr>
                        <td class="subtitle">
                          <label>{{$proposal->PROP_TITLE}}</label>
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

                          <table cellpadding="8" cellspacing="8" style="width: 100%" class="displaytable">

                            <tbody>
                              <tr>
                                <td class="label">ESTADO:</td>
                                <td class="cellcontentLarge">
                                  @if ($proposal->PROP_APPROVED == 0) Pendente
                                  @elseif ($proposal->PROP_APPROVED == 1) Aprovada
                                  @else Rejeitada
                                  @endif </td>
                                <td rowspan="6" class="cellcontentSmall"> <img src="{{$proposal->PROP_PHOTO}}" width="128" height="128"></td>

                              </tr>

                              <tr>
                                <td class="label">Número de Interessados:</td>
                                <td class="cellcontentLarge">{{$proposal->PROP_INTERESTED}}</td>
                              </tr>

                              <tr>
                                <td class="label">Descrição:</td>
                                <td class="cellcontentLarge">{{$proposal->PROP_DESCRIPTION}}</td>
                              </tr>
                              @if ($proposal->PROP_APPROVED==0)


                              <tr>
                                <td rowspan="1" class="zoneLinks">
                                  <form class="" action="{{$proposal->PROP_ID}}" method="post">
                                    @csrf
                                    <button type="submit" name="button" class="botaodetalhes">Aceitar</button>
                                  </form>
                                  <!--<a href="#" class="botaodetalhes"><span>Aceitar</span></a>-->
                                </td>
                                <td rowspan="1" class="zoneLinks">
                                  <form class="" action="{{$proposal->PROP_ID}}/r" method="post">
                                    @csrf
                                    <button type="submit" name="button" class="botaodetalhes">Rejeitar</button>
                                  </form>
                                  <!--<a href="#" class="botaodetalhes"><span>Rejeitar</span></a> -->
                                </td>
                              </tr>
                              @endif
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
        </td>
      </tr>
    </tbody>
  </table>
</div>


@endsection