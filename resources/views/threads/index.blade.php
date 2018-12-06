@extends('layouts.app')

@section ('content')
<div class="jumbotron">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="validation-error">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::open(['route' => 'threads.store', 'method' => 'post'] )}}
        <div class="form-group">
            <label for="name">投稿者名</label>
            {{ Form::text('name', old('name'), ['id' => 'name', 'class' => "form-control", 'aria-describedby' => "name", 'placeholder' => "匿名可"]) }}
        </div>
        <div class="form-group">
            <label for="title">スレッドタイトル</label>
            {{ Form::text('title', old('title'), ['id' => 'title', 'class' => "form-control", 'aria-describedby' => "title", 'placeholder' => "スレッドタイトル"]) }}

        </div>
        <div class="form-group">
            <label for="content">スレッドの内容</label>
            {{ Form::textarea('content', old('content'), ['id' => 'content', 'class' => "form-control", 'rows' => "5", 'placeholder' => "スレッドの内容"])}}
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-primary">スレッドを作成する</button>
        </div>
    {{ Form::close() }}
</div> 
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">スレッド一覧</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($threads as $thread)
        <tr>
            <td>
                <a href="{{ route('threads.show', ['thread' => $thread]) }}">
                    {{ $thread->title }}
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $threads->links() }}

@endsection