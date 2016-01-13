@extends('layout')
@section('title')
	{{ $title }}
@stop

@section('content')
	{{-- area to add new room type --}}
	 <a href="javascript:;" onclick="showDialog('#dialogaddroomtype')"> <button class="button primary"><span class="mif-plus"></span> Add Room Type...</button></a>  
	 <hr class="thin bg-grayLighter">
	{{-- area to list room type --}}
	<table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
                    <thead>
                    <tr>                      
                        <td class="sortable-column sort-asc" style="width: 100px">ID</td>
                        <td class="sortable-column">TypeName</td>
                         <td class="sortable-column">Decription</td>
                         <td class="sortable-column">Price</td>
                        <td style="width: 90px">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($room_type as $type)
                    	  
                    <tr>
                        <td >  {{ $type->id }}  </td>
                        <td>  {{ $type->name }}</td>
                        <td> {{ $type->desc }}</td>      
                        <td> {{ $type->price }}</td>                                   
                        <td>
                         <a href="javascript:;" onclick="showDialog('#dialog{{ $type->id }}')" style="margin-right: 10px;"> <span class="mif-pencil" title="edit"></span> </a>
                         <a href="{{ route('deleteroomtype_man', $type->id) }}" onclick="return confirm('are you sure delete this?')"> <span class="mif-cross" title="Delete"></span> </a>
                        
                                                  </td>
                    </tr>
                      {{-- area for modal window update room type --}}
         <div data-role="dialog" id="dialog{{ $type->id }}" class="padding20 dialog" data-close-button="true" data-windows-style="true" style="left: 0px; right: 0px; width: auto; height: auto; visibility: visible; top: 282.5px;" data-overlay='true' data-overlay-color="modal">
         	<div class="container">
         		 <h1>Edit Room Type</h1>
		    <p>
		       <form action="{{ action('Manage\RoomController@updateRoomType') }}" method="post" accept-charset="utf-8" class="form-input">
		        {!! csrf_field() !!}
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		        <div class="cell">
		        <label class="label-input"> ID </label>		                
					<div class="input-control text">
		                     <input type="text" name='id' value="{{ $type->id }}" readonly>
		                </div>    
		            <label class="label-input"> NameType </label>
		                <div class="input-control text">
		                     <input type="text" name='name' value="{{ $type->name }}">
		                </div>
		        </div> 
		        <div class="cell">
		            <label class="label-input"> Price</label>
		                <div class="input-control text">
		                     <input type="text" name='price' value="{{ $type->price }}">
		                </div>
		             <label class="label-input"> Decription </label>
		                <div class="input-control text">
		                     <input type="text" name='desc' value="{{ $type->desc }}">
		                </div> 
		        </div> 
		        <input type="submit" class="button primary" name="" value="Save">
		        <input type="button" class="button warning" name="" value="Cancel" onclick="closeDialog('#dialog{{ $type->id}}')" >
    		</form>

		    </p>

         	</div>
		   
		</div>

                    @endforeach
                 
                    </tbody>
                </table>

       
    {{-- area for modal add new room type --}}
         <div data-role="dialog" id="dialogaddroomtype" class="padding20 dialog" data-close-button="true" data-windows-style="true" style="left: 0px; right: 0px; width: auto; height: auto; visibility: visible; top: 282.5px;" data-overlay='true' data-overlay-color="modal">
         	<div class="container">
         		 <h1>Add Room Type</h1>
		    <p>
		       <form action="{{ action('Manage\RoomController@addRoomType')}}" method="post" accept-charset="utf-8" class="form-input">
		       {!! csrf_field() !!}
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		        <div class="cell">
		            <label class="label-input"> TypeName </label>
		                <div class="input-control text">
		                     <input type="text" name='name'>
		                </div>
		            <label class="label-input"> Decription </label>
		                <div class="input-control text">
		                     <input type="text" name='desc'>
		                </div>             
		        </div> 
		        <div class="cell">
		            <label class="label-input"> Price</label>
		                <div class="input-control text">
		                     <input type="text" name='price'>
		                </div>
		                  
		        </div> 
		        <input type="submit" class="button primary" name="" value="Save">
		        <input type="button" class="button warning" name="" value="Cancel" onclick="closeDialog('#dialogaddroomtype')" >
    		</form>

		    </p>

         	</div>
		   
		</div>
  {{-- end area for modal add new room type --}}
		<script>
		    function showDialog(id){
		        var dialog = $(id).data('dialog');
		        dialog.open();
		        return false;
		    }
		     function closeDialog(id){
			                 var dialog = $(id).data('dialog');
			                dialog.close();
			                return false;
			 }
		</script>
	
@stop