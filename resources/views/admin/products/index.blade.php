@extends('layouts.app')

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ number_format($product->price, 2, '.', ',') }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.products.edit', ['product' => $product->id]) }}"
                                class="btn btn-sm btn-warning">EDITAR</a>
                            <form action="{{ route('admin.products.destroy', ['product' => $product->id]) }}"
                                method="POST">
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

    <div align="center">
        <a href="{{ route('admin.products.create') }}" class="btn lg btn-success center">Criar Produto</a><br>
    </div>

    <!-- Restaurar -->
    @if ($trash->count() > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trash as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ number_format($product->price, 2, '.', ',') }}</td>
                        <td>
                            <form action="{{ route('admin.products.restore', ['product' => $product->id]) }}"
                                method="POST">
                                @csrf
                                @method("PUT")
                                <button class="btn btn-sm btn-primary" type="submit">Restaurar </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {{ $products->links() }}

@endsection
