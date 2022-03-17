@extends('layout')
@section('content')
 
<div class="card">

  <div class="card-header">Contactus Page</div>
  <div class="card-body">
    <div class="card-body">
    <h5 class="card-title">saxeli : {{ $autos->saxeli }}</h5>
    <p class="card-text">modeli : {{ $autos->modeli }}</p>
    <p class="card-text">gamoshvebit_tarigi : {{ $autos->gamoshvebit_tarigi }}</p>
    <p class="card-text">dzravi : {{ $autos->dzravi }}</p>
    <p class="card-text">ganbajeba : {{ $autos->ganbajeba }}</p>
    <p class="card-text">fasi : {{ $autos->fasi }}</p>
  </div>
  
  <hr>
  </div>

</div>