@extends('client.layouts.main')
@section('title',trans('allclient.feedback'))
@section('content')
<section class="page-cover" id="cover-hotel-grid-list">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="page-title">{{trans('allclient.feedback')}}</h1>
				<ul class="breadcrumb">
					<li><a href="{{route('home.client')}}">{{trans('allclient.home')}}</a></li>
					<li class="active">{{trans('allclient.send_feedback')}}</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="latest-blog" class="section-padding" style="padding-top: 50px;">
    <div class="container">
        <div class="row">
		<div class="col-md-9 row">
			{!! Form::open(['route' => 'feedback.store', 'method' => 'post']) !!}
			<div class="form-group col-md-6">
				<label>{{trans('feedback.name')}}:</label>
				{{Form::text('name', '',['class' => 'form-control','placeholder'=>trans('allclient.enter_name')])}}
				<span class="text-danger">{{ $errors->first('name')}}</span>
			</div>
			<div class="form-group col-md-6">
				<label>{{trans('feedback.email')}}:</label>
				{{Form::email('email', '',['class' => 'form-control','placeholder'=>trans('allclient.enter_email')])}}
				<span class="text-danger">{{ $errors->first('email')}}</span>
			</div>
			<div class="form-group col-md-12">
				<label>{{trans('feedback.title')}}:</label>
				{{Form::text('title', '',['class' => 'form-control','placeholder'=>trans('allclient.enter_title')])}}
				<span class="text-danger">{{ $errors->first('title')}}</span>
			</div>
			<div class="form-group col-md-12">
				<label>{{trans('feedback.content')}}:</label>
				{{Form::textarea('content', '',['class' => 'form-control','placeholder'=>trans('allclient.enter_content')])}}
				<span class="text-danger">{{ $errors->first('content')}}</span>
			</div>
			<div class="form-group">
				{{ Form::submit(trans('feedback.save'),['class'=>'btn btn-warning']) }}
			</div>
			{!! Form::close() !!}
		</div>
		<div class="col-md-2">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15336.427597098105!2d108.2097422!3d16.0599416!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x96e408c6b0419760!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBEdXkgVMOibg!5e0!3m2!1svi!2s!4v1635042488034!5m2!1svi!2s" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>
    </div>
</section>
@endsection
@section('script1')
<script>
	$(document).ready(function(){
		$('.home-status').removeClass('active');
		$('.contact-status').addClass('active');
	});
</script>
@endsection
