@extends('layouts.app')

@section('Content')
    <a href=>

    <table>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>apellidos</th>
            <th>avatar</th>
            <th>acciones</th>
        </tr>
    </table>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->}}


        </tr>
@endsection

@stop
