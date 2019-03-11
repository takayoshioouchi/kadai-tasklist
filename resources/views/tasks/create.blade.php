@extends('layouts.app')

@section('content')


    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => 'messages.store']) !!}
        
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection