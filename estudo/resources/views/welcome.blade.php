@extends("layouts.main")
@section("title", "Inicio")
@section("content")

@if (10 > 5)
    <h1>a condicao é verdadeira</h1>
@endif
<h1>{{$nome}}</h1>

@for($i = 0; $i < count($arr); $i++)
    <p>{{$arr[$i] }}</p>
@endfor

@endsection