@extends('layouts.main') 
@section('page-title', '23 Grand Ave - Richton Realty')
@section('content') 
<div class="single-listing-page">
<div class="listing-top">
  <img class="listing-top__img" src="https://cdn.trendir.com/wp-content/uploads/2016/06/Modern-house-in-Auckland-New-Zealand.jpg" alt="">
  <div class="listing-top__form-wrapper">
    <div class="container">    
      <form class="listing-top__form" action="">
      <label class="listing-top__form-label">Schedule A Tour</label>
      <div class="listing-top__form-group listing-top__form-group--horz">
        <div class="listing-top__form-option">In-Person</div>
        <div class="listing-top__form-option">Video</div>
      </div>
      <label class="listing-top__form-label">Date</label>
      <div class="listing-top__form-group">
        <div class="listing-top__form-option">February 22</div>
      </div>
      <label class="listing-top__form-label">Time</label>
      <div class="listing-top__form-group">
        <div class="listing-top__form-option">11 AM</div>
      </div>
      <label class="listing-top__form-label">Personal Info</label>
      <div class="listing-top__form-group">
        <div class="listing-top__form-option">Enter Phone</div>
      </div> 
      <div class="listing-top__form-group">
        <div type="submit" class="listing-top__form-option">Enter Email</div>
      </div>
      <div class="listing-top__form-group">
        <button type="submit" class="listing-top__form-button">Schedule A Tour</button>
      </div>
    </form>
  </div>

  </div>
</div>
<div class="listing-info">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1>23 Grand Ave <br>
        Miami, FL 33456
        </h1>
        <div class="listing-info__details">
          <span class="listing-info__details-text"> <i class="fa-solid fa-bed"></i> 4 </span>
          <span class="listing-info__details-text"> <i class="fa-solid fa-bath"></i> 3 </span>
          <span class="listing-info__details-text"> <i class="fa-solid fa-ruler"></i> 2400 SQFT</span>
       
        </div>
      </div>
      <div class="col-md-5">
        <span class="listing-info__agent-title">Agent</span>
        <span class="listing-info__agent-name">John Smith</span>
        <p class="listing-info__profile">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga labore fugiat beatae, recusandae sunt, autem magni, at nemo consectetur quo minima minus. Impedit, quod architecto? Tempora, animi? Officiis, saepe earum?</p>
      </div>
    </div>
  </div>
</div>
<div class="listing-extras">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="listing-extras__details">
        <h2>More Info</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident inventore qui voluptate dolorum sint amet fuga eaque perferendis quis quaerat ullam reiciendis, molestias quos nisi saepe laboriosam porro dolor! Numquam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio culpa ea debitis, qui quo excepturi reiciendis consequuntur accusamus necessitatibus sequi magni harum nulla doloribus! Fugiat minus at aperiam provident! Adipisci. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet voluptatem deserunt natus. Debitis quidem eius ullam ab atque impedit, aut vitae alias est reiciendis illum. Magnam laboriosam deleniti perspiciatis consequuntur!</p>
        <h3>Details</h3>
          <ul>
            <li>Test</li>
            <li>Test</li>
            <li>Test</li>
            <li>Test</li>
            <li>Test</li>
            <li>Test</li>
            <li>Test</li>
            <li>Test</li>
            <li>Test</li>
            <li>Test</li>
          </ul>
        </div>
        
        </div>
        <div class="col-md-5">
          <div class="listing-extras__gallary">
            <h2>Images</h2>
            <img src="https://cdn.trendir.com/wp-content/uploads/2016/06/Modern-house-in-Auckland-New-Zealand.jpg" alt="">
            <img src="https://cdn.trendir.com/wp-content/uploads/2016/06/Modern-house-in-Auckland-New-Zealand.jpg" alt="">
          </div>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
