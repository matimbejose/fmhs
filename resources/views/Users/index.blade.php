@extends('adminlte::page')

@section('title', 'Usuarios')


@section('content_header')
<br />
@stop

@section('content')
    <div id="app">
    <user-component />
       
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="/js/app.js"> </script>
@stop