@extends('layout')
@section('title')
{{ $title }}
@stop
@section('content')



		<form action="{{ action('Manage\CheckoutController@addCheckout') }}" method="post" accept-charset="utf-8" class="form-input">
			  {!! csrf_field() !!}
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<h3 class="text-light" style="color: blue"><b> Guest Detail </b><span class="mif-drive-eta place-right"></span></h3>
		<hr class="thin bg-grayLighter">
	

		<div class="cell">
			<label class="label-input"> ID </label>
				<div class="input-control text">
		   			 <input type="text" name='guest_id' value="{{ $guest->id }}" readonly="">
			
		</div>
		<div class="cell">
			<label class="label-input"> Name </label>
				<div class="input-control text">
		   			 <input type="text" name='name' value="{{ $guest->name }}" readonly="">
				</div>
			<label class="label-input"> Email </label>
				<div class="input-control text">
		   			 <input type="text" name="email" value="{{ $guest->email }}" readonly="">
				</div>
		</div>
		<div class="cell">		
		<div class="cell">
			<label class="label-input"> ID Card </label>
				<div class="input-control text">
		   			 <input type="text" name="identify" value="{{ $guest->identify}}" readonly="">
				</div>
			<label class="label-input"> Nationality </label>
				<div class="input-control text">
				    <input type="text"  value="{{ $guest->nationality}}" readonly="">
				</div>
		</div>
		<div class="cell">
		 <label class="label-input"> Address </label>
				<div class="input-control text">
		   			 <input type="text" value="{{ $guest->address }}" readonly="">
				</div> 
		<label class="label-input"> Phone </label>
		     <div class="input-control text">
		    	<input type="text" value="{{ $guest->phone }}" readonly="">
				</div>          
		</div>

		

           
           
		</div>
	<hr class="thin bg-grayLighter">
	<h3 class="text-light" style="color: blue"><b> Booking Detail </b><span class="mif-drive-eta place-right"></span></h3>
    <hr class="thin bg-grayLighter">
		<div class="cell">
			<label class="label-input"> Checkin </label>
				<div class="input-control text" >
				    <input type="text" id='date-p' name="checkin" value="{{ $booking->created_at }}" readonly="">
				   
				</div>
			<label class="label-input"> Checkout </label>
				<div class="input-control text" >
				    <input type="text" id='date-p2' name='checkout'>
				   
				</div>
				<script>
				    $(function(){
				        $("#datepicker").datepicker();
				    });
				     
				      document.getElementById('date-p2').value = (new Date()).format("yyyy.mm.dd hh:mm:ss");

				</script>
		</div>
		<div class="cell">
			<label class="label-input"> Room </label>
				<div class="input-control text">
		   			 <input type="text" value="{{ $booking->room_name }}" name='room_name' readonly>
				</div>
			<label class="label-input"> Deposit </label>
				<div class="input-control text">
		   			 <input type="text" name="deposit" value="{{ $booking->deposit }}" readonly="">
				</div>
		</div>
		<div class="cell">
			<label class="label-input"> Adult Number </label>
				<div class="input-control text">
		   			 <input type="text" name='adult_number' value="{{ $booking->adult_number }}" readonly="">
				</div>
			<label class="label-input"> Child Number </label>
				<div class="input-control text">
		   			 <input type="text" name='child_number' value="{{ $booking->child_number }}" readonly="">
				</div>
		</div>
		<div class="cell">
			<label class="label-input"> Total </label>
				<div class="input-control text">
		   			 <input type="text" value="{{ $total }}" name='total' readonly="">
				</div>
			
		</div>	
		<div class="cell">
			<label class="label-input">Receiption Name</label>
				<div class="input-control text">
		   			 <input type="text" name="receiption" value="{{ Auth::user()->name }}" readonly>
				</div>
		</div>
		
		<input type="submit" class="button warning" name="" value="Checkout">
	</form>
	

@stop