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
               <td>{{$product->id}}</td>
               <td>{{$product->name}}</td>
               <td>{{$product->price}}</td>
               <td>
                   <a href="{{route('admin.products.edit', ['product'=>$product->id])}}" class="btn btn-sm btn-warning">Editar</a>      
                   <a href="{{route('admin.products.destroy', ['product'=>$product->id])}}" class="btn btn-sm btn-danger">Remover</a>    
               </td>
           </tr>
       @endforeach
    </tbody>
</table>

<div align="center">
<a href="{{route('admin.products.create')}}" class="btn lg btn-success center">Criar Produto</a><br>
</div>

{{$products->links()}}

@endsection