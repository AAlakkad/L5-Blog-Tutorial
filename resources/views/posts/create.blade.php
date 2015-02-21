@extends('app')

@section('content')

<div class="container-fluid">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <form class="form-horizontal" role="form" method="POST" action="/posts">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label class="col-md-4 control-label">Title</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Title" name="title" value="{{ old('title') }}">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-4 control-label">Content</label>
                    <div class="col-md-6">
                        <textarea class="form-control" placeholder="Content" name="content">{{ old('content') }}</textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <input type="submit" class="btn btn-primary" value="Save">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop
