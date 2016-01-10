@extends('layout')
@section('title')
{{ $title }}
@stop
@section('content')



		<form action="{{ action('Manage\ServiceController@bookingRoomPost') }}" method="post" accept-charset="utf-8" class="form-input">
			  {!! csrf_field() !!}
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<h3 class="text-light" style="color: blue"><b> Guest Detail </b><span class="mif-drive-eta place-right"></span></h3>
		<hr class="thin bg-grayLighter">

		<div class="cell">
			<label class="label-input"> Name </label>
				<div class="input-control text">
		   			 <input type="text" name='name'>
				</div>
			<label class="label-input"> Email </label>
				<div class="input-control text">
		   			 <input type="text" name="email">
				</div>
		</div>
		<div class="cell">		
		<div class="cell">
			<label class="label-input"> ID Card </label>
				<div class="input-control text">
		   			 <input type="text" name="identify">
				</div>
			<label class="label-input"> Nationality </label>
				<div class="input-control select">
				    <select name='nationality'>
				        <option>VietNam</option>
				        <option>Campuchia</option>
				        <option>ThaiLan</option>
				    </select>
				</div>
		</div>
		<div class="cell">
		 <label class="label-input"> Address </label>
				<div class="input-control text">
		   			 <input type="text" name="address">
				</div> 
		<label class="label-input"> Phone </label>
		     <div class="input-control text">
		    	<input type="text" name="phone">
				</div>          
		</div>

		<div class="cell">
			<label class="label-input"> Sex </label>
			<label class="input-control radio small-check">
                    <input type="radio" name="sex" checked="" value="1">  {{--1 = male,
			2 = female --}}
                      <span class="check"></span>
                    <span class="caption">Male</span>
            </label>
            <label class="input-control radio small-check">
                    <input type="radio" name="sex" checked="" value="2">
                      <span class="check"></span>
                    <span class="caption">Female</span>
            </label>

           
           
		</div>
	<hr class="thin bg-grayLighter">
	<h3 class="text-light" style="color: blue"><b> Booking Detail </b><span class="mif-drive-eta place-right"></span></h3>
    <hr class="thin bg-grayLighter">
		<div class="cell">
			<label class="label-input"> Checkin </label>
				<div class="input-control text" data-role="datepicker" >
				    <input type="text" id='date-p' name='created_at'>
				    <button class="button"><span class="mif-calendar"></span></button>
				</div>
			<label class="label-input"> Checkout </label>
				<div class="input-control text" data-role="datepicker" >
				    <input type="text" id='date-p2' name='checkout'>
				    <button class="button"><span class="mif-calendar"></span></button>
				</div>
				<script>
				    $(function(){
				        $("#datepicker").datepicker();

				    });
				      document.getElementById('date-p').value = (new Date()).format("yyyy.mm.dd");
				      document.getElementById('date-p2').value = (new Date()).format("yyyy.mm.dd");

				</script>
		</div>
		<div class="cell">
			<label class="label-input"> Room </label>
				<div class="input-control text">
		   			 <input type="text" value="{{ $nameroom }}" name='room_name' readonly>
				</div>
			<label class="label-input"> Deposit </label>
				<div class="input-control text">
		   			 <input type="text" name="deposit">
				</div>
		</div>
		<div class="cell">
			<label class="label-input"> Adult Number </label>
				<div class="input-control text">
		   			 <input type="text" name='adult_number'>
				</div>
			<label class="label-input"> Child Number </label>
				<div class="input-control text">
		   			 <input type="text" name='child_number'>
				</div>
		</div>
		<div class="cell">
			<label class="label-input"> Total </label>
				<div class="input-control text">
		   			 <input type="text" value="0">
				</div>
			
		</div>	
		<div class="cell">
			<label class="label-input">Receiption Name</label>
				<div class="input-control text">
		   			 <input type="text" name="receiption" value="{{ Auth::user()->name }}" readonly>
				</div>
		</div>
		<input type="submit" class="button primary" name="" value="Booking">
		<input type="button" class="button warning" name="" value="Checkin">
		<input type="button" class="button success" name="" value="Checkout">
	</form>
	

@stop