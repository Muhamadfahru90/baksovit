<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Task;
use GuzzleHttp\Promise\Create;
use PhpParser\Node\Stmt\Return_;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }

    public function index(Request  $request)
    {
        //Ini Menggunakan Query Builder
        // if ($request->search) {
        //     $tasks = DB::table('task')->where('task', 'LIKE', "%$request->search%")->get();
        //     return $tasks;
        // }
        // $tasks = DB::table('task')->get();
        // return $tasks;
        // dd($tasks);

        //Ini Menggunakan Models
        if ($request->search) {
            $task = Task::where('task', 'LIKE', "%$request->search%")->paginate(3);
            return $task;
        }
        $task = Task::paginate(3);
        return view(
            'task.index',
            [
                'data' => $task
            ]
        );
    }
    public function create()
    {
        return view('task.create');
    }

    public function show($id)
    {
        //Ini Menggunakan Query Builder
        // $task = DB::table('task')->where('id', $id)->first();
        // ddd($task);

        //Ini Menggunakan Models
        $task = Task::Find($id);
        return $task;
    }
    public function store(TaskRequest $request)
    {
        //Dengan Query Builder
        // DB::table('task')->insert([
        //     'task' => $request->task,
        //     'user' => $request->user
        // ]);

        Task::create([
            'task' => $request->task,
            'user' => $request->user
        ]);
        return redirect('/task');
    }
    public function edit($id)
    {
        $task = Task::Find($id);
        return view('task.edit', compact('task'));
    }
    public function update(TaskRequest $request, $id)
    {
        // membuat dengan Query Builder
        // $task = DB::table('task') //panggil table di DB nya
        //     ->where('id', $id) //tentukan parameternya untuk mengupdate datanya
        //     ->update([
        //         'task' => $request->task, //'namafiled'=>name input textfield nya
        //         'user' => $request->user //'namafiled'=>name input textfield nya
        //     ]);
        //Membuat dengan Model
        $task = Task::Find($id);
        $task->update([
            'task' => $request->task, //'namafiled'=>name input textfield nya
            'user' => $request->user //'namafiled'=>name input textfield nya
        ]);
        return redirect('/task');
    }
    public function destroy($id)
    {
        // Menggunakan Query Builder
        // DB::table('task') //panggil table di DB nya
        //     ->where('id', $id) //tentukan parameternya untuk menghapus
        //     ->delete(); //hapus datanya
        //Menggunakan Model
        $task = Task::Find($id);
        $task->delete();
        return redirect('/task');
    }
}
