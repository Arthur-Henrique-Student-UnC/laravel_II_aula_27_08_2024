@extends ('layouts.master');

@section ('content')

<div class='container'>
    <h2>Seja bem-vindo, {{$user['name']}}</h2> 
@if($user['role'] == 'Professor')
    <p> Você é um {{$user['role']}} </p>
@else
    <p> Bem-vindo, aluno</p>
@endif

@isset($items)
<h3>Lista de itens: </h3>
<ul>
    @foreach($items as $item)
    <li{{$item}}></li>
    @endforeach
</ul>

@endisset

@unless(empty($items))
 <p>A lista acima mostra os itens disponíveis </p>
@endunless

@if($showButton)
<button id='actionButton'>Clique aqui</button>
@endif
</div>


