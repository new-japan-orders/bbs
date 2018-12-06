@extends('layouts.app')

@section ('content')

<div class="jumbotron">
    <h1 class="display-4">スレッドタイトル</h1>
    <p>投稿者名：ああああああああ　投稿日時：2018/10/10 11:11:11</p>
    <p class="lead">スレッド内容ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
</div>
<div class="entries">
    <div class="entry">
        <div class="row head">
            <div class="col-md-4 col-sm-4">   
                投稿者名：ああああああああああ
            </div>
            <div class="col-md-4 col-sm-4">   
                投稿日時：2018/10/10 11:11:11
            </div>
        </div>
        <div class="row content">
            <div class="col">
                投稿内容〜〜〜〜ああああれｗえｗふぁふぇわ投稿内容〜〜〜〜ああああれｗえｗふぁふぇわ投稿内容〜〜〜〜ああああれｗえｗふぁふぇわ投稿内容〜〜〜〜ああああれｗえｗふぁふぇわ投稿内容〜〜〜〜ああああれｗえｗふぁふぇわ投稿内容〜〜〜〜ああああれｗえｗふぁふぇわ
            </div>
        </div>
    </div>
    
    <div class="entry">
        <div class="row head">
            <div class="col-md-4 col-sm-4">   
                投稿者名：ああああああああああ
            </div>
            <div class="col-md-4 col-sm-4">   
                投稿日時：2018/10/10 11:11:11
            </div>
        </div>
        <div class="row content">
            <div class="col">
                投稿内容〜〜〜〜ああああれｗえｗふぁふぇわ
                えｆわｆわｇっがぐぁ

                えぐぁげわげわげわ
                っぐぇあぐぁげｗげわげわげわげわ
            </div>
        </div>
    </div>
    <div class="entry">
        <div class="row head">
            <div class="col-md-4 col-sm-4">   
                投稿者名：ああああああああああ
            </div>
            <div class="col-md-4 col-sm-4">   
                投稿日時：2018/10/10 11:11:11
            </div>
        </div>
        <div class="row content">
            <div class="col">
                投稿内容〜〜〜〜ああああれｗえｗふぁふぇわ
                えｆわｆわｇっがぐぁ
                えぐぁげわげわげわ
                っぐぇあぐぁげｗげわげわげわげわ
            </div>
        </div>
    </div>
    <div class="jumbotron">
        <form>
            <div class="form-group">
                <label for="name">投稿者名</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="匿名可">
            </div>
            <div class="form-group">
                <label for="content">投稿内容</label>
                <textarea class="form-control" id="content" placeholder="投稿内容" rows="5"></textarea>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">投稿する</button>
            </div>
        </form>
    </div> 

</div>

@endsection