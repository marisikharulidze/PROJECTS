@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Autos Page</div>
  <div class="card-body">
      
      <form action="{{ url('auto/' .$autos->id) }}" method="GET" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")

        <input type="hidden" name="id" id="id" value="{{$autos->id}}" id="id" />
        <br>
        მანქანის დასახელება : <input type="text" name="saxeli" id="saxeli" class="form-control" value="{{$autos->saxeli}}">
        <br>
        <br>
        ავტომობილის მოდელი : <input type="text" name="modeli" id="modeli" class="form-control" value="{{$autos->modeli}}">
        <br>
        <br>
        მანქანის გამოშვების თარიღი : <input type="date" name="gamoshvebit_tarigi" id="gamoshvebit_tarigi" class="form-control" value="{{$autos->gamoshvebit_tarigi}}">
        <br>
        <br>
        ძრავის მოცულობა : <input type="text" name="dzravi" id="dzravi" class="form-control" value="{{$autos->dzravi}}">
        <br>
        <br>
        განბაჟება : <input type="text" name="ganbajeba" id="ganbajeba" class="form-control" value="{{$autos->ganbajeba}}">
        <br>
        <br>
        ფასი : <input type="float" name="fasi" id="fasi" class="form-control" value="{{$autos->fasi}}">
        <br>
        <br>
        <input type="submit" value="Update" class="btn btn-success"></br>

    </form>
   
  </div>
</div>
 
@stop