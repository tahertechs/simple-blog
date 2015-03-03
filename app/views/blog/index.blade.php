@extends('layouts.master')


@section('styles')

    <style>
        body{
            background:#bbb;
        }
    </style>

@stop


@section('content')

    @if(Session::has('message'))
      <div class="alert alert-success page-alert alert-dismissable" id="alert-1">
          <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <strong>Well done!</strong> You successfully read this important alert message.
      </div>
    @endif

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Page Heading
                    <small>Secondary Text</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        @foreach($posts as $post)
            <!-- Project One -->
            <div class="row">
                <div class="col-md-7">
                    <a href="#">
                        <img class="img-responsive" src="{{asset('assets/img/sample.gif')}}" alt="">
                    </a>
                </div>
                <div class="col-md-5">
                    <h3>{{$post->title}}</h3>
                    <p>{{$post->content}}</p>
                    <a class="btn btn-primary" href="{{url('post')}}/{{$post->id}}">View<span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
            <!-- /.row -->
        @endforeach



        <hr>

        <div class="text-center">
            {{$posts->links()}}        
        </div>



@stop