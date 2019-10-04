@extends('layouts.admin')

@section('content')
    <div class="col-md-12">
        <div class="my-3">

            {{ Form::model($user, ['route' => ['admin.dados-pessoal.update', \Auth::user()->Codigo_Professor], 'method' => 'PUT' ]) }}

            @include('admin.dados-pessoal._form')

            <button type="submit" class="btn btn-primary btn-lg">Editar</button>

            {{ Form::close() }}
        </div>
    </div>
@endsection()
