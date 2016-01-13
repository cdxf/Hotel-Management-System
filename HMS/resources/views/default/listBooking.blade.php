@extends('layout')
@section('title')
	{{ $title }}
@stop

@section('content')
	 <button class="button primary" onclick="pushMessage('info')"><span class="mif-plus"></span> Create...</button>
	 
	 
	 <hr class="thin bg-grayLighter">
	{{-- area to list booking --}}
	<table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
                    <thead>
                    <tr>                      
                        <td class="sortable-column sort-asc" style="width: 100px">ID</td>
                        <td class="sortable-column">GuestID</td>
                         <td class="sortable-column">Room</td>
                          <td class="sortable-column">Child_Number</td>
                           <td class="sortable-column">Adult_Number</td>
                            <td class="sortable-column">Deposit</td>
                         <td class="sortable-column">Created_at</td>
                         <td class="sortable-column">Checkout</td>
                         <td class="sortable-column">Satus</td>                         
                         <td class="sortable-column">Receiption</td> 
                        <td style="width: 90px">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($booking as $b)
                        <tr>
                        <td >  {{ $b->id }} </td>
                        <td> {{ $b->guest_id }}</td>
                        <td>{{ $b->room_name }}</td>      
                        <td>{{ $b->child_number }}</td>      
                        <td>{{ $b->adult_number }}</td>      
                        <td>{{ $b->deposit }}</td>
                        <td>{{ $b->created_at }}</td>     
						<td>{{ $b->checkout }}</td>  
                        <td>fix later</td> 
						<td>{{ $b->receiption }}</td> 
						 
                        <td>
                         <a href="javascript:;" onclick="showDialog('#dialog')" style="margin-right: 10px;"> <span class="mif-pencil" title="edit"></span> </a>
                          <a href=""> <span class="mif-cross" title="Delete"></span> </a> 
                        </td>
                    </tr> 
                    @endforeach
                    
                    </tbody>
                </table>

         {{-- area for modal window update room type --}}
         <div data-role="dialog" id="dialog" class="padding20 dialog" data-close-button="true" data-windows-style="true" style="left: 0px; right: 0px; width: auto; height: auto; visibility: visible; top: 282.5px;" data-overlay='true' data-overlay-color="modal">
         	<div class="container">
         		 <h1>Edit Room Type</h1>
		    <p>
		       <form action="" method="post" accept-charset="utf-8" class="form-input">
		        <div class="cell">
		            <label class="label-input"> Room Type </label>
		                <div class="input-control text">
		                     <input type="text">
		                </div>
		            <label class="label-input"> Decription </label>
		                <div class="input-control text">
		                     <input type="text">
		                </div>             
		        </div> 
		        <input type="submit" class="button primary" name="" value="Save">
    		</form>

		    </p>

         	</div>
		   
		</div>
		<script>
		    function showDialog(id){
		        var dialog = $(id).data('dialog');
		        dialog.open();
		        return false;
		    }
		</script>
	
@stop