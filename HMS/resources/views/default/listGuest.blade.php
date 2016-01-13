@extends('layout')
@section('title')
{{ $title }}
@stop
@section('content')

 {{-- area to list all user--}}
 
	 
	 <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
                    <thead>
                    <tr>                      
                        <td style="width: 15px">ID</td>
                        <td class="sortable-column" style="width: 50px">Name</td>
                         <td class="sortable-column" style="width: 50px">Identify</td>
                        <td class="sortable-column" style="width: 20px">Nationality</td>
                        <td class="sortable-column" style="width: 20px" >Phone</td>
                        <td class="sortable-column" style="width: 20px" >Email</td>
                        <td class="sortable-column" style="width: 20px">Address</td>
                        <td class="sortable-column" style="width: 20px">Sex</td>
                        <td class="sortable-column" style="width: 20px">Created_at</td>
                        <td style="width: 150px">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($guest as $g)
                      <tr>
                        <td >
                           {{ $g->id }}
                        </td>
                        <td> {{ $g->name }}</td>
                        <td>{{ $g->identify }}</td>
                        <td> {{ $g->nationality }} </td>
                         <td> {{ $g->phone}} </td>
                        <td> {{ $g->email }} </td>
                        <td> {{ $g->address }} </td>  
                        {{-- 
      0 = not known,
      1 = male,
      2 = female
      --}}
                        <td> @if ( $g->sex == '1')
                          Male
                          @elseif ($g->sex == '2')
                            Female
                        @endif </td>
                        <td> {{ $g->created_at }}</td>

                        <td>
                       <a href="" style="margin-right: 10px;"> <span class="mif-security" title="Change Password"></span> </a>
                        <a href="" style="margin-right: 10px;"> <span class="mif-user" title="User detail"></span> </a>
                         <a href="javascript:;" onclick="showDialog('#dialogeditguest{{ $g->id }}')"  style="margin-right: 10px;"> <span class="mif-pencil" title="edit"></span> </a>
                          <a href=""> <span class="mif-cross" title="Delete"></span> </a> 
                        </td>
                    </tr>



                          {{-- area to display modal window edit user--}}
         <div data-role="dialog" id="dialogeditguest{{ $g->id }}" class="padding20 dialog" data-close-button="true" data-windows-style="true" style="left: 0px; right: 0px; width: auto; height: auto; visibility: visible; top: 282.5px;" data-overlay='true' data-overlay-color="modal">
            <div class="container">
                 <h1>Edit Guest</h1>
            <p>
               <form action="{{ action('Manage\GuestController@updateGuest')}}" method="post" accept-charset="utf-8" class="form-input">
                 {!! csrf_field() !!}
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                 <div class="cell">
                    <label class="label-input"> ID :</label>
                        <div class="input-control text">
                             <input type="text"  name="id" value="{{ $g->id}}" readonly>
                        </div>                                                        
                   </div> 
                <div class="cell">
                    <label class="label-input"> Name</label>
                        <div class="input-control text">
                             <input type="text"  name="name" value="{{ $g->name }}">
                        </div>
                    <label class="label-input"> Phone </label>
                        <div class="input-control text">
                             <input type="text" name="phone" value="{{ $g->phone }}">
                        </div>                   
                </div> 

                 <div class="cell">
                     <label class="label-input"> Identify </label>
                        <div class="input-control text">
                             <input type="text" value="{{ $g->identify }}" name='identify'>
                        </div>
                    <label class="label-input"> Nationality</label>
                    <div class="input-control text">
                         <input type="text" value="{{ $g->nationality }}" name='nationality'>
                    </div>
                 </div>
           
                 <div class="cell">
                     <label class="label-input"> Email </label>
                        <div class="input-control text">
                             <input type="text" value="{{ $g->email }}" name='email'>
                        </div>
                    <label class="label-input"> Address </label>
                    <div class="input-control text">
                         <input type="text" name="email" value="{{ $g->email }}">
                    </div>
                 </div>
                 <div class="cell">
                    <label class="label-input"> Sex</label>
                     <label class="input-control radio small-check">
                     {{-- 1 = male,   2 = female --}}
                    <input type="radio" name="sex" checked="" value="1"> 
                      <span class="check"></span>
                    <span class="caption">Male</span>
                     </label>
                 <label class="input-control radio small-check">
                    <input type="radio" name="sex" checked="" value="2">
                      <span class="check"></span>
                    <span class="caption">Female</span>
            </label>
                 </div>

                <input type="submit" class="button primary" name="" value="Save">
                <input type="button" class="button warning" name="" value="Cancel" onclick="closeDialog('#dialogeditguest{{ $g->id }}')" >
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