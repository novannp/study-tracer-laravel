<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AnswersController extends Controller
{

    /**
     * @param $kuesioner_id
     * @param $question_id
     * @return Application|Factory|View
     */
    public function index($kuesioner_id, $question_id)
    {
        $question = Question::find($question_id);
        $answers = Answer::where('question_id', $question_id)->get();

        return view('admin.kuesioners.add_answer', compact('question', 'kuesioner_id', 'question_id', 'answers'));
    }

    public function store(Request $request, $kuesioner_id, $question_id)
    {
        // validasi input
        $request->validate([
            'answer' => 'required'
        ]);

        // buat jawaban baru
        $answer = new Answer();
        $answer->question_id = $question_id;
        $answer->answer = $request->input('answer');
        $answer->save();

        // redirect kembali ke halaman sebelumnya
        return redirect()->back()->with('success', 'Jawaban berhasil ditambahkan.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $answer = Answer::findOrFail($id);
        return view('admin.kuesioners.edit_answer', compact('answer'));
    }

    public function update(Request $request, $id)
    {
        $answer = Answer::findOrFail($id);

        $request->validate([
            'answer' => 'required'
        ]);

        $answer->answer = $request->input('answer');
        $answer->save();

        return redirect()->back()->with('success', 'Jawaban berhasil diubah.');
    }

    public function destroy($id)
    {
        $answer = Answer::findOrFail($id);
        $answer->delete();

        return redirect()->back()->with('success', 'Jawaban berhasil dihapus.');
    }
}
