<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $data = Prodi::all();
        return view('admin.prodi.prodi', compact('data'));
    }

    public function editIndex(Request $request, $id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('admin.prodi.edit_prodi', ['prodi' => $prodi]);
    }
    public function update(Request $request, $id)
    {
        $prodi = Prodi::findOrFail($id);
        $prodi->name = $request->name;
        $prodi->save();
        return redirect('/prodi')->with('edit_success', 'Data telah berhasil diedit');

    }

    public function createIndex()
    {
        return view('admin.prodi.create_prodi');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        Prodi::create($request->except(['_token', 'submit']));

        return redirect('/prodi')->with('success', 'Data berhasil ditambahkan');
    }

    public function delete($id)
    {
        $prodi = Prodi::find($id);
        $prodi->delete();
        return redirect('/prodi')->with('delete_success', 'Data berhasil dihapus');
    }
}
