@extends('layouts.app')

@section('content')

<h1>メッセージ新規作成ページ</h1>

{!! Form::model($message, ['route' => 'messages.store']) !!}

    <div class="form-group">
    {!! Form::label('status', 'ステータス：') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
    {!! Form::label('content', 'メッセージ：') !!}
    {!! Form::text('content', null, ['class' => 'form-control']) !!}
    </div>
    
    {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection