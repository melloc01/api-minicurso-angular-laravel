<?php

use Illuminate\Database\Seeder;
use App\Note;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $note = new Note(['title' => 'Supermercado', 'text' => 'texto grande']);
        $note->save();

    }
}
