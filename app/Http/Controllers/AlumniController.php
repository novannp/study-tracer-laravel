<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $data = User::with('prodi')->where('role_id', '2',)->get();
        return view('admin.alumni.alumni', compact('data'));
    }

    public function editIndex(Request $request, $id)
    {
        $data = User::with('prodi')->findOrFail($id);
        $prodi = Prodi::all();
        return view('admin.alumni.edit_alumni', ['alumni' => $data, 'prodi' => $prodi]);
    }

    public function update(Request $request, $id)
    {
        $alumni = User::findOrFail($id);
        $alumni->name = $request->name;
        $alumni->nim = $request->nim;
        $alumni->email = $request->email;
        $alumni->graduation_year = $request->graduation_year;
        $alumni->prodi_id = $request->prodi_id;
        $alumni->save();
        return redirect('/alumni')->with('edit_success', 'Data telah berhasil diedit');
    }

    public function createIndex()
    {
        // return view('admin.prodi.create_prodi');
    }

    public function create(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        // ]);

        // Prodi::create($request->except(['_token', 'submit']));

        // return redirect('/prodi')->with('success', 'Data berhasil ditambahkan');
    }

    public function delete($id)
    {
        //     $prodi = Prodi::find($id);
        //     $prodi->delete();
        //     return redirect('/prodi')->with('delete_success', 'Data berhasil dihapus');
    }
}
