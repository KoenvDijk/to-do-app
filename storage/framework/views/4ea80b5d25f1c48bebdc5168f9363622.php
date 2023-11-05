<div>
    <input wire:model="newTask" type="text" placeholder="Add a new task..." @keydown.enter="addTask">
    <ul>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="<?php echo e($task['done'] ? 'line-through' : ''); ?>">
                <span @click="markAsDone(<?php echo e($index); ?>)"><?php echo e($task['title']); ?></span>
                <button @click="removeTask(<?php echo e($index); ?>)">Remove</button>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
    </ul>
</div>
<?php /**PATH C:\Users\koenv\to-do-list\resources\views/livewire/todo-list.blade.php ENDPATH**/ ?>