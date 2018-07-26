@extends('layouts.app')

@section('slider')
    @include('layouts._slider')
@stop

@section('content')
    <a href="{{ route('post') }}">
    <article class="am-g blog-entry-article">
        <div class="am-u-lg-12 am-u-md-12 am-u-sm-12 am-u-sm-centered blog-entry-img">
            <img src="/i/f10.jpg" alt="" class="am-u-sm-12">
        </div>
        <div class="am-u-lg-12 am-u-md-12 am-u-sm-12 blog-entry-text blog-text-center">
            <span><a href="" class="blog-color">article &nbsp;</a></span>
            <span> @amazeUI &nbsp;</span>
            <span>2015/10/9</span>
            <h1><a href="">我本楚狂人，凤歌笑孔丘</a></h1>
            <p>我们一直在坚持着，不是为了改变这个世界，而是希望不被这个世界所改变。
            </p>
            <p><a href="" class="blog-continue">continue reading</a></p>
        </div>
    </article>
    <ul class="am-pagination">
        <li class="am-pagination-prev"><a href="">&laquo; Prev</a></li>
        <li class="am-pagination-next"><a href="">Next &raquo;</a></li>
    </ul>
    </a>
@stop

