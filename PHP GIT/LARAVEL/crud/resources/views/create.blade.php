@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('auto') }}" method="GET" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <br>
        მანქანის დასახელება : <input type="text" name="saxeli" id="saxeli" class="form-control">
        <br>
        <br>
        ავტომობილის მოდელი : <input type="text" name="modeli" id="modeli" class="form-control">
        <br>
        <br>
        მანქანის გამოშვების თარიღი : <input type="date" name="gamoshvebit_tarigi" id="gamoshvebit_tarigi" class="form-control">
        <br>
        <br>
        ძრავის მოცულობა : <input type="text" name="dzravi" id="dzravi" class="form-control">
        <br>
        <br>
        განბაჟება : <input type="text" name="ganbajeba" id="ganbajeba" class="form-control">
        <br>
        <br>
        ფასი : <input type="float" name="fasi" id="fasi" class="form-control">
        <br>
        <br>
        <input type="submit" value="Save" class="btn btn-success"><br>


    </form>
   
  </div>
</div>
 
@stop