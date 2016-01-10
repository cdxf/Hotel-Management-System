@extends('layout')
@section('title')
{{ $title }}
@stop
@section('content')

       <h3 class="text-light"> Floor 1 <span class="mif-drive-eta place-right"></span></h3>
       <hr class="thin bg-grayLighter">
   @foreach ($room as $r)
   	 <div class="my-cell">
       	<div class="panel">
			<div class="heading">
		        <span class="icon mif-home"></span>
			     <span class="title">ROOM {{ $r->name }}</span>
		    </div>
		    <div class="content padding10">
		        Guest: Cao van quyen<br>
		        Status: booked<br>
		        Checkin: not<br>
		       <a href="{{ route('bookingroom_rec_get',$r->name) }}"><button class="button small-button primary">BOOK</button> </a> 
		    </div>
		</div>
       </div>
   @endforeach
   
   
    
		<script>
		    $(function(){
		        $("#panel").panel();
		    });
		</script>

@stop