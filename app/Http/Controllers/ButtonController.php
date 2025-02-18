<?php

namespace App\Http\Controllers;

use App\Models\Button;
use Illuminate\Http\Request;

class ButtonController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Button $button)
    {
        //
        return view('dashboard.edit', compact('button'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Button $button)
    {
        // ButtonUpdateRequest could be created as an alternative for the validation
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'url',
            'color' => 'required|string',
        ]);
        $button->update([
            'title' => $request->title,
            'url' => $request->url,
            'color' => $request->color,
        ]);

        // The success message could be used on the frontend for displaying a flash message after the button has been updated
        return redirect()->route('dashboard')->with('success', 'Button updated successfully!');
    }
}
