<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuStoreRequest;
use App\Http\Requests\MenuUpdateRequest;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu.index', ['menus' => $menus]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenuStoreRequest $request)
    {
        $data = $request->validated();
        $menu = Menu::create($data);
        if ($menu) {
            return redirect()->route('menu.create')->with('success', 'Menu added successfully');
        } else {
            return redirect()->route('menu.create')->with('error', 'Menu not added');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menu = Menu::find($id);
        return view('admin.menu.edit', ['menu' => $menu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MenuUpdateRequest $request, string $id)
    {
        $data = $request->validated();
        $menu = Menu::find($id)->update($data);
        if ($menu) {
            return redirect()->route('menu.edit', $id)->with('success', 'Menu updated successfully');
        } else {
            return redirect()->route('menu.edit', $id)->with('error', 'Menu not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->route('menu.index')->with('success', 'Menu Deleted Successfully');
    }
}
