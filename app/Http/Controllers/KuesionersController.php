<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner;
use App\Models\Question;
use App\Models\QuestionType;
use Illuminate\Http\Request;

class KuesionersController extends Controller
{

    public function index()
    {
        $kuesioners = Kuesioner::all();
        return view('admin.kuesioners.kuesioner', ['kuesioners' => $kuesioners]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        Kuesioner::create($request->except(['_token', 'submit']));
        return redirect()->route('kuesioners.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function create()
    {
        //
    }

    public function show($id)
    {
        $kuesioner = Kuesioner::find($id);
        $questions = Question::with('kuesioner', 'answers')->get();
        return view('admin.kuesioners.kuesioner_preview', ['questions' => $questions, 'kuesioner' => $kuesioner]);
    }

    public function editView($id)
    {
        $question_type = QuestionType::all();
        $kuesioner = Kuesioner::findOrFail($id);
        return view('admin.kuesioner.edit_kuesioner', ['kuesioner' => $kuesioner, 'question_type' => $question_type]);
    }

    public function addQuestion(Request $request, $kuesioner_id)
    {
        $this->validate($request, [
            'question' => 'required',
            'type_id' => 'required',
            'kuesioner_id' => 'required'
        ]);

        Question::create(['question' => $request->question, 'type_id' => $request->type_id, 'kuesioner_id' => $kuesioner_id]);

        return redirect('/kuesioners')->with('success', 'Pertanyaan berhasil ditambahkan');
    }

    public function edit(Request $request, $id)
    {
        // $this->validate($request, [
        //     'kuesioner_id' => 'required',
        //     'question' => 'required',
        //     'type_id' => 'required',
        // ]);

        // Question::create($request->except('_token', 'submit'));
        // return redirect('/kuesioner/edit/{id}');
    }

    public function update(Request $request, Kuesioner $kuesioner)
    {
        //
    }

    public function destroy(Kuesioner $kuesioner)
    {
        //
    }
}
