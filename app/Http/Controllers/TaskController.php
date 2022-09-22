<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;


class TaskController extends Controller
{
    public function index()
    
    {
        // $tasks = DB::table('tasks')->get();
        // dd($tasks);
       
        // return view('tasks.index',[
        //     'tasks' => $tasks,
        // ]);
        //compact karena 1 varible yaitu task, jadi lebih simple
        // return view('tasks.index',compact('tasks'));

        //versi simpel nya
        return view('tasks.index',[
           // 'tasks' => DB::table('tasks')->orderBy('id','desc')->get(),
           'task' => new Task,
           'submit' => 'Create',
           'tasks'  => Task::orderBy('id','desc')->get(),
        ]);
    }



    public function store(TaskRequest $request)
    {
        
       // DB::table('tasks')->insert(['list' => $request->list]);
        //$task = Task::insert(['list' => $request->list]);

        //opsi 1
        // $task = Task::create([
        //   'list' => $request->list,
        //   'mark' => false,
        // ]);

        //Opsi 2 menggunakan request all
      
          // validasi
      
          //dipindah ke TaskRequest
      // $request->validate([
      //   'list' => ['required'],
      // ]);

      Task::create($request->all());        
      //  dd($task);

        // return redirect('/tasks');
        
        // return redirect()->back();

        return back();
    

    }

  public function edit(Task $task)
  {
    
    // dd($id);
    
    // $task = DB::table('tasks')->where('id', $id)->first();

    //$task = Task::where('id', $id)->first();

    // $task = Task::find($id);

    return view('tasks.edit',[
      
      'task' => $task,
      'submit' => 'Update',
    
    ]);

  }

  public function update(TaskRequest $request, $id) {

   //DB::table('tasks')->where('id',$id)->update(['list' => $request->list]);

    Task::where('id',$id)->update(['list' => $request->list]);

   return redirect('tasks');

  }


  public function destroy($id)
  {
    
    // dd($id);
    
   // $task = DB::table('tasks')->where('id', $id)->delete();

//$task->delete();

    Task::find($id)->delete();

    return redirect('tasks');

  }

}
