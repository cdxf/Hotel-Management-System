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
                        <td class="sortable-column" style="width: 20px" >Birthday</td>
                        <td class="sortable-column" style="width: 20px">Address</td>
                        <td class="sortable-column" style="width: 20px">Sex</td>
                        <td class="sortable-column" style="width: 20px">Created_at</td>
                        <td style="width: 90px">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                   
                    <tr>
                        <td >
                           1
                        </td>
                        <td>Cao Van Quyen</td>
                        <td>016734343434</td>
                        <td> Manager </td>
                        <td> 12/12/2014 </td>
                        <td> quan 8 </td>
                        <td> Nam </td>
                        <td class="align-center"><span class="mif-stop fg-red"></span></td>
                        <td>
                        <a href="" style="margin-right: 10px;"> <span class="mif-user" title="detail"></span> </a>
                         <a href="javascript:;" onclick="showDialog('#dialogedituser')"  style="margin-right: 10px;"> <span class="mif-pencil" title="edit"></span> </a>
                          <a href=""> <span class="mif-cross" title="Delete"></span> </a> 
                        </td>
                    </tr>
                    </tbody>
                </table>

         {{-- area to display modal window edit user--}}
         <div data-role="dialog" id="dialogedituser" class="padding20 dialog" data-close-button="true" data-windows-style="true" style="left: 0px; right: 0px; width: auto; height: auto; visibility: visible; top: 282.5px;" data-overlay='true' data-overlay-color="modal">
            <div class="container">
                 <h1>Edit User</h1>
            <p>
               <form action="" method="post" accept-charset="utf-8" class="form-input">
                <div class="cell">
                    <label class="label-input"> Name</label>
                        <div class="input-control text">
                             <input type="text">
                        </div>
                    <label class="label-input"> Phone </label>
                        <div class="input-control text">
                             <input type="text">
                        </div>                   
                </div> 
                <div class="cell">
                    <label class="label-input"> Birthday </label>
                        <div class="input-control text" data-role="datepicker" >
                            <input type="text" id='date-p'>
                            <button class="button"><span class="mif-calendar"></span></button>
                        </div>
                        <script>
                            $(function(){
                                $("#datepicker").datepicker();

                            });
                              document.getElementById('date-p').value = (new Date()).format("yyyy.mm.dd");
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
                             <input type="text">
                        </div>
                    <label class="label-input"> Address </label>
                    <div class="input-control text">
                         <input type="text">
                    </div>
                 </div>
                 <div class="cell">
                     <label class="input-control radio small-check">
                    <input type="radio" name="n3" checked="">
                      <span class="check"></span>
                    <span class="caption">Male</span>
                     </label>
                 <label class="input-control radio small-check">
                    <input type="radio" name="n3" checked="">
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

@stop