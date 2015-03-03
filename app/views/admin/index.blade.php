@extends('layouts.main')


@section('styles')
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

@stop

@section('content')

	<div class="text-center">
		<h3>Create New Post</h3>
	</div>

    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Add your post Here</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="well">
                          <form id="loginForm" method="POST" action="{{url('store')}}" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">title</label>
                                  <input type="text" class="form-control" id="title" name="title" value="" required="" title="Please enter you title">
                                  <span class="help-block"></span>
                              </div>

                              <div class="form-group">
                                  <label for="description" class="control-label">description</label>
                                  <textarea class="form-control" name="description" cols="30" rows="10"></textarea>
                                  </textarea>
                                  <span class="help-block"></span>
                              </div>

                              <button type="submit" class="btn btn-success btn-block">Add New Post</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@stop