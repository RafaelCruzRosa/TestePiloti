@extends('layouts.app')

@section('content')
<div class='container text-center'>
    <form method="POST" action="update/{{Auth::user()->id}}" class="form-group">
        {{csrf_field()}}
        <h3 class='col-md-6 col-md-offset-4'>Mude seus dados!</h3>
        <div class="form-group">
            <label for='name'>Nome:</label>
            <input class='col-md-6 col-md-offset-4' type='text' name='name' value="{{Auth::user()->name}}">
        </div>
        <div class="form-group">
            <label for='email'>E-Mail:</label>
            <input type='email' class='col-md-6 col-md-offset-4' name='email' value="{{Auth::user()->email}}">            
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-md btn-success">
                Salvar
            </button>        
        </div>
        
        
        
    </form>
</div>
@endsection