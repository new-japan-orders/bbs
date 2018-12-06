@extends('layouts.app')

@section ('content')

<div class="jumbotron">
    <h1 class="display-4">{{$thread->title}}</h1>
    <p>投稿者名：{{$thread->name ?? ''}}　投稿日時：{{ $thread->created_at }}</p>
<p class="lead">{{$thread->content}}</p>
</div>
<div class="entries">
    @foreach ($thread->entries as $entry)
        <div class="entry">
            <div class="row head">
                <div class="col-md-4 col-sm-4">   
                    投稿者名：{{ $entry->name ?? '' }}
                </div>
                <div class="col-md-4 col-sm-4">   
                    投稿日時：{{ $entry->created_at }}
                </div>
            </div>
            <div class="row content">
                <div class="col">
                    {{ $entry->content }}
                </div>
            </div>
        </div>
    @endforeach

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
        {{ Form::open(['route' => 'entries.store', 'method' => 'post'] )}}
            {{ Form::hidden('thread_id', $thread->id) }}
            <div class="form-group">
                <label for="name">投稿者名</label>
                {{ Form::text('name', old('name'), ['id' => 'name', 'class' => "form-control", 'aria-describedby' => "name", 'placeholder' => "匿名可"]) }}
            </div>
            <div class="form-group">
                <label for="content">投稿内容</label>
                {{ Form::textarea('content', old('content'), ['id' => 'content', 'class' => "form-control", 'rows' => "5", 'placeholder' => "投稿内容"])}}
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">投稿する</button>
            </div>
        {{ Form::close() }}
    </div> 

</div>

@endsection
