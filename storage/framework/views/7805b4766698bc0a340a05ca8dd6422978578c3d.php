<div>
    <div class="my-4 gap-4" dir="rtl">
        <!-- state -->
        <div class="p-6 justify-center flex grid grid-cols-3 gap-4 text-white bg-gradient-to-r bg-gradient-to-br from-purple-600 to-blue-500 rounded-lg border border-gray-200">
            <div class="flex">
                <div class="w-1/2 text-center">
                    <span class="text-2xl font-bold dark:text-white">599</span>
                    <h3>عدد الطلاب</h3>
                </div>
                <div class="w-1/2 mt-4">
                    <i class="fa-solid fa-user-graduate fa-2xl"></i>
                </div>
            </div>
            <div class="flex">
                <div class="w-1/2 text-center">
                    <span class="text-2xl font-bold dark:text-white">$599</span>
                    <h3>عدد التدريسين</h3>
                </div>
                <div class="w-1/2 mt-4">
                    <i class="fa-solid fa-building-columns fa-2xl"></i>
                </div>
            </div>
            <div class="flex">
                <div class="w-1/2 text-center">
                    <span class="text-2xl font-bold dark:text-white">$599</span>
                    <h3>عدد التدريسين</h3>
                </div>
                <div class="w-1/2 mt-4">
                    <i class="fa-solid fa-building-columns fa-2xl"></i>
                </div>
            </div>
        </div>
        <div class="p-6 bg-white rounded-lg border border-gray-200 my-4">
            <!-- Message -->
            <div>
                <?php if(session()->has('message')): ?>
                <div class="alert_remove_class flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <?php echo e(session('message')); ?>

                </div>
                <?php endif; ?>
            </div>
            <!-- Add students collapse -->
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="mb-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"  data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                        <i class="fa-solid fa-circle-plus ml-3"></i>إضافة طالب
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1" wire:ignore.self>
                    <form wire:submit.prevent="saveDataStudent">
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">اسم الطالب</label>
                            <input wire:model="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-red-500"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="grid xl:grid-cols-2 xl:gap-6 ">
                            <div class="mb-6">
                                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">اختر القسم</label>
                                    <select name="section" wire:model="section" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="1">علوم حاسوب </option>
                                        <option value="2">نظم معلومات </option>
                                    </select>
                            </div>
                            <div class="mb-6">
                                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">اختر القسم</label>
                                <select name="study" wire:model="study" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="1">صباحي  </option>
                                    <option value="2">مسائي  </option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">اختر القسم</label>
                            <select name="stage" wire:model="stage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1">الاولى  </option>
                                <option value="2"> الثانية </option>
                                <option value="3"> الثالثة </option>
                                <option value="4"> الرابعة </option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">رقم الهوية</label>
                            <input wire:model="study_id" type="number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                                <?php $__errorArgs = ['number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-red-500"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="grid xl:grid-cols-1 xl:gap-6 ">
                            <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">اضافة</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- search button -->
            <input wire:model="search" placeholder="البحث عن طالب" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                <table class="w-full text-sm text-gray-500 dark:text-gray-400">
                    <thead class="text-center text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">اسم الطالب
                            </th>
                            <th scope="col" class="px-6 py-3">المرحلة
                            </th>
                            <th scope="col" class="px-6 py-3">القسم
                            </th>
                            <th scope="col" class="px-6 py-3">الدراسة
                            </th>
                            <th scope="col" class="px-6 py-3">رقم الهوية
                            </th>
                            <th scope="col" class="px-6 py-3">الإجراءات
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">

                            <tr>
                                

                                    <td>
                                        <input type="text" wire:model="name"  class="form-control">
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-red-500"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </td>
                                    
                                    <td>
                                    <select name="stage" wire:model="stage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="1">الاولى  </option>
                                        <option value="2"> الثانية </option>
                                        <option value="3"> الثالثة </option>
                                        <option value="4"> الرابعة </option>
                                    </select>
                                    </td>
                                    <td>
                                    <select name="section" wire:model="section" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="1">علوم حاسوب </option>
                                        <option value="2">نظم معلومات </option>
                                    </select>
                                    </td>
                                    <td>
                                    <select name="study" wire:model="study" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="1">صباحي  </option>
                                        <option value="2">مسائي  </option>
                                    </select>
                                    </td>
                                    <td>
                                        <input type="text" wire:model="study_id"  class="form-control">
                                        <?php $__errorArgs = ['study_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-red-500"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </td>
                                    <td>
                                        
                                    </td>

                                    
                                    <td>
                                        
                                    </td>

                            </tr>

                            <tr>
                                <td colspan="5" class="text-center">لا يوجد طلبة بعد</td>
                            </tr>

                    </tbody>
                </table>
                <div dir="ltr">

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH F:\Github\exam\resources\views/livewire/test/test.blade.php ENDPATH**/ ?>