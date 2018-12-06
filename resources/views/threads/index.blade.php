@extends('layouts.app')

@section ('content')
<div class="jumbotron">
        <form>
            <div class="form-group">
                <label for="name">投稿者名</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="匿名可">
            </div>
            <div class="form-group">
                <label for="content">スレッドの内容</label>
                <textarea class="form-control" id="content" placeholder="スレッドの内容" rows="5"></textarea>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">スレッドを作成する</button>
            </div>
        </form>
    </div> 
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">スレッド一覧</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <a href="/threads/show">
                    ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="/threads/show">
                    Mあああark
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="/threads/show">
                    MaMifewa
                </a>
            </td>
        </tr>
    </tbody>
</table>
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>    
@endsection