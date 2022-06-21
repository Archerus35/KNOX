<?php $__env->startSection('content'); ?>
<body>
        <div class="container px-9 mx-auto" style="background-size: cover;background-image: url(https://cdn.dribbble.com/users/1646023/screenshots/6625629/gamer_800x600.gif);">
            <h3 class="text-2xl font-medium text-blue-300" style="text-align: center;">Lista de Productos</h3>
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                    <img src="<?php echo e(url($product->image)); ?>" alt="" class="w-full max-h-60">
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-2 py-6">
                        <h3 class="text-blue-300 uppercase"><?php echo e($product->name); ?></h3>
                        <span class="mt-2 text-blue-300">$<?php echo e($product->price); ?></span>
                        <form action="<?php echo e(route('cart.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" value="<?php echo e($product->id); ?>" name="id">
                            <input type="hidden" value="<?php echo e($product->name); ?>" name="name">
                            <input type="hidden" value="<?php echo e($product->price); ?>" name="price">
                            <input type="hidden" value="<?php echo e($product->image); ?>"  name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 py-2 text-white bg-red-900 rounded">Agregar al carro</button>
                        </form>
                    </div>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\carrito\resources\views/products.blade.php ENDPATH**/ ?>