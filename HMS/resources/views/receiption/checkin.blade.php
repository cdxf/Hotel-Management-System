@extends('layout')
@section('title')
 @stop
@section('content')
	 <form action="" method="post" accept-charset="utf-8" class="form-input">
        <div class="cell">
            <label class="label-input"> Name </label>
                <div class="input-control text">
                     <input type="text">
                </div>
            <label class="label-input"> Address </label>
                <div class="input-control text">
                     <input type="text">
                </div>
        </div>
        
           
          
        <input type="submit" class="button primary" name="" value="Save">
        <input type="button" class="button warning" name="" value="Cancel">

    </form>
 @stop
 
