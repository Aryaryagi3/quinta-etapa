@extends('layouts.main')

@section('title', 'Editar contato')

@section('content')

        <h1>Editar contato</h1>

        <form method="POST" action="/contacts/{{$contact->id}}">
            {{ method_field('PATCH') }}
            {{ csrf_field()}}

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Insira o nome aqui" value="{{$contact->name}}">
                <label for="floatingInput">Nome do contato</label>
                <p class="text-secondary"><small>Formato: exemplo exemplo</small></p>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Insira o e-mail aqui" value="{{$contact->email}}">
                <label for="floatingInput">E-mail</label>
                <p class="text-secondary"><small>Formato: exemplo@exemplo</small></p>
            </div>

            <div class="form-floating mb-3">
                <input type="tel" pattern="[0-9]{9}" class="form-control" id="floatingInput" name="phone" placeholder="Insira o telefone aqui" value="{{$contact->phone}}">
                <label for="floatingInput">Telefone</label>
                <p class="text-secondary"><small>Formato: xxxxxxxxx</small></p>
            </div>
            <br>
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
        <br>
@endsection