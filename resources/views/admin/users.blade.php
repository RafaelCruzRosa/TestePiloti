@extends('layouts.admin')

@section('content')
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
            Edit
        </th>
        <th class=''>
            Delete
        </th>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href='/admin/users/edit/{{ $user->id}}' class='btn btn-md btn-warning'>
                            Edit
                    </a>
                </td>
                <td>
                    <a href='/admin/users/delete/{{$user->id}}' class='btn btn-md btn-danger'>
                        Delete                      
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection