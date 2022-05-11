@extends('layouts.main')

@section('title', 'Editar contato')

@section('content')

        <h1>Editar contato</h1>

        <form method="POST" action="/contacts/{{$contact->id}}">
            {{ method_field('PATCH') }}
            {{ csrf_field()}}

            <div class="form-group">
                <label for="name">Nome do contato: </label>
                <input type="text" name="name" value="{{$contact->name}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="phone">Telefone do contato: </label>
                <input type="text" name="phone" value="{{$contact->phone}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email do contato: </label>
                <input type="text" name="email" value="{{$contact->email}}" class="form-control">
            </div>

            <div>
                <button class="btn btn-primary" type="submit">Atualizar contato</button>
            </div>
        </form>
        <br>
        <form method="POST" action="/contacts/{{$contact->id}}">
            {{ method_field('DELETE') }}
            {{ csrf_field()}}
            <button class="btn btn-primary btn-danger" type="submit">Apagar contato</button>
        </form>
@endsection