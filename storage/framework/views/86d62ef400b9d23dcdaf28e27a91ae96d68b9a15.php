<!-- El apartado de registro, introduciremos nuestros datos para formar un usuario y nos llevara al apartado de acceso donde podremos introducirnos a la página -->

<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('content'); ?>


<div class="block mx-auto my-12 p-8 bg-black w-1/3 border border-gray-900
rounded-lg shadow-lg" style="background-size:cover;background-attachment: fixed;background-image: url(https://64.media.tumblr.com/95f07365124166faf8bff85bceecfb98/tumblr_okpftxQMgT1rldv4go1_1280.gifv);position: relative;float:right;">

  <h1 class="text-3xl text-center font-bold text-gray-100">Registrarse</h1>

  <form class="mt-4" method="POST" action="">
    <?php echo csrf_field(); ?>

    <input type="text" class="border border-gray-900 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre"
    id="name" name="name">

    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* <?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <input type="email" class="border border-gray-900 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email"
    id="email" name="email">

    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* <?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <input type="password" class="border border-gray-900 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña"
    id="password" name="password">

    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* <?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <input type="password" class="border border-gray-900 rounded-md bg-gray-200
    w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
    placeholder="Confirmar contraseña" id="password_confirmation"
    name="password_confirmation">

    <button type="submit" class="rounded-md bg-indigo-900 w-full text-lg
    text-white font-semibold p-2 my-3 hover:bg-indigo-600">Enviar</button>


  </form>


</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\carrito\resources\views/auth/register.blade.php ENDPATH**/ ?>