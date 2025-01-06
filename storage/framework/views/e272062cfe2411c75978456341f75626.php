<!-- resources/views/books/show.blade.php -->

<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container my-5">
        <!-- Book Card -->
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h1 class="mb-0"><?php echo e($book->title); ?></h1>
            </div>
            <div class="card-body">
                <!-- Book Details Section -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <h5 class="text-muted">Author</h5>
                        <p class="fs-5"><?php echo e($book->author); ?></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h5 class="text-muted">Published Date</h5>
                        <p class="fs-5"><?php echo e(\Carbon\Carbon::parse($book->publishedDate)->format('M d, Y')); ?></p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <h5 class="text-muted">Rating</h5>
                        <p class="fs-5"><?php echo e($book->rating); ?></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h5 class="text-muted">Genre</h5>
                        <p class="fs-5"><?php echo e($book->genre); ?></p>
                    </div>
                </div>
            </div>
            <!-- Actions Section -->
            <div class="card-footer bg-light text-center">
                <div class="d-flex justify-content-center gap-3">
                    <!-- Back to List Button -->
                    <a href="<?php echo e(route('books.index')); ?>" class="btn btn-outline-secondary btn-lg">
                        <i class="bi bi-arrow-left"></i> Back to Book List
                    </a>
                    <!-- Edit Button -->
                    <a href="<?php echo e(route('books.edit', $book->id)); ?>" class="btn btn-warning btn-lg">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <!-- Delete Button -->
                    <form action="<?php echo e(route('books.destroy', $book->id)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger btn-lg"
                            onclick="return confirm('Are you sure you want to delete this book?')">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH E:\School\13A\Orai\Laravel\2024.12.19\20241209_QueryBulider_Library\resources\views/books/show.blade.php ENDPATH**/ ?>