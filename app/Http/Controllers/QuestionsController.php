<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner;
use App\Models\Question;
use App\Models\QuestionType;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{

    public function index($kuesioner_id)
    {
        $question_type = QuestionType::all();
        $kuesioner = Kuesioner::findOrFail($kuesioner_id);
        $questions = Question::where('kuesioner_id', $kuesioner_id)->with('answers')->get();
        return view('admin.kuesioners.edit_kuesioner', ['kuesioner' => $kuesioner,], compact('questions', 'kuesioner_id', 'question_type'));
    }

    public function store(Request $request, $kuesioner_id)
    {
        $this->validate($request, ['question' => 'required', 'type_id' => 'required']);

        $data = $request->except('_token');
        $data['kuesioner_id'] = $kuesioner_id;

        Question::create($data);


        return redirect()->route('kuesioners.questions.index', $kuesioner_id)->with('success', 'Pertanyaan berhasil ditambahkan');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
