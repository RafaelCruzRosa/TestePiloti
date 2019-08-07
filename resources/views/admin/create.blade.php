@extends('layouts.admin')

@section('content')
    <form method="POST" action="{{route('admin.store')}}" class="form-group">
        {{csrf_field()}}
        <h3 class='col-md-6 col-md-offset-4'>Criar Usuário</h3>
        <div class="form-group">
            <label for="name">Nome</label>
            <input class='col-md-6 col-md-offset-4' type='text' name='name'>
        </div>
        <div class="form-group">
            <label for='email'>E-Mail</label>
            <input type='email' class='col-md-6 col-md-offset-4' name='email'>            
        </div>
        <div class="form-group">
            <label for='password'>Password</label>
            <input type='password' class='col-md-6 col-md-offset-4' name='password'>            
        </div>
        <div class="form-group">
            <label for='password'>Confirm Password</label>
            <input type='password' class='col-md-6 col-md-offset-4' name='password_confirmation'>            
        </div>
        <div class="form-group">
            <label for='email'>Admin</label>
            <select name='admin'>
                    <option value='1'>Sim</option>
                    <option value='0'>Não</option>
            </select>          
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-md btn-success">
                Salvar
            </button>        
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        
        
    </form>
@endsection