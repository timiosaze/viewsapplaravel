<?php

namespace App\Http\Controllers;

use App\View;
use Auth;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $views = View::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->paginate(7);


        return view('views.index', ['views' => $views]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $view = new View();
        $view->title = request('title');
        $view->body = request('body');
        $view->user_id = Auth::id();
        
        if($view->save()){
            return redirect('\views')->with('success', 'Successfully saved');
        } else {
            return redirect('\views')->with('failure', 'Not saved');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\View  $view
     * @return \Illuminate\Http\Response
     */
    public function show(View $view)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $view = View::where('user_id', Auth::id())->findOrFail($id);

        return view('views.edit', compact('view'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $view = View::where('user_id', Auth::id())->findOrFail($id);
        $view->title = request('title');
        $view->body = request('body');
        
        if($view->save()){
            return redirect('\views')->with('success', 'Successfully updated');
        } else {
            return redirect('\views')->with('failure', 'Not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $view = View::where('user_id', Auth::id())->findOrFail($id);

        if($view->delete()){
            return redirect('\views')->with('success', 'Successfully deleted');
        } else {
            return redirect('\views')->with('failure', 'Not deleted');
        }
    }
}
