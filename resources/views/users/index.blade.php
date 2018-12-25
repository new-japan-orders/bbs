@extends('layouts.app')

@section ('content')
<h1>マイページ</h1>
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
<table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">投稿日時</th>
                <th scope="col">投稿内容</th>
                <th scope="col">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entries as $entry)
            <tr>
                <td>
                    {{ $entry->created_at }}
                </td>
                <td>
                    <a href="{{ route('threads.show', ['thread' => $entry->thread]) }}">
                        {{ $entry->content }}
                    </a>
                </td>
                <td>
                    {{ Form::open(['url' => route('entries.destroy', ['id' => $entry->id]), 'method' => 'post'] )}}
                        <button type="submit" class="btn btn-primary">削除</button>
                    {{ Form::close()}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection