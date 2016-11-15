<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">

        @if (Route::has('login'))

            @if (Auth::check())


                <li class="active">
                <a href=" {{ route('cliente.index')}} ">Clientes <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Fornecedores</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Relatórios</a></li>
    </ul>
    <ul class="nav nav-sidebar">
        <li><a href="">PDV</a></li>
    </ul>
    <ul class="nav nav-sidebar">
        <li><a href="">Contas a Receber</a></li>
        <li><a href="">Contas a Pagar</a></li>

    </ul>

    @else

        <!- REALIZA O LOGIN ->



    @endif

    @endif

</div>