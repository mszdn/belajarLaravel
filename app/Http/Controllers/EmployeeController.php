<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Tampilkan semua karyawan
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    // Tampilkan form tambah karyawan
    public function create()
    {
        return view('employees.create');
    }

    // Simpan data karyawan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'nohp' => 'required',
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'Data karyawan berhasil ditambahkan!');
    }

    // Tampilkan form edit karyawan
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    // Update data karyawan
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'nohp' => 'required',
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'Data karyawan berhasil diperbarui!');
    }

    // Hapus data karyawan
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Data karyawan berhasil dihapus!');
    }
}
