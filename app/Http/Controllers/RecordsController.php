<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;


class RecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        if (\Auth::check()) { 
            $user = \Auth::user();
            
            $records = $user->records()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'records' => $records,
            ];
        }

        
        return view('welcome', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $record = new Record;
        
        return view('records.create' , [
            'recrod' => $record
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:20',   // 追加
            'content' => 'required|max:400',
        ]);
        
        $request->user()->records()->create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $record = Record::findOrFail($id);
        
        $user = $record->user();
        
        if (\Auth::id() === $record->user_id) {
            return view('records.show' ,[
                'record' => $record,
                'user' => $user,
            ]);
        }
             return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = Record::findOrFail($id);
        
        if (\Auth::id() === $record->user_id) {
            return view('records.edit' ,[
                'record' => $record,
            ]);
        }
             return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:20',   // 追加
            'content' => 'required|max:400',
        ]);
        
        $record = Record::findOrFail($id);
        
        if (\Auth::id() === $record->user_id)  {
                $record->title = $request->title;
                $record->content = $request->content;
                $record->save();
        }
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Record::findOrFail($id);

        
        if (\Auth::id() === $record->user_id) {
            $record->delete();
        }

        
        return redirect('/');
    }
}
