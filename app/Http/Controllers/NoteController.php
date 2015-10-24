<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // GET /note 

        return Note::all();

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // POST /note

        $note = new Note();
        $note->title = $request->title;
        $note->text = $request->text;
        $note->save();

        return $note;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // GET /note/{id} (o Laravel injeta pra gente o id como parâmetro dessa função)
        
        // o erro para Model::findOrFail está sendo tratado no /api/app/Exceptions/Handler.php
        return Note::findOrFail($id);

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
        // PUT /note/{id} (o Laravel injeta pra gente o id como parâmetro dessa função)

        $note = Note::find($id);
        $note->fill($request->all());
        $note->save();

        return $note;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DELETE  /note/{id}

        $note = Note::findOrFail($id);

       try {
            
            if ($note->delete()) {
                return $note;
            }
            
        } catch (Exception $e) {
            
            // testar tipo de exceção para dar um erro adequado
            return [ 'error' => 'default' ];            

        }
        
        
    }
}
