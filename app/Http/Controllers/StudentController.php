<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Tampilkan daftar siswa
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Form tambah siswa
    public function create()
    {
        return view('students.create');
    }

    // Simpan siswa baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'alamat' => 'required',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    // Form edit siswa
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // Update siswa
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'alamat' => 'required',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil diperbarui!');
    }

    // Hapus siswa
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil dihapus!');
    }
}
