@extends('layout')
@section('title')
	{{ $title }}
@stop

@section('content')
	{{-- area to add new room type --}}
	 <a href="{{ route('listroombyicon_com') }}"> <button class="button primary"><span class="mif-plus"></span> Add Room Type...</button></a>  
	 <hr class="thin bg-grayLighter">
	{{-- area to list room type --}}
	<table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
                    <thead>
                    <tr>                      
                        <td class="sortable-column sort-asc" style="width: 100px">Room</td>
                        <td class="sortable-column">RoomType</td>
                         <td class="sortable-column">Decription</td>
                        <td style="width: 90px">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                   
                    <tr>
                        <td >  1  </td>
                        <td>Vip </td>
                        <td>Danh cho khach vip</td>                     
                        <td>
                         <a href="javascript:;" onclick="showDialog('#dialog')" style="margin-right: 10px;"> <span class="mif-pencil" title="edit"></span> </a>
                          <a href=""> <span class="mif-cross" title="Delete"></span> </a> 
                        </td>
                    </tr>
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