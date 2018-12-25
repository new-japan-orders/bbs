@extends('layouts.app')

@section ('content')

<div class="jumbotron">
    <h1 class="display-4">{{$thread->title}}</h1>
    <p>
        投稿者名：
        @isset ($thread->user_id)
            {{ $thread->user->name }}
        @else
            {{ $thread->name ?? '' }}
        @endif
    </p>
    <p>
        投稿日時：{{ $thread->created_at }}
    </p>
<p class="lead">{{$thread->content}}</p>
</div>
<div class="entries">
    @foreach ($thread->entries as $entry)
        <div class="entry">
            <div class="row head">
                <div class="col-md-4 col-sm-4">   
                    投稿者名：
                    @isset ($entry->user_id)
                        {{ $entry->user->name }}
                    @else
                        {{ $entry->name ?? '' }}
                    @endif
                </div>
                <div class="col-md-4 col-sm-4">   
                    投稿日時：{{ $entry->created_at }}
                </div>
                <div class="col-md-4 col-sm-4">   
                    {{ Form::open(['url' => route('entries.destroy', ['id' => $entry->id]), 'method' => 'post'] )}}
                        <button type="submit" class="btn btn-primary">削除</button>
                    {{ Form::close()}}
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
                @auth
                    <p>{{ Auth::user()->name }}</p>
                @else
                    {{ Form::text('name', old('name'), ['id' => 'name', 'class' => "form-control", 'aria-describedby' => "name", 'placeholder' => "匿名可"]) }}
                @endauth
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
