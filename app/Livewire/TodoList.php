<?php

namespace App\Livewire;

use App\Models\TodoItem;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class TodoList extends Component
{
    public Collection $todos;
    public string $todoText = '';

    function mount()
    {
        $this->selectTodos();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }

    function addTodo()
    {
        $todo = new TodoItem();
        $todo->text = $this->todoText;
        $todo->completed = false;
        $todo->save();

        $this->todoText = '';
        $this->selectTodos();
    }

    function toggleTodo($id)
    {
        $todo = TodoItem::where('id', $id)->first();

        if (!$todo) return;

        $todo->completed = !$todo->completed;
        $todo->save();
        $this->selectTodos();
    }

    function deleteTodo($id)
    {
        $todo = TodoItem::where('id', $id);

        if (!$todo) return;

        $todo->delete();
        $this->selectTodos();
    }

    function selectTodos()
    {
        $this->todos = TodoItem::orderBy('created_at', 'DESC')->get();
    }
}
