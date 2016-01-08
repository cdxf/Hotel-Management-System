@extends('layout')
@section('title')
{{ $title }}
@stop
@section('content')

 {{-- area to list all user--}}
 
	 <a href="{{ route('addroom_man') }}"><button class="button primary"><span class="mif-plus"></span> Add room...</button></a>
	 <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
                    <thead>
                    <tr>                      
                        <td style="width: 15px">ID</td>
                        <td class="sortable-column" style="width: 50px">NameRoom</td>
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



                          {{-- area to display modal window edit user--}}
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
                             <input type="text" name="phone" value="{{ $r->desc }}">
                        </div> 
                     <label class="label-input">  </label>
                            <div class="input-control select">
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>   
                          </div>
                              
                 </div>
                 
                
                <input type="submit" class="button primary" name="" value="Save">
                <input type="button" class="button warning" name="" value="Cancel" onclick="closeDialog('#dialogedituser')" >
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

            function closeDialog(id){
                 var dialog = $(id).data('dialog');
                dialog.close();
                return false;
            }
        </script>
                    {{-- end -- area to display modal window edit user--}}
                    {{-- every foreach create a ID for dialog which is special for one user ID so we can call it when click--}}

                    @endforeach                    
                    </tbody>
                </table>

 

@stop