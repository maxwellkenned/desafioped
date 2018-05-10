@extends('../index')

@section('content')
    <table id="tableClientes" class="table table-bordered table-sm table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>CPF/CNPJ</th>
                <th>Telefone</th>
                <th>E-Mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente['id']}}</td>
                    <td>{{$cliente['nome']}}</td>
                    <td>{{$cliente['cgc']}}</td>
                    <td>{{$cliente['tel']}}</td>
                    <td>{{$cliente['email']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection