<div class="p-6 max-w-xl mx-auto bg-white text-black dark:text-white rounded-md shadow-md">
    <h1 class="text-2xl font-semibold mb-4">To-Do Lijst</h1>

    <div class="mb-4">
        <input
            type="text"
            wire:model="newTask"
            wire:keydown.enter="addTask"
            placeholder="Voeg een taak toe en druk op Enter"
            class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
    </div>
    
    <ul>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mb-2 p-2 rounded-md border bg-blue-100 transition-all duration-300 cursor-pointer hover:bg-blue-300"
                 wire:click="markTask(<?php echo e($index); ?>)">
                <label class="cursor-pointer flex items-center space-x-2">
                    <span class="text-lg font-bold <?php echo e($task['done'] ? 'line-through text-green-600' : ''); ?>">
                        <?php echo e($task['name']); ?>

                    </span>
                </label>
                <button
                    wire:click.prevent="removeTask(<?php echo e($index); ?>)"
                    class="mt-2 ml-4 px-3 py-1 rounded-md bg-red-500 text-white hover:bg-red-600">
                    Verwijder
                </button>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
    </ul>
</div>

<?php /**PATH C:\Users\koenv\to-do-list\resources\views/livewire/to-do-list.blade.php ENDPATH**/ ?>