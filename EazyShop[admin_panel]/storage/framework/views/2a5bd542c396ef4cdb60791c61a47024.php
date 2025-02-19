<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ShopingCart.css">
</head>
<body>

<div>
    <?php echo $__env->make('component.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<div class="container my-5">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col"><h4 style="color: #343434">Shopping Cart</h4></div>
                        <div class="col align-self-center fs-5 text-right text-muted">3 items</div>
                    </div>
                </div>    
                <table class="table">
                    
                    <tbody>
                        <?php if(!empty($cart) && count($cart) > 0): ?>
                            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="col-2"><img class="img-fluid" src="<?php echo e($item['image']); ?>"></td>
                                    <td>
                                        <div class="row text-muted"><?php echo e($item['name']); ?></div>
                                        <div class="row">$<?php echo e($item['price']); ?></div>
                                    </td>
                                    <td>
                                        <form action="<?php echo e(route('cart.remove')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="id" value="<?php echo e($item['id']); ?>">
                                            <button class="btn btn-danger btn-sm">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center">Your cart is empty.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>

                </table>
                <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
            </div>

            <div class="col-md-4 summary p-4">
                <h4 class="text-center my-4 fw-bold" style="color: #343434">Bill Summary</h4>
                <div class="summary-card p-3 rounded">
                    <table class="table table-borderless mb-0">
                        <tbody>
                            <tr>
                                <td>Item Name</td>
                                <td class="text-end">$40</td>
                            </tr>
                            <tr>
                                <td>Item Name</td>
                                <td class="text-end">$30</td>
                            </tr>
                            <tr class="border-top-1">
                                <hr>
                                <td class="pt-3"><strong>Total</strong></td>
                                <td class="text-end pt-3"><strong>$100</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button class="btn btn-sm checkout-btn rounded-0 text-white border-0 shadow-none w-100 mt-4 py-2 btn-dark">CHECKOUT</button>
            </div>
        </div>
</div>

</body>
</html>
<?php /**PATH D:\Development[web]\Laravel\JuttBrand [Ecommerce]\resources\views/Pages/Shopingcart.blade.php ENDPATH**/ ?>