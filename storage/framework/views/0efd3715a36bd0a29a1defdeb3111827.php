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
    <div class="container">
        <h1 class="text-center mb-4">Book List</h1>

        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>
                        <a href="<?php echo e(route('books.create')); ?>" class="btn btn-primary">New Book</a>
                    </th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Published Date</th>
                    <th>Rating</th>
                    <th>Genre</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="display: flex" class="d-flex justify-content-center">
                            <!-- Edit Button -->
                            <a href="<?php echo e(route('books.edit', $book->id)); ?>" class="btn btn-warning btn-sm">&#9998;</a>

                            <!-- Delete Button -->
                            <form action="<?php echo e(route('books.destroy', $book->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this book?')">&#10008;</button>
                            </form>
                        </td>
                        <td><?php echo e($book->title); ?></td>
                        <td><?php echo e($book->author); ?></td>
                        <td><?php echo e(\Carbon\Carbon::parse($book->publishedDate)->format('M d, Y')); ?></td>
                        <td><?php echo e($book->rating); ?></td>
                        <td><?php echo e($book->genre); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <style>
        .table {
            border-radius: 10px;
            overflow: hidden;
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
            padding: 12px 15px;
        }

        .table-hover tbody tr:hover {
            background-color: #f8f9fa;
        }

        .table thead {
            background-color: #f0f4f7;
            color: #495057;
        }

        .table thead th {
            font-weight: bold;
            font-size: 16px;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6;
        }

        .table tbody tr {
            margin-bottom: 5px;
        }

        @media (max-width: 768px) {
            .table {
                font-size: 0.9rem;
            }
        }
    </style>
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
<?php /**PATH E:\School\13A\Orai\Laravel\2024.12.19\20241209_QueryBulider_Library\resources\views/books/index.blade.php ENDPATH**/ ?>