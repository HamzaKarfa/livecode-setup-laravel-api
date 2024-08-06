<?php

namespace App\Repository;


use App\Models\Todo;


class TodoRepository
{
    public function all()
    {
        return Todo::all();
    }

    public function create($input)
    {
        return Todo::create($input);
    }

    public function find($id)
    {
        return Todo::find($id);
    }

    public function update($todo, $input)
    {
        $todo->update($input);
        return $todo;
    }

    public function delete($todo)
    {
        $todo->delete();
    }
}
