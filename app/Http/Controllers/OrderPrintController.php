<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableOrderPrint;
use Illuminate\Support\Facades\Auth;

class OrderPrintController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kontak' => 'required|string',
            'nama' => 'required|string',
            'order' => 'required|string',
            'file_name' => 'required|file',
        ]);
       
        $fileName = $request->file('file_name')->getClientOriginalName();
        $file = $request->file('file_name')->storeAs('public/fileformatOrder', $fileName);

        $userId = Auth::id();
        $statusDefault = "waiting";
        $hargaDefault = "0";

        TableOrderPrint::create([
            'id_user' => $userId,
            'kontak' => $validatedData['kontak'],
            'nama' => $validatedData['nama'],
            'order' => $validatedData['order'],
            'file_name' => $file,
            'status' => $statusDefault,
            'harga' => $hargaDefault,
        ]);

        return redirect()->route('dashboard');
    }
}
