@extends('layout')
@section('title')
{{ $title }}
@stop
@section('content')

 {{-- area to list all user--}}
 
	 <a href="{{ route('adduser_man') }}"><button class="button primary"><span class="mif-plus"></span> Add user...</button></a>
	 <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
                    <thead>
                    <tr>                      
                        <td style="width: 15px">ID</td>
                        <td class="sortable-column" style="width: 50px">Name</td>
                         <td class="sortable-column" style="width: 50px">Phone</td>
                        <td class="sortable-column" style="width: 20px">Role</td>
                        <td class="sortable-column" style="width: 20px" >Email</td>
                        <td class="sortable-column" style="width: 20px">Address</td>
                        <td class="sortable-column" style="width: 20px">Sex</td>
                        <td class="sortable-column" style="width: 20px">Created_at</td>
                        <td style="width: 110px">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($user as $ur)
                      <tr>
                        <td >
                           {{ $ur->id }}
                        </td>
                        <td>{{ $ur->name }}</td>
                        <td>{{ $ur->phone }}</td>
                        <td> @if ($ur->role == 1)
                            Director
                            @elseif ($ur->role ==0 )
                              receiption
                          
                        @endif </td>
                        <td> {{ $ur->email }} </td>
                        <td> {{ $ur->address }} </td>
                        <td> @if ( $ur->sex == '1')
                          Male
                          @elseif ($ur->sex == '0')
                            Female
                        @endif </td>
                        <td> {{ $ur->created_at }}</td>

                        <td>
                       <a href="" style="margin-right: 10px;"> <span class="mif-security" title="Change Password"></span> </a>
                        <a href="" style="margin-right: 10px;"> <span class="mif-user" title="User detail"></span> </a>
                         <a href="javascript:;" onclick="showDialog('#dialogedituser{{ $ur->id }}')"  style="margin-right: 10px;"> <span class="mif-pencil" title="edit"></span> </a>
                          <a href="{{ route('deleteuser_man', $ur->id) }}" onclick="return confirm('are you sure delete this ?')"> <span class="mif-cross" title="Delete"></span> </a> 
                        </td>
                    </tr>



                          {{-- area to display modal window edit user--}}
         <div data-role="dialog" id="dialogedituser{{ $ur->id }}" class="padding20 dialog" data-close-button="true" data-windows-style="true" style="left: 0px; right: 0px; width: auto; height: auto; visibility: visible; top: 282.5px;" data-overlay='true' data-overlay-color="modal">
            <div class="container">
                 <h1>Edit User</h1>
            <p>
               <form action="{{ action('Manage\UserController@updateUser') }}" method="post" accept-charset="utf-8" class="form-input">
                 {!! csrf_field() !!}
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                 <div class="cell">
                    <label class="label-input"> ID :</label>
                      <div class="input-control text">
                             <input type="text"  name="id" value="{{ $ur->id }}" readonly>
                        </div>                                                
                   </div> 
                <div class="cell">
                    <label class="label-input"> Name</label>
                        <div class="input-control text">
                             <input type="text"  name="name" value="{{ $ur->name }}">
                        </div>
                    <label class="label-input"> Phone </label>
                        <div class="input-control text">
                             <input type="text" name="phone" value="{{ $ur->phone }}">
                        </div>                   
                </div> 
                <div class="cell">
                    <label class="label-input"> Birthday </label>
                        <div class="input-control text" data-role="datepicker" >
                            <input type="text" id='date-p' name="birthday" value="{{ $ur->birthday }}">
                            <button class="button"><span class="mif-calendar"></span></button>
                        </div>
                        <script>
                            $(function(){
                                $("#datepicker").datepicker();

                            });
                              document.getElementById('date-p').value =  {{{ $ur->birthday }}};
                        </script>       
                          <label class="label-input"> Role </label>
                            <div class="input-control select">
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>   
                          </div>
                              
                 </div>
                 <div class="cell">
                     <label class="label-input"> Email </label>
                        <div class="input-control text">
                             <input type="text" value="{{ $ur->email }}">
                        </div>
                    <label class="label-input"> Address </label>
                    <div class="input-control text">
                         <input type="text" name="address" value="{{ $ur->address }}">
                    </div>
                 </div>
                 <div class="cell">
                    <label class="label-input"> Sex</label>
                     <label class="input-control radio small-check">
                     {{-- 0: nu      1: nam --}}
                    <input type="radio" name="sex" checked="" value="1">
                      <span class="check"></span>
                    <span class="caption">Male</span>
                     </label>
                 <label class="input-control radio small-check">
                    <input type="radio" name="sex" checked="" value="0">
                      <span class="check"></span>
                    <span class="caption">Female</span>
            </label>
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