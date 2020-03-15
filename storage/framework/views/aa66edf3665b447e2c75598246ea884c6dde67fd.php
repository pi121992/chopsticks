<?php $__env->startSection('body'); ?>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item text-uppercase"><a href="#"><?php echo e($location); ?></a></li>
    <li class="breadcrumb-item text-uppercase"><a href="#">Rolls</a></li>
    <li class="breadcrumb-item text-uppercase" ><a href="#"><?php echo e($sub_category); ?></a></li>
    
  </ol>
</nav>

    <div class="container mt-5 text-center">
    	
    	<div class="row">
            <?php for($i = 0; $i < count($rollos); $i++): ?>

              <div class="col-6 col-md-3">
                <?php $__env->startComponent('components.chopstickItem', [
                'title'=>$rollos[$i]->name,
                'imgsrc'=>$rollos[$i]->img,
                'link'=>"#"
                ]); ?>
                  $<?php echo e($rollos[$i]->price); ?><br>
                  <?php echo e($rollos[$i]->info); ?>


              <?php if (isset($__componentOriginalf6a8ed0652b89759aac1e76e410cab71a315fd6f)): ?>
<?php $component = $__componentOriginalf6a8ed0652b89759aac1e76e410cab71a315fd6f; ?>
<?php unset($__componentOriginalf6a8ed0652b89759aac1e76e410cab71a315fd6f); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
            </div>
              
               
            <?php endfor; ?>
    		
    		
    	</div>
    	
    	
		
	
	</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pitunti\Desktop\proyectos-laravel\chopstick\resources\views/rollsSubCategory.blade.php ENDPATH**/ ?>