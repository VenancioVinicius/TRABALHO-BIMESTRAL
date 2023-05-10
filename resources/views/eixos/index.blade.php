<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Clientes", 'rota' => "clientes.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') Clientes @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">
            <x-datalist 
                title="Clientes" 
                crud="clientes" 
                :header="['id', 'nome', 'ações']"
                :data="$dados"
                :hide="[true, false, false]" 
            /> 
        </div>
    </div>
@endsection