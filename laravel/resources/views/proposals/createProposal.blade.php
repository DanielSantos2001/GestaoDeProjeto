@extends('layout')

@section('title', 'Cria Proposta de Estágio')

@section('content')
<table><tbody>
<tr>
    <td>
        <table class="zone">
            <tbody><tr>
                <td>
                    <table class="horizontalline">
                        <tbody><tr>
                            <td class="subtitle">
                                <label>Criar Nova Proposta</label>
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="zonecontent">
                        <tbody><tr>
                            <td>

<table cellpadding="4" cellspacing="2" style="width: 100%" class="displaytable">
<thead>
<tr>
  Insira os dados abaixo para criar uma proposta de estágio. <br>
</tr>
<tr>
   A fotografia não é obrigatoria. <br>
   Caso não insira uma fotografia será atribuida uma por defeito. <br>
 </tr></thead>
<tbody>
  <tr>
    <div id="proposal-create">

    <form action="/proposals" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="input-group mb-3">
        <span class="input-group-text" id="titulo">Titulo</span>
        <input type="text" class="form-control" placeholder="Titulo" name="titulo" aria-describedby="basic-addon1">
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
        <option value="lei">LEI</option>
        <option value="lsti">LSTI</option>
        <option value="lg">LG</option>
        <option value="lm">LM</option>
        <option value="lgb">LGB</option>
        <option value="lca">LCA</option>
        <option value="lii">LII</option>
        <option value="ldrot">LDROT</option>
      </select>
        {{--<input type="text" class="form-control" placeholder="Nome do Curso" name="curso" aria-describedby="basic-addon1">--}}
      </div>

  </tr>

  <tr>

      <div class="form-group">
        <label for="image">Imagem</label>
        <input class="form-control-file" type="file" name="image" id="image">
      </div>
  </tr>

  <tr>
    <input type="submit" class="btn btn-success" name="inserir"> </input>

  </form>


  </div>
  </tr>
</tbody></table>
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
        </tbody></table>
    </td>
</tr>
</tbody></table>




@endsection
