@extends('layout')
@section('title')
{{ $title }}
@stop
@section('content')
	
	<button class="button primary" onclick="showDialog('#dialog6')"><span class="mif-plus"></span> Create...</button>

	<form action="" method="post" accept-charset="utf-8" class="adduser">
		<div class="cell">
			<label class="label-input"> Name </label>
				<div class="input-control text">
		   			 <input type="text">
				</div>
			<label class="label-input"> Address </label>
				<div class="input-control text">
		   			 <input type="text">
				</div>
		</div>
		<div class="cell">
			<label class="label-input"> Birthday </label>
				<div class="input-control text" data-role="datepicker" >
				    <input type="text" id='date-p'>
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
		   			 <input type="text">
				</div>
		</div>
		<div class="cell">
			<label class="label-input"> Role </label>
				<div class="input-control text">
		   			 <input type="text">
				</div>
			<label class="label-input"> Email </label>
				<div class="input-control text">
		   			 <input type="text">
				</div>
		</div>
		<div class="cell">
			<label class="input-control radio small-check">
                    <input type="radio" name="n3" checked="">
                      <span class="check"></span>
                    <span class="caption">Male</span>
            </label>
            <label class="input-control radio small-check">
                    <input type="radio" name="n3" checked="">
                      <span class="check"></span>
                    <span class="caption">Female</span>
            </label>
           
           
		</div>
		<input type="submit" class="button primary" name="" value="Save">
		<input type="button" class="button warning" name="" value="Cancel">

	</form>

	
@stop