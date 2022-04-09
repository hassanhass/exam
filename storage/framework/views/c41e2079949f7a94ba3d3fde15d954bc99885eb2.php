
<div class="bg-gray-900 border-gray-200 dark:border-gray-700 rounded-lg  mt-2 mr-4 ml-4" dir="rtl">
    
    <ul class="flex justify-center text-sm font-medium text-center text-gray-500 dark:text-gray-400">
        <li class="mr-2">
            <a href="<?php echo e(route('dashboard')); ?>" class="<?php echo e(Request::is('dashboard') ? 'text-blue-600' : 'text-gray-50'); ?> inline-flex p-4 rounded-t-lg dark:text-blue-500 dark:border-blue-500 group" aria-current="page">
                <i class="fa-solid fa-rectangle-list ml-3"></i>الصفحة الرئيسية
            </a>
        </li>
        <li class="mr-2">
            <a href="<?php echo e(route('students')); ?>" class="<?php echo e(Request::is('students') ? 'text-blue-600' : 'text-gray-50'); ?> inline-flex p-4 rounded-t-lg border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                <i class="fa-solid fa-user-graduate ml-3"></i>الطلاب
            </a>
        </li>
        <li class="mr-2">
            <a href="<?php echo e(route('doctors')); ?>" class="<?php echo e(Request::is('doctors')  ? 'text-blue-600' : 'text-gray-50'); ?> inline-flex p-4 rounded-t-lg border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                <i class="fa-solid fa-user-tie ml-3"></i>التدريسسين
            </a>
        </li>
        <li class="mr-2">
            <a href="<?php echo e(route('absences')); ?>" class="<?php echo e(Request::is('absences')  ? 'text-blue-600' : 'text-gray-50'); ?> inline-flex p-4 rounded-t-lg border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                <i class="fa-solid fa-user-tie ml-3"></i>الغيابات
            </a>
        </li>
        <li class="mr-2">
            <a href="<?php echo e(route('dashboard')); ?>" class="<?php echo e(Request::is('dashboard') ? 'text-blue-600' : 'text-gray-50'); ?> inline-flex p-4 rounded-t-lg border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                <i class="fa-solid fa-user-tie ml-3"></i>المالية
            </a>
        </li>
        <li class="mr-2">
            <a href="<?php echo e(route('dashboard')); ?>" class="<?php echo e(Request::is('dashboard') ? 'text-blue-600' : 'text-gray-50'); ?> inline-flex p-4 rounded-t-lg border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                <i class="fa-solid fa-user-tie ml-3"></i>الصادرة و الواردة
            </a>
        </li>
        <li >
            <div class="top-0 mt-4 mr-4 ml-4">
                <?php if(Route::has('login')): ?>
                    <div class="space-x-4">

                        <?php if(auth()->guard()->check()): ?>
                            <a
                                href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="font-medium  text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150"
                            >
                                <i class="fa-solid fa-arrow-right-from-bracket ml-3"></i>logout
                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150"><i class="fa-solid fa-right-to-bracket ml-3"></i>login</a>

                            <?php if(Route::has('register')): ?>
                                <a href="<?php echo e(route('register')); ?>" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150"><i class="fa-solid fa-right-to-bracket ml-3"></i>Register</a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </li>
    </ul>
</div>
<?php /**PATH F:\Github\exam\resources\views/includes/header.blade.php ENDPATH**/ ?>