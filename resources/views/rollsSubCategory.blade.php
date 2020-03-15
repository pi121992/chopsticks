@extends('layouts.plantilla')


@section('body')


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item text-uppercase"><a href="#">{{ $location }}</a></li>
    <li class="breadcrumb-item text-uppercase"><a href="#">Rolls</a></li>
    <li class="breadcrumb-item text-uppercase" ><a href="#">{{ $sub_category }}</a></li>
    
  </ol>
</nav>

    <div class="container mt-5 text-center">
    	
    	<div class="row">
            @for ($i = 0; $i < count($rollos); $i++)

              <div class="col-6 col-md-3">
                @component('components.chopstickItem', [
                'title'=>$rollos[$i]->name,
                'imgsrc'=>$rollos[$i]->img,
                'link'=>"#"
                ])
                  ${{ $rollos[$i]->price }}<br>
                  {{ $rollos[$i]->info }}

              @endcomponent
            </div>
              
               
            @endfor
    		
    		
    	</div>
    	
    	
		
	
	</div>
	
@endsection