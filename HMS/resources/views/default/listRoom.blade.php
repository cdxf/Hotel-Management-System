@extends('layout')
@section('title')
{{ $title }}
@stop
@section('content')

 {{-- area to list all user--}}
 
	 <a href="javascript:;" onclick="showDialog('#dialogaddroom')"><button class="button primary"><span class="mif-plus"></span> Add room...</button></a>
	 <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
                    <thead>
                    <tr>                      
                        <td style="width: 15px">ID</td>
                        <td class="sortable-column" style="width: 50px">NameRoom</td>
                        <td class="sortable-column" style="width: 50px">RoomType</td>
                         <td class="sortable-column" style="width: 50px">Phone</td>
                        <td class="sortable-column" style="width: 20px">Description</td>
                        <td class="sortable-column" style="width: 20px" >Status</td>                  
                        <td class="sortable-column" style="width: 20px">Created_at</td>
                        <td style="width: 90px">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($room as $r)
                      <tr>
                        <td >
                           {{ $r->id }}
                        </td>
                        <td>{{ $r->name }}</td>
                        <td>
                          @foreach ($room_type as $r_t)
                             @if ($r_t->id == $r->room_type_id)
                               {{ $r_t->name }}
                             @endif
                          @endforeach
                        </td>
                        <td>{{ $r->phone }}</td>
                        <td> {{ $r->desc }} </td>
                        <td> 
                        @if ($r->status == 'A')
                        	Avaiable
                        	@elseif ($r->status == 'N')
                        	    Not Avaiable
                        	    @elseif($r->status == 'B')
                        	    Bussy
                        @endif

                        <td> {{ $r->created_at }}</td>

                        <td>
                        <a href="" style="margin-right: 10px;"> <span class="mif-user" title="detail"></span> </a>
                         <a href="javascript:;" onclick="showDialog('#dialogedituser{{ $r->id }}')"  style="margin-right: 10px;"> <span class="mif-pencil" title="edit"></span> </a>
                          <a href=""> <span class="mif-cross" title="Delete"></span> </a> 
                        </td>
                    </tr>



                          {{-- area to display modal window edit room--}}
         <div data-role="dialog" id="dialogedituser{{ $r->id }}" class="padding20 dialog" data-close-button="true" data-windows-style="true" style="left: 0px; right: 0px; width: auto; height: auto; visibility: visible; top: 282.5px;" data-overlay='true' data-overlay-color="modal">
            <div class="container">
                 <h1>Edit Room</h1>
            <p>
               <form action="" method="post" accept-charset="utf-8" class="form-input">
               
                 <div class="cell">
                    <label class="label-input"> ID :</label>
                        <label class="label-input">   {{ $r->id }}</label>                                                        
                   </div> 
                <div class="cell">
                    <label class="label-input"> Name</label>
                        <div class="input-control text">
                             <input type="text"  name="name" value="{{ $r->name }}">
                        </div>
                    <label class="label-input"> Phone </label>
                        <div class="input-control text">
                             <input type="text" name="phone" value="{{ $r->phone }}">
                        </div>                   
                </div> 
                <div class="cell">
                    <label class="label-input"> Description </label>
                        <div class="input-control text">
                             <input type="text" name="desc" value="{{ $r->desc }}">
                        </div> 
                     <label class="label-input"> RoomType </label>
                            <div class="input-control select">
                                    <select>
                                    @foreach ($room_type as $r_type)
                                        @if ($r_type->id == $r->room_type_id)
                                           <option selected> {{ $r_type->name }} </option>
                                             @else
                                             <option> {{ $r_type->name }} </option>

                                        @endif
                                    @endforeach     
                                    </select>   
                          </div>
                              
                 </div>
                 
                
                <input type="submit" class="button primary" name="" value="Save">
                <input type="button" class="button warning" name="" value="Cancel" onclick="closeDialog('#dialogedituser{{ $r->id }}')" >
            </form>

            </p>

            </div>
           
        </div>
       
                    {{-- end -- area to display modal window edit user--}}
                    {{-- every foreach create a ID for dialog which is special for one user ID so we can call it when click--}}

                    @endforeach     
                    {{-- area for addroom modal --}}
		 <div data-role="dialog" id="dialogaddroom" class="padding20 dialog" data-close-button="true" data-windows-style="true" style="left: 0px; right: 0px; width: auto; height: auto; visibility: visible; top: 282.5px;" data-overlay='true' data-overlay-color="modal">
            <div class="container">
                 <h1>Add New Room</h1>
            <p>
               <form action="{{ action('Manage\RoomController@addRoom') }}" method="post" accept-charset="utf-8" class="form-input">
                {!! csrf_field() !!}
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="cell">
                    <label class="label-input"> Name</label>
                        <div class="input-control text">
                             <input type="text"  name="name">
                        </div>
                    <label class="label-input"> Phone </label>
                        <div class="input-control text">
                             <input type="text" name="phone">
                        </div>                   
                </div> 
                <div class="cell">
                    <label class="label-input"> Description </label>
                        <div class="input-control text">
                             <input type="text" name="desc">
                        </div> 
                        <label class="label-input"> Room Type </label>
                            <div class="input-control select">
                                    <select name='room_type_id'>
                                        @foreach ($room_type as $type)
				    					<option value="{{ $type->id }}">{{ $type->name }}</option>
				    					@endforeach
                                    </select>   
                          </div>
                     
                              
                 </div>
                 
                
                <input type="submit" class="button primary" name="" value="Save">
                <input type="button" class="button warning" name="" value="Cancel" onclick="closeDialog('#dialogaddroom')" >
            </form>

            </p>

            </div>
           
        </div>



                    {{-- area for addroom modal --}}
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
                    </tbody>
                </table>

 

@stop