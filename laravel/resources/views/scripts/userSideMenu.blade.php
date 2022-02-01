@if($tipo == 'Aluno')
    @include('sidemenu.aluno')
@endif

@if($tipo == 'Docente')
    @include('sidemenu.docente')
@endif

@if($tipo == 'Empresa')
    @include('sidemenu.empresa')
@endif

@if($admin)
    @include('sidemenu.administrador')
@endif