<?php $__env->startSection('body'); ?>
<h1>Rolls:</h1>
    <div class="container mt-5 text-center">
    	
    	<div class="row">
    		<div class="col-6 col-md-4">
    			 <?php if (isset($component)) { $__componentOriginal491e129018954f2a2785e3182bdbcd54babfbf78 = $component; } ?>
<?php $component = app()->make(App\View\Components\ChopstickItem::class, ['title' => 'Tempura Rolls','link' => 'tokyo/rolls/tempura','imgsrc' => 'https://poshsushi.com/wp-content/uploads/2015/11/1000x657_lunch_special_villarreal.jpg']); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal491e129018954f2a2785e3182bdbcd54babfbf78)): ?>
<?php $component = $__componentOriginal491e129018954f2a2785e3182bdbcd54babfbf78; ?>
<?php unset($__componentOriginal491e129018954f2a2785e3182bdbcd54babfbf78); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    		</div>
    		<div class="col-6 col-md-4">
    			 <?php if (isset($component)) { $__componentOriginal491e129018954f2a2785e3182bdbcd54babfbf78 = $component; } ?>
<?php $component = app()->make(App\View\Components\ChopstickItem::class, ['title' => 'Fresh Rolls','link' => 'tokyo/rolls/fresh','imgsrc' => 'https://scontent-dfw5-2.xx.fbcdn.net/v/t1.0-9/89095330_2541257979308965_2520772303806005248_n.jpg?_nc_cat=104&_nc_sid=8bfeb9&_nc_ohc=HvnaUPt104sAX8uu_Nx&_nc_ht=scontent-dfw5-2.xx&oh=5ab5ed03a2e6decaca6044f1f51ae4e6&oe=5EA75E9B']); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal491e129018954f2a2785e3182bdbcd54babfbf78)): ?>
<?php $component = $__componentOriginal491e129018954f2a2785e3182bdbcd54babfbf78; ?>
<?php unset($__componentOriginal491e129018954f2a2785e3182bdbcd54babfbf78); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    		</div>

    		<div class="col-6 col-md-4">
    			 <?php if (isset($component)) { $__componentOriginal491e129018954f2a2785e3182bdbcd54babfbf78 = $component; } ?>
<?php $component = app()->make(App\View\Components\ChopstickItem::class, ['title' => 'Breaded Rolls','link' => '#','imgsrc' => 'https://thumbs.dreamstime.com/z/roll-sushi-breaded-salmon-rice-tropical-menus-leaves-tempura-close-up-68979360.jpg']); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal491e129018954f2a2785e3182bdbcd54babfbf78)): ?>
<?php $component = $__componentOriginal491e129018954f2a2785e3182bdbcd54babfbf78; ?>
<?php unset($__componentOriginal491e129018954f2a2785e3182bdbcd54babfbf78); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    		</div>
    	</div>
    	
    	
		
	
	</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pitunti\Desktop\proyectos-laravel\chopstick\resources\views/rolls.blade.php ENDPATH**/ ?>