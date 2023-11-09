<?php $__env->startSection('content'); ?>

    <div class="container max-w-7xl mx-auto mt-8">
        <div class="mb-4">
            <h1 class="font-serif text-3xl font-bold decoration-gray-400 text-center"> Welcome to cars page</h1>
            <div class="flex justify-end">
                <a href="<?php echo e(url('admin/cars/create')); ?>" class="btn btn-success btn-sm" title="Add New Car">
                    <button class="rounded-lg font-semibold py-2 px-3 bg-slate-900 text-white hover:bg-slate-700" type="button">
                        Add New Car
                    </button>
                </a>
            </div>
        </div>
        <?php if(session('success')): ?>

            <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium"><?php echo e(session('success')); ?></span>
                </div>
            </div>
        <?php endif; ?>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">


                    <table class="min-w-full">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                #</th>

                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Brand</th>

                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Model</th>

                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Registration Date</th>

                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Engine Size</th>

                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Price</th>

                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Category</th>


                            <th class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50" colspan="3">
                                Actions</th>
                        </tr>
                        </thead>

                        <tbody class="bg-white">
                        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        <?php echo e($loop->iteration); ?>

                                    </div>

                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900"><?php echo e($item->brand); ?></div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <p><?php echo e($item->model); ?></p>
                                </td>

                                <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                    <span><?php echo e($item->registration_date); ?></span>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <p><?php echo e($item->engine_size); ?></p>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <p>$<?php echo e(number_format($item->price)); ?></p>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <p><?php echo e($item->categories->name); ?></p>
                                </td>

                                <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                                    <a href="<?php echo e(url('admin/cars/' . $item->id . '/edit')); ?>" class="text-indigo-600 hover:text-indigo-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>

                                </td>

                                <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                                    <a href="<?php echo e(url('admin/cars/' . $item->id)); ?>" class="text-gray-600 hover:text-gray-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </a>
                                </td>

                                <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">


                                    <form method="POST" action="<?php echo e(url('admin/cars' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                        <?php echo e(method_field('DELETE')); ?>

                                        <?php echo e(csrf_field()); ?>

                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Car" onclick="return confirm('Are you sure you want to delete this car?');">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600 hover:text-red-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>

                                        </button>
                                    </form>

                                </td>


                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('cars.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\autostore\resources\views/cars/index.blade.php ENDPATH**/ ?>