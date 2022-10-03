@extends('layout')


@section('conteudo')
<h1 style="color: wheat">Connect 4</h1>
<h2 style="color: wheat" id="winner"></h2>
<div id="board"></div>
@endsection

@section('scripts')
<script src="{{mix("js/app.js")}}"></script>
@endsection