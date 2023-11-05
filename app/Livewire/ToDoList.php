<?php

namespace App\Livewire;

use Livewire\Component;

class ToDoList extends Component
{

    public $tasks = [];
    public $newTask = '';


    public function addTask()
    {
        if (!empty($this->newTask)) {
            $this->tasks[] = [
                'name' => $this->newTask,
                'done' => false,
            ];
            $this->newTask = '';
        }
    }

    public function removeTask($index)
    {
        if (isset($this->tasks[$index])) {
            unset($this->tasks[$index]);
            $this->tasks = array_values($this->tasks);
        }
    }

    public function markTask($index)
    {
        if (isset($this->tasks[$index])) {
            $this->tasks[$index]['done'] = !$this->tasks[$index]['done'];
        }
    }

    public function render()
    {
        return view('livewire.to-do-list');
    }
}