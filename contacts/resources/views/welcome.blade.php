@extends('layouts.main')

@section('title', 'Contatos')

@section('content')
<div class="px-4 py-4 my-5 text-center">
    <i class="fa-solid fa-phone fa-5x"></i>
    <br>
    <br>
    <h1 class="display-5 fw-bold">Contatos</h1>
    <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Seja bem vindo, registre seus contatos aqui de forma rápida e fácil.</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="/login"><button type="button" class="btn btn-primary btn-lg px-4 gap-3">Criar conta</button></a>
        <a href="/register"><button type="button" class="btn btn-secondary btn-lg px-4 gap-3">Entrar</button></a>
    </div>
    </div>
</div>
@endsection