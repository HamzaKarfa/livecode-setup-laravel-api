<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use App\Repository\TodoRepository;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    private TodoRepository $todoRepository;

    public function __construct(TodoRepository $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    /**
     * @OA\Get(
     *     path="/api/todos",
     *     tags={"Todos"},
     *     @OA\Response(response="200", description="An example endpoint")
     * )
     */
    public function index()
    {
        $todos = $this->todoRepository->all();
        return $this->sendSuccessResponse($todos, 'Todos fetched successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $todo = Todo::create($input);
        return response()->json(['status'=> 200, 'todo'=> $todo]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        return $this->sendSuccessResponse($todo, 'Todo fetched successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $input = $request->all();
        $todo->update($input);
        return $this->sendSuccessResponse($todo, 'Todo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return $this->sendSuccessResponse([], 'Todo deleted successfully');
    }
}
