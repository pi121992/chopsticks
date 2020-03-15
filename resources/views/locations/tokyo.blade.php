@extends('layouts.plantilla')

@section('body')
     <x-corousel/>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container mt-5">

        <!-- Three columns of text below the carousel -->
        <div class="row text-center">
            <div class="col-6 col-md-3">
	        	<x-chopstickItem title="Appetizer" link="tokyo/appetizer" imgsrc="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Edamame_by_Zesmerelda_in_Chicago.jpg/1200px-Edamame_by_Zesmerelda_in_Chicago.jpg"/>
        	</div>

        	<div class="col-6 col-md-3">
	        	<x-chopstickItem title="Rolls" link="tokyo/rolls" imgsrc="https://poshsushi.com/wp-content/uploads/2015/11/1000x657_nissi_roll.jpg"/>
        	</div>

        	

        	<div class="col-6 col-md-3">
	        	<x-chopstickItem title="Desserts" link="tokyo/rolls" imgsrc="https://www.thespruceeats.com/thmb/zXB9_pJ9Z40SUi75eRezebs5lTM=/960x0/filters:no_upscale():max_bytes(150000):strip_icc()/gluten-free-new-york-cheesecake-1450985-hero-01-dc54f9daf38044238b495c7cefc191fa.jpg"/>
        	</div>
        	<div class="col-6 col-md-3">
	        	<x-chopstickItem title="Salads" link="tokyo/rolls" imgsrc="https://cafedelites.com/wp-content/uploads/2016/07/Lemon-Herb-Mediterranean-Chicken-Salad-208-1.jpg"/>
        	</div>
        	<div class="col-6 col-md-3">
	        	<x-chopstickItem title="Soup" link="tokyo/rolls" imgsrc="https://www.keyingredient.com/media/cb/52/627d91d385b11eb251f8aaad6a12a31256a9.jpg/rh/creamy-poblano-pepper-soup.jpg"/>
        	</div>
        	
        </div>
        






        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Drinks. <span class="text-muted">limonada de pepino</span></h2>
            <p class="lead">Refrescate con nuestra limonada de pepino</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://scontent-dfw5-2.xx.fbcdn.net/v/t1.0-0/s640x640/65501709_2050679268366841_6909037469274996736_n.jpg?_nc_cat=108&_nc_sid=8bfeb9&_nc_ohc=mLxh7JdNlQkAX-N8DXe&_nc_ht=scontent-dfw5-2.xx&_nc_tp=7&oh=e904e006a556c996bd3f4af85322ff58&oe=5E96D9FD" width="200" data-src="" alt="Generic placeholder image">
          </div>
        </div>

         <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://scontent-dfw5-2.xx.fbcdn.net/v/t1.0-9/88001587_206292840612031_8444657787069267968_n.jpg?_nc_cat=100&_nc_sid=8bfeb9&_nc_ohc=QXSSechrgCoAX8YtEXn&_nc_ht=scontent-dfw5-2.xx&oh=37db3ecad8a17042010ffd14baa2c924&oe=5E9643DE" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>


      

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2020 Chopstick Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
  

   
@endsection