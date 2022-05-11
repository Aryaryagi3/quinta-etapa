@extends('layouts.main')

@section('title', 'Criar contato')

@section('content')
        <h1>Adicionar contato</h1>

        <form method="POST" id="form" action="/contacts" onsubmit="return validate()"  class="justify-content-center w-50">
            {{ csrf_field()}}

            <br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Insira o nome aqui">
                <label for="floatingInput">Nome do contato</label>
                <p class="text-secondary"><small>Formato: exemplo exemplo</small></p>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Insira o e-mail aqui">
                <label for="floatingInput">E-mail</label>
                <p class="text-secondary"><small>Formato: exemplo@exemplo</small></p>
            </div>

            <div class="form-floating mb-3">
                <input type="tel" pattern="[0-9]{9}" class="form-control" id="floatingInput" name="phone" placeholder="Insira o telefone aqui">
                <label for="floatingInput">Telefone</label>
                <p class="text-secondary"><small>Formato: xxxxxxxxx</small></p>
            </div>

            <div>
                <button class="btn btn-primary" type="submit">Criar contato</button>
            </div>
            <br>
        </form>
        <script>
            function validate() {
                let elements = document.getElementById("form").elements;
                let keyWords = ['', 'nome', 'e-mail', 'telefone']

                for (let i = 0; i < 4; i++) {
                    console.log(elements[i]);
                    if (elements[i].value == "") {
                    alert("Por favor, preencha o campo " + keyWords[i]);
                    return false;
                    }
                }
                alert("Informações cadastradas com sucesso.");
            };
        </script>
@endsection