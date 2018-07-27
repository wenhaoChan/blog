@extends('layouts.app')

@section('slider')
    @include('layouts._slider')
@stop

@section('content')
    @if(count($posts))
        @foreach($posts as $post)
            <a href="{{ route('posts.show', [$post->id]) }}">
                <article class="am-g blog-entry-article">
                    <div class="am-u-lg-12 am-u-md-12 am-u-sm-12 am-u-sm-centered blog-entry-img">
                        <img src="/i/f10.jpg" alt="" class="am-u-sm-12">
                    </div>
                    <div class="am-u-lg-12 am-u-md-12 am-u-sm-12 blog-entry-text blog-text-center">
                        <span><a href="{{ route('categories.index') }}" class="blog-color">{{ $post->categoty }} &nbsp;</a></span>
                        {{--<span> @amazeUI &nbsp;</span>--}}
                        <h1><a href="{{ route('posts.show', [$post->id]) }}">{{ $post->title }}</a></h1>
                        <span>{{ $post->created_at->format('Y-m-d') }}  {{ $post->category->name }}</span>
                        <p>{{ $post->body }}</p>
                        <p><a href="" class="blog-continue">continue reading</a></p>
                    </div>
                </article>
            </a>
        @endforeach
        {!! $posts->render() !!}
    @else
        <div>暂无数据 ~_~ </div>
    @endif
@stop


