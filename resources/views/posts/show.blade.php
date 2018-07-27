@extends('layouts.app')


@section('content')
    <article class="am-article blog-article-p">
        <div class="am-article-hd">
            <h1 class="am-article-title blog-text-center">{{ $post->title }}</h1>
            <p class="am-article-meta blog-text-center">
                <span>{{ $post->created_at->format('Y-m-d') }}</span>
                <span><a href="{{ route('categories.show', [$post->category->id]) }}">{{ $post->category->name }}</a></span>
            </p>
        </div>
        {{ $post->body }}
    </article>

    <div class="am-g blog-article-widget blog-article-margin">
        <div class="am-u-lg-4 am-u-md-5 am-u-sm-7 am-u-sm-centered blog-text-center">
            <span class="am-icon-tags"> &nbsp;</span>
            @foreach($post->tags as $tag)
                <a href="{{ route('tags.show', [$tag->id]) }}">{{ $tag->name }} </a>
            @endforeach
            <hr>
            <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
            <a href=""><span class="am-icon-wechat am-icon-fw blog-icon"></span></a>
            <a href=""><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
        </div>
    </div>
    <hr>
    <ul class="am-pagination blog-article-margin">
        <li class="am-pagination-prev"><a href="{{ route('posts.show', [$prev_article->id]) }}" title="{{ $prev_article->title}}" class="">&laquo; {{ $prev_article->title}}</a></li>
        <li class="am-pagination-next"><a href="{{ route('posts.show', [$next_article->id]) }}">{{ $next_article->title }} &raquo;</a></li>
    </ul>

    <hr>

    <form class="am-form am-g">
        <h3 class="blog-comment">评论</h3>
        <fieldset>
            <div class="am-form-group am-u-sm-4 blog-clear-left">
                <input type="text" class="" placeholder="名字">
            </div>
            <div class="am-form-group am-u-sm-4">
                <input type="email" class="" placeholder="邮箱">
            </div>

            <div class="am-form-group am-u-sm-4 blog-clear-right">
                <input type="password" class="" placeholder="网站">
            </div>

            <div class="am-form-group">
                <textarea class="" rows="5" placeholder="一字千金"></textarea>
            </div>

            <p><button type="submit" class="am-btn am-btn-default">发表评论</button></p>
        </fieldset>
    </form>
    <hr>
@stop