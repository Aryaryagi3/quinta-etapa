@extends('layouts.main')

@section('title', 'Lista de contatos')

@section('content')
        <h1>Lista de contatos</h1>
        @auth
        <br>
        <a href="/contacts/create"><button type="button" class="btn btn-success btn-lg px-4 gap-3">Adicionar contato</button></a>
        <br>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><h5></h5></th>
                    <th><h5>Nome</h5></th>
                    <th><h5>Telefone</h5></th>
                    <th><h5>E-mail</h5></th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td><a href="/contacts/{{$contact->id}}/edit"><button type="button" class="btn btn-secondary">Editar</button></a></td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>{{$contact->email}}</td>
                    </tr>
                @endforeach
            <tbody>
        </table>
        {{ $contacts->links()}}
        <br>
        @endauth
        @guest
        <br>
        <h4>Para visualizar contatos, crie uma conta ou entre em uma existente.</h4>
        <br>
        @endguest
    @endsection