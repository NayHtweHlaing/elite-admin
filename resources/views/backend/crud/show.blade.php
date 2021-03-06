@extends('backend.layouts.master')

@section('page-header')
	<h1>
	{{ trans('crud.preview') }} <span class="text-lowercase">{{ $crud->entity_name }}</span>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('admin/dashboard') }}">{{ trans('crud.admin') }}</a></li>
		<li><a href="{{ url($crud->route) }}" class="text-capitalize">{{ $crud->entity_name_plural }}</a></li>
		<li class="active">{{ trans('crud.preview') }}</li>
	</ol>
@endsection

@section('content')
	@if ($crud->hasAccess('list'))
		<a href="{{ url($crud->route) }}"><i class="fa fa-angle-double-left"></i> {{ trans('crud.back_to_all') }} <span class="text-lowercase">{{ $crud->entity_name_plural }}</span></a><br><br>
	@endif

	<!-- Default box -->
	  <div class="box">
	    <div class="box-header with-border">
	      <h3 class="box-title">{{ trans('crud.preview') }} <span class="text-lowercase">{{ $crud->entity_name }}</h3>
	    </div>
	    <div class="box-body">
	      {{ dump($entry) }}
	    </div><!-- /.box-body -->
	  </div><!-- /.box -->

@endsection
