@extends('layouts.main') 
@section('page-title', 'All Properties - Richton Realty')
@section('content') 
<div class="listings-page">
  <div class="listings-city">
    <img
    src="https://cdn.trendir.com/wp-content/uploads/2016/06/Modern-house-in-Auckland-New-Zealand.jpg"
    alt=""
    class="listings-city__image"
/>
<h1 class="listings-city__title">South Beach</h1>
  </div>
  <div class="listings-filter">
    <div class="listings-filter__wrapper">
      <div class="listings-filter__option">
        Any Price <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__option">
        All Beds <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__option">
        Home Type <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__option">
        More <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__button">
        Search
      </div>
    </div>
  </div>
  <div class="listings-properties">
    <div class="container">
      <div class="row">
        @for ($i = 0; $i < 12; $i++)
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="listings-properties__item">
            <i class="fa-solid fa-heart listings-properties__saved"></i>
            <a href="/listing/2123-grand-ave-miami-fl-33456/1">
              <img src="https://cdn.trendir.com/wp-content/uploads/2016/06/Modern-house-in-Auckland-New-Zealand.jpg" alt="">
              <span class="listings-properties__item-price">$250,000</span>
              
              <span class="listings-properties__item-details"><i class="fa-solid fa-bed"></i> 4 <i class="fa-solid fa-bath"></i> 3  <i class="fa-solid fa-ruler"></i> 2400 SQFT</span>
              <span class="listings-properties__item-address">2135 Grand St, <br>
              Miami Beach, FL 23456
              </span>
         <div class="listings-properties__item-line">
  
         </div>
              <span class="listings-properties__item-owner">Bryan Realty</span>
            </div>
            </a>
      
      </div>
        @endfor
      </div>
  </div>
  </div>
</div>
@endsection
