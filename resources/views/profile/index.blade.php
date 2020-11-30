@extends('layouts.front')
@section('title', 'プロフィール一覧')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="title">
                                    氏名：{{ str_limit($post->name, 150) }}
                                </div>
                                <div class="body mt-3">
                                    性別：{{ str_limit($post->gender, 150) }}
                                </div>
                                <div class="body">
                                    趣味：{{ str_limit($post->hobby, 150) }}
                                </div>
                                <div class="body">
                                    自己紹介：{{ str_limit($post->introduction, 1500) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
@endsection