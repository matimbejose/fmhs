@extends('adminlte::page')

@section('title', 'Cadastrar novos estudantes')


@section('content_header')
<br />
@stop

@section('content')
    <div id="app">
    <studentcreate-component />
    
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="/js/app.js"> </script>
@stop