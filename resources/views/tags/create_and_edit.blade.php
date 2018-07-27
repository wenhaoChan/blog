@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Tag /
                    @if($tag->id)
                        Edit #{{$tag->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($tag->id)
                    <form action="{{ route('tags.update', $tag->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('tags.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                    <label for="post_id-field">Post_id</label>
                    <input class="form-control" type="text" name="post_id" id="post_id-field" value="{{ old('post_id', $tag->post_id ) }}" />
                </div> 
                <div class="form-group">
                	<label for="name-field">Name</label>
                	<textarea name="name" id="name-field" class="form-control" rows="3">{{ old('name', $tag->name ) }}</textarea>
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('tags.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection