@extends('layouts.app')

@section('content')
    <h1 align="center">Produto</h1>
    <form action="{{ route('admin.products.store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Descrição:</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Conteúdo:</label>
                <textarea name="body" id="" cols="30" class="form-control" rows="10"></textarea>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Preço:</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Slug:</label>
                        <input type="text" name="slug" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Lojas:</label>
                <select name="user" class="form-control">
                    @foreach ($stores as $store)
                        <option value="{{ $store->id }}">{{ $store->name }}</option>
                    @endforeach
                </select>
            </div>
            <div align="center">
                <button type="submit" class="btn btn-lg  btn-success center">Cadastrar</button>
            </div>
        </div>
    </form>
@endsection
