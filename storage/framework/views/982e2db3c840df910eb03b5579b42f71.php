<?php $__env->startSection('content'); ?>

    <div class="bg-gray-100 h-screen py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-semibold mb-4">Shopping Basket</h1>
            <div class="flex flex-col md:flex-row gap-4">
                <div class="md:w-3/4">
                    <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                        <table class="w-full">
                            <thead>
                            <tr>
                                <th class="text-left font-semibold">Product</th>
                                <th class="text-left font-semibold">Price</th>
                                <th class="text-left font-semibold">Quantity</th>
                                <th class="text-left font-semibold">Action</th>
                            </tr>
                            </thead>
                            <?php $total = 0 ?>
                            <?php if(session('basket')): ?>
                                <?php $__currentLoopData = session('basket'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $cars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $total += $cars['price'] * $cars['quantity'] ?>
                            <tbody>
                            <tr data-id="<?php echo e($id); ?>">
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <img class="h-16 w-16 mr-4" src="<?php echo e(asset('img/car.jpg')); ?>" alt="Product image">
                                        <span class="font-semibold"><?php echo e($cars['name']); ?></span>
                                    </div>
                                </td>

                                <td data-th="Price">$<?php echo e($cars['price']); ?></td>
                                <td data-th="Quantity">
                                    <input type="number" value="<?php echo e($cars['quantity']); ?>" class="form-control quantity update-basket" />
                                </td>
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <button type="button" class="delete-car flex justify-center items-center select-none bg-red-500 border-2 text-white text-xl font-bold p-2 m-2 rounded-full shadow focus:outline-none focus:shadow-outline">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <?php endif; ?>
                            <!-- More product rows -->
                    </tbody>
                </table>
            </div>
        </div>
                <div class="md:w-1/4">
                    <div class="bg-white rounded-lg shadow-md p-6">
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
                        <h2 class="text-lg font-semibold mb-4">Summary</h2>
                        <hr class="my-2">
                        <div class="flex justify-between mb-2">
                            <span class="font-semibold">Total</span>
                            <span class="font-semibold">$ <?php echo e(number_format($total)); ?></span>
                        </div>
                            <a href="<?php echo e('checkout'); ?>">
                        <button class="bg-blue-500 text-white py-2 px-4 rounded-lg mt-4 w-full">Checkout</button>
                                <a href="<?php echo e('/'); ?>">
                            <a href="<?php echo e('/'); ?>">
                                <button class="bg-blue-500 text-white py-2 px-4 rounded-lg mt-4 w-full">Continue Shopping</button>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">

        // Update Cart Data
        $(".update-basket").change(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '<?php echo e(route('update.shopping.basket')); ?>',
                method: "patch",
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        });



        $(".delete-car").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: '<?php echo e(route('delete.basket.car')); ?>',
                    method: "DELETE",
                    data: {
                        _token: '<?php echo e(csrf_token()); ?>',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('shop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\autostore\resources\views/basket.blade.php ENDPATH**/ ?>