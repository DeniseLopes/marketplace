@extends('layouts.app')

@section('content')
    <a href="{{ route('admin.stores.create') }}" class="btn btnlg btn-success">Criar Loja</a>
    <table class="table table-striped">
        <thead>

            <tr>
                <th>id</th>
                <th>Loja</th>
                <th>Ações</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($stores as $store)
                <tr>
                    <td>{{ $store->id }}</td>
                    <td>{{ $store->name }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.stores.edit', ['store' => $store->id]) }}"
                                class="btn btn-sm btn-warning">EDITAR</a>
                            <form action="{{ route('admin.stores.destroy', ['store' => $store->id]) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-sm btn-danger">REMOVER</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Restaurar -->
    @if ($trash->count() > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <td colspan="3" class="text-center h4">Excluidos</td>
                </tr>
                <tr>
                    <th>id</th>
                    <th>Loja</th>
                    <th>Ações</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($trash as $store)
                    <tr>
                        <td>{{ $store->id }}</td>
                        <td>{{ $store->name }}</td>
                        <td>
                            <form method="POST" action="{{ route('admin.stores.restore', ['store' => $store->id]) }}">
                                @method('put')
                                @csrf
                                <button class="btn btn-sm btn-primary" type="submit">Restaurar </button>

                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    @endif


    {{ $stores->links() }}


@endsection
