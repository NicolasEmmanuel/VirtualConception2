
@extends('layouts.app')
@section('content')
<section class="formation">
  <div class="container">
    
    <h3 class="first-h1">Accueil > Formation > Nos formations en digital</h3>

    <div class="User-description">

      <div class="User-text">
        <h1>Lorem, ipsum dolor sit.</h1>
        <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores tempora, non officiis autem quas eaque rem mollitia qui inventore atque unde ad sint! Eaque maiores, consectetur eum consequuntur atque fugiat.</h3>
      </div>

      <div class="User-image">
        <img src="/assets/image/formation.jpg" class="imgFormation" alt="">
      </div>

    </div>

  </div>

</section>
<section class="programme" >
  <div class="container">

    <div class="timeline-container">
      
      <div class="left">

        <div class="rb-container">

          <ul class="rb">
            <li class="rb-item" ng-repeat="itembx">
              <div class="title">
                3rd May 2020 7:00 PM
              </div>
              <div class="item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi, ea itaque laboriosam saepe ipsum tenetur reiciendis natus quia sint vitae dignissimos quod esse consequuntur sed sapiente repellat similique consequatur?</div>
    
            </li>
            <li class="rb-item" ng-repeat="itembx">
              <div class="title">
                3rd May 2020 7:00 PM
              </div>
              <div class="item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi, ea itaque laboriosam saepe ipsum tenetur reiciendis natus quia sint vitae dignissimos quod esse consequuntur sed sapiente repellat similique consequatur?</div>
    
            </li>
            <li class="rb-item" ng-repeat="itembx">
              <div class="title">
                3rd May 2020 7:00 PM
              </div>
              <div class="item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi, ea itaque laboriosam saepe ipsum tenetur reiciendis natus quia sint vitae dignissimos quod esse consequuntur sed sapiente repellat similique consequatur?</div>
    
            </li>
            </ul>
            </div>
      <!-- <div class="leftbox">

          <div class="rb-container">

            <ul class="rb">
              <li class="rb-item" ng-repeat="itembx">
                <div class="title">
                  3rd May 2020 7:00 PM
                </div>
                <div class="item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi, ea itaque laboriosam saepe ipsum tenetur reiciendis natus quia sint vitae dignissimos quod esse consequuntur sed sapiente repellat similique consequatur?</div>
      
              </li>
              <li class="rb-item" ng-repeat="itembx">
                <div class="title">
                  19th May 2020 3:00 PM
                </div>
                <div class="item-description">Mia Redwood commented on your last post.</div>
      
              </li>
      
              <li class="rb-item" ng-repeat="itembx">
                <div class="title">
                  17st June 2020 7:00 PM
                </div>
                <div class="item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, odio numquam ratione sint itaque beatae dolores rerum, architecto commodi pariatur dolorem ipsa ducimus ex quasi fugit atque. Ab, obcaecati maiores!</div>
      
              </li>
      
            </ul>
      
          </div>
      </div> 
-->
      </div>
      
      <div class="right">

        <div class="info-pratiques">
          <ul>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg> 

              <div class="info-text">
                <h2>Durée</h2>
                <h3>description blabla 200h</h3>
              </div>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg> 
              <div class="info-text">
                <h2>Lieu</h2>
                <h3>Fort-de-France</h3>
              </div>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg> 
              <div class="info-text">
                <h2>Certification</h2>
                <h3>Niveau 7 </h3>
              </div>
            </li>
          </ul>
        </div>

      </div>

    </div>

  </div>
</section>

@endsection