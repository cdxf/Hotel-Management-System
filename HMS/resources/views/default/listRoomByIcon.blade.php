@extends('layout')
@section('title')
{{ $title }}
@stop
@section('content')

       <h3 class="text-light"> Floor 1 <span class="mif-drive-eta place-right"></span></h3>
       <hr class="thin bg-grayLighter">
   
    <div class="my-cell">
       	<div class="panel">
			<div class="heading">
		        <span class="icon mif-home"></span>
			     <span class="title">ROOM 120</span>
		    </div>
		    <div class="content padding10">
		        Guest: Cao van quyen<br>
		        Status: booked<br>
		        Checkin: not<br>
		        <button class="button small-button primary">BOOK</button>
		    </div>


		</div>
       </div>
         <div class="my-cell">
       	<div class="panel">
			<div class="heading">
		        <span class="icon mif-home"></span>
			     <span class="title">ROOM 120</span>
		    </div>
		    <div class="content padding10">
		      Guest: Cao van quyen<br>
		        Status: booked<br>
		        Checkin: not<br>
		    </div>


		</div>
       </div>
       <div class="my-cell">
       	<div class="panel warning">
			<div class="heading">
		        <span class="icon mif-home"></span>
			     <span class="title">ROOM 120</span>
		    </div>
		    <div class="content padding10">
		      Guest: Cao van quyen<br>
		        Status: booked<br>
		        Checkin: not<br>
		    </div>


		</div>
       </div>
       <div class="my-cell">
       	<div class="panel">
			<div class="heading">
		        <span class="icon mif-home"></span>
			     <span class="title">ROOM 120</span>
		    </div>
		    <div class="content padding10">
		       Guest: Cao van quyen<br>
		        Status: booked<br>
		        Checkin: not<br>
		    </div>


		</div>
       </div>
       <div class="my-cell">
       <div class="panel">
			<div class="heading">
		        <span class="icon mif-home"></span>
			     <span class="title">ROOM 120</span>
		    </div>
		    <div class="content padding10">
		      Guest: Cao van quyen<br>
		        Status: booked<br>
		        Checkin: not<br>
		    </div>


		</div>
       </div>

         
         
         
   
    
		<script>
		    $(function(){
		        $("#panel").panel();
		    });
		</script>

@stop