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
        @foreach($tasks as $index => $task)
            <div class="mb-2 p-2 rounded-md border bg-blue-100 transition-all duration-300 cursor-pointer hover:bg-blue-300"
                 wire:click="markTask({{ $index }})">
                <label class="cursor-pointer flex items-center space-x-2">
                    <span class="text-lg font-bold {{ $task['done'] ? 'line-through text-green-600' : '' }}">
                        {{ $task['name'] }}
                    </span>
                </label>
                <button
                    wire:click.prevent="removeTask({{ $index }})"
                    class="mt-2 ml-4 px-3 py-1 rounded-md bg-red-500 text-white hover:bg-red-600">
                    Verwijder
                </button>
            </div>
        @endforeach
    </ul>
</div>

