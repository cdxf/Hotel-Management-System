@extends('layout')
@section('title')
{{ $title }}
@stop
@section('content')
	

	<form action="{{ route('adduser_man_post') }}" method="post" accept-charset="utf-8" class="form-input">
            {!! csrf_field() !!}

		<div class="cell">
			<label class="label-input"> Name </label>
				<div class="input-control text">
		   			 <input type="text" name="name">
				</div>
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<label class="label-input"> Address </label>
				<div class="input-control text">
		   			 <input type="text" name="address">
				</div>
		</div>
		<div class="cell">
			<label class="label-input"> Birthday </label>
				<div class="input-control text" data-role="datepicker" >
				    <input type="text" id='date-p' name="birthday">
				    <button class="button"><span class="mif-calendar"></span></button>
				</div>
				<script>
				    $(function(){
				        $("#datepicker").datepicker();

				    });
				      document.getElementById('date-p').value = (new Date()).format("yyyy.mm.dd");
				</script>
			<label class="label-input"> Phone </label>
				<div class="input-control text">
		   			 <input type="text" name="phone">
				</div>
		</div>
		<div class="cell">
		   <label class="label-input"> Role </label>
				<div class="input-control select">
				    <select>
				    	@foreach ($role_table as $r)
				    		<option value="{{ $r->id }}">{{ $r->name }}</option>
				    	@endforeach
				        				        
				    </select>
				</div>
			
			<label class="label-input"> Email </label>
				<div class="input-control text">
		   			 <input type="text" name="email">
				</div>
		</div>
		<div class="cell">
			<label class="label-input"> Sex</label>
			<label class="input-control radio small-check">
                    <input type="radio" name="sex" checked="" value="1">
                      <span class="check"></span>
                    <span class="caption">Male</span>
            </label>
            <label class="input-control radio small-check">
                    <input type="radio" name="sex" checked="" value="0">
                      <span class="check"></span>
                    <span class="caption">Female</span>
            </label>
          
           
           
		</div>
		<input type="submit" class="button primary" name="" value="Save">
		<input type="button" class="button warning" name="" value="Cancel">

	</form>

	
@stop