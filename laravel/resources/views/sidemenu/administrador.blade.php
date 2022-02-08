@if(Session::get('usertype') == 'docente' )
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
    </ul>
</li>
@else
<li class="menuItem">
    <ul class="menu-list">
        <a href="">
            <li class="">
                Informação Pessoal
            </li>
        </a>
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
@endif