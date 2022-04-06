@extends('layouts.account') 
@section('page-title', 'Listing Request Status - Richton Realty')
@section('page-bg', 'https://cdn.trendir.com/wp-content/uploads/2016/06/Modern-house-in-Auckland-New-Zealand.jpg')
@section('content') 
<div class="request-list">
  <h2>All Requests</h2>
@for ($i = 0; $i < 10; $i++)
<div class="request-list__wrapper">
  <div class=""> 
    <h3>2134 Grand Ave </h3> 
    <span class="request-list__details">
      <i class="fa-solid fa-bed"></i> 4 
      <i class="fa-solid fa-bath"></i> 3  <i class="fa-solid fa-ruler"></i> 2400 SQFT</span></div>
   <div class="request-list__info">
     <div class="request-list__info-title">
       Status
     </div>
     <div class="request-list__info-status request-list__info-status--success request-list__info-status--canceled
     request-list__info-status--sold">
       Success
     </div>
   </div>
 </div>
@endfor
</div>
@endsection
