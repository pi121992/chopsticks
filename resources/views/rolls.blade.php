@extends('layouts.plantilla')


@section('body')
<h1>Rolls:</h1>
    <div class="container mt-5 text-center">
    	
    	<div class="row">
    		<div class="col-6 col-md-4">
    			<x-chopstickItem title="Tempura Rolls" link="tokyo/rolls/tempura" imgsrc="https://poshsushi.com/wp-content/uploads/2015/11/1000x657_lunch_special_villarreal.jpg"/>
    		</div>
    		<div class="col-6 col-md-4">
    			<x-chopstickItem title="Fresh Rolls" link="tokyo/rolls/fresh" imgsrc="https://scontent-dfw5-2.xx.fbcdn.net/v/t1.0-9/89095330_2541257979308965_2520772303806005248_n.jpg?_nc_cat=104&_nc_sid=8bfeb9&_nc_ohc=HvnaUPt104sAX8uu_Nx&_nc_ht=scontent-dfw5-2.xx&oh=5ab5ed03a2e6decaca6044f1f51ae4e6&oe=5EA75E9B"/>
    		</div>

    		<div class="col-6 col-md-4">
    			<x-chopstickItem title="Breaded Rolls" link="#" imgsrc="https://thumbs.dreamstime.com/z/roll-sushi-breaded-salmon-rice-tropical-menus-leaves-tempura-close-up-68979360.jpg"/>
    		</div>
    	</div>
    	
    	
		
	
	</div>
	
@endsection