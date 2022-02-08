@extends('layout')

@section('title', 'Cria Proposta de Estágio')

@section('content')

<div style="margin-left: 85px; margin-bottom: 30px; margin-top: 50px;">
  <p><a href="/main">Inicio</a> > Criar Proposta de Estágio</p>
</div>

<div class="gea-form-container" style="margin-left: 80px">
  <table>
    <tbody>
      <tr>
        <td>
          <table class="zone">
            <tbody>
              <tr>
                <td>
                  <table class="horizontalline">
                    <tbody>
                      <tr>
                        <td class="subtitle">
                          <label>Criar Nova Proposta</label>
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

                          <table cellpadding="4" cellspacing="2" style="width: 100%" class="displaytable">
                            <thead>

                            </thead>
                            <tbody>
                              <tr>
                                <div id="proposal-create">

                                  <form action="/proposals" method="POST" enctype="multipart/form-data">
                                    @csrf
                              <tr>
                                <div class="input-group mb-3 gea_relative">
                                  <span class="input-group-text" id="titulo" style="margin-right: 1vw;">
                                    <p class="asterisk_red">*</p>Titulo
                                  </span>
                                  <input type="text" class="form-control gea-title-form" placeholder="Titulo" name="titulo" aria-describedby="basic-addon1">
                                </div>
                              </tr>
                              <tr>
                                <div class="input-group mb-3 gea_relative">
                                  <span class="input-group-text gea_left_top" id="titulo" style="margin-right: 1vw">
                                    <p class="asterisk_red_description">*</p>Descrição
                                  </span>
                                  <textarea name="descricao" rows="6" cols="30" style="resize: none;"></textarea>
                                  <!--<input type="text" class="form-control" placeholder="Descrição" name="descricao" aria-describedby="basic-addon1">-->
                                </div>
                              </tr>
                              <tr>
                                <div class="input-group mb-3 gea_relative">
                                  <span class="input-group-text gea_left_top" id="perfil" style="margin-right: 1vw">
                                    <p class="asterisk_red_description">*</p>Perfil do candidato
                                  </span>
                                  <textarea name="perfil" rows="4" cols="20" style="resize: none;"></textarea>
                                  <!--<input type="text" class="form-control" placeholder="Perfil" name="perfil" aria-describedby="basic-addon1">-->
                                </div>
                              </tr>
                              <tr>

                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="vagas">Vagas</span>
                                  <input type="number" class="form-control" placeholder="Numero de Vagas" name="vagas" aria-describedby="basic-addon1" min="1" step="1" max="20" data-bind="value:replyNumber">
                                </div>
                              </tr>
                              <tr>

                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="curso">Curso</span>
                                  <select class="custom-select mr-sm-2" id="curso" name="curso">
                                    <option selected>Choose...</option>
                                    <option value="LEI">LEI</option>
                                    <option value="LSTI">LSTI</option>
                                    <option value="LG">LG</option>
                                    <option value="LM">LM</option>
                                    <option value="LGB">LGB</option>
                                    <option value="LCA">LCA</option>
                                    <option value="LII">LII</option>
                                    <option value="LDROT">LDROT</option>
                                  </select>
                                  {{--<input type="text" class="form-control" placeholder="Nome do Curso" name="curso">--}}
                                </div>

                              </tr>

                              <tr>

                                <div class="form-group">
                                  <label for="image">Imagem</label>
                                  <input class="form-control-file" type="file" name="image" id="image">
                                </div>
                              </tr>

                              <tr>

                                <div class="form-group">
                                  <label for="image">Ficheiro(s):</label>
                                  <input class="form-control-file" type="file" name="image" id="image">
                                </div>
                              </tr>

                              <tr>
                                <input type="submit" class="btn btn-success" name="inserir"> </input>

                                </form>


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
        </td>
      </tr>
    </tbody>
  </table>
</div>



@endsection