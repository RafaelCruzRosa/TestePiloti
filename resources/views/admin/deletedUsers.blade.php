@extends('layouts.admin')

@section('content')
<h3>Usuários Deletados</h3>
<table class='table'>
    <thead>
        <th class=''>
            #
        </th>
        <th class=''>
            Name
        </th>
        <th class=''>
            E-mail
        </th>
        <th class=''>
            Desfazer
        </th>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href='{{route('admin.desfazer',$user->id)}}' class='btn btn-md btn-warning'>
                            Desfazer
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection