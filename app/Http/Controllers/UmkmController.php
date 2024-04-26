<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function front()
    {
        return view('parts.umkm', [
            'title' => 'UMKM',
            'user' => User::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        $this->authorize('admin');

        return view('dashboard.umkm.index', [
            'title' => 'UMKM',
            'umkm'  => Umkm::latest()->get()        
        ]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Umkm $umkm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Umkm $umkm)
    {
        return view('parts.umkm', [
            'title' => 'UMKM',
            'event' => $umkm
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Umkm $umkm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Umkm $umkm)
    {
        Umkm::destroy($umkm->id);

        return redirect('dashboard/umkm')->with('succes', 'New post has been delete!');
    }


}
