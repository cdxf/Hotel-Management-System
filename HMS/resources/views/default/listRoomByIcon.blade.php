@extends('layout')
@section('title')
{{ $title }}
@stop
@section('content')

	@foreach ($room_type as $r_type)
		<h3 class="text-light">Phong: &nbsp; {{ $r_type->name }} <span class="mif-drive-eta place-right"></span></h3>
       <hr class="thin bg-grayLighter">
			@foreach ($room as $r)
				@if ($r->room_type_id == $r_type->id)
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
					        @if ($r->status == 'N')
					        	<a href="{{ route('bookingroom_rec_get',$r->name) }}"><button class="button small-button warning">CHECKOUT</button> </a> 
					        	@elseif($r->status == 'A')
					        	 <a href="{{ route('bookingroom_rec_get',$r->name) }}"><button class="button small-button primary">BOOK</button> </a> 
					        @endif
					      
					    </div>
					</div>
			       </div>

				@endif
		   @endforeach
		   <div class="clear"></div>
	@endforeach
       
  
   
   
    
		<script>
		    $(function(){
		        $("#panel").panel();
		    });
		</script>

@stop