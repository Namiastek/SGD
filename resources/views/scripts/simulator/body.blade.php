@extends('layouts.master')
@section('content')
Lista wszystkich ruterów w sieci:
<table class="table table-bordered table-striped  table-condensed">
    <thead>
    <th>ID</th>
    <th>Liczba połączeń z</th>
    <th>Liczba połączeń do</th>
    <th>ip</th>
    <th>
        Akcje
        <a href="/add">
            <button class="btn btn-sm btn-primary">dodaj</button>
        </a>
		<a href="/showAll">
			<button class="btn btn-sm btn-danger">Wygeneruj konfigurację All</button>
		</a>
		<a href="/generateAll">
			<button class="btn btn-sm btn-success">Wyslij All</button>
		</a>
    </th>
    </thead>
    <tbody>
    @foreach($nodes as $node)
        <tr>
            <td>
                {{$node['node']->id}}
            </td>
            <td>
                {{$node['connections']}}
            </td>
            <td>
                {{$node['connections_to']}}
            </td>
            <td>
                {{$node['node']->ip}}
            </td>
            <td>
                <a href="/add/{{$node['node']->id}}">
                    <button class="btn btn-sm btn-info">{{'Edytuj'}}</button>
                </a>
                <a href="/path/{{$node['node']->id}}">
                    <button class="btn btn-sm btn-warning">{{'Ustal Łącza'}}</button>
                </a>

                <a href="/show/{{$node['node']->id}}">
                    <button class="btn btn-sm btn-danger">{{'Wygeneruj konfigurację'}}</button>
                </a>
				<a href="/generate/{{$node['node']->id}}">
					<button class="btn btn-sm btn-success">{{'Wyslij'}}</button>
				</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@stop
