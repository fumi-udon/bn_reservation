<?php

namespace App\Http\Controllers;

use App\Models\KiConfiguration;
use Illuminate\Http\Request;

class KiConfigurationController extends Controller
{
    public function index()
    {
        $configurations = KiConfiguration::paginate(10);
        return view('ki_configurations.index', compact('configurations'));
    }

    public function edit($id)
    {
        $configuration = KiConfiguration::findOrFail($id);
        return view('ki_configurations.edit', compact('configuration'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // 'key' => 'required|unique:ki_configurations,key,' . $id,
            'page_id' => 'required',
            'status1' => 'required',
            // 'name1' => 'required',
            'text1' => 'nullable'
        ]);

        $configuration = KiConfiguration::findOrFail($id);
        $configuration->update($request->only([
            // 'key',
            'page_id',
            'status1',
            // 'name1',
            'text1'
        ]));

        return redirect()->route('ki-configurations.index')
            ->with('success', 'Configuration updated successfully.');
    }
}