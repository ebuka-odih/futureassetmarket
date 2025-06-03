<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Signal;
use App\Models\TradePairs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SignalController extends Controller
{
    public function index()
    {
        $data = Signal::latest()->get();
        $pairs = TradePairs::all();
        return view('admin.signal.index', compact('data', 'pairs'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'signal_type' => 'required|in:buy,sell',
            'entry_price' => 'required|numeric',
            'take_profit' => 'nullable|numeric',
            'stop_loss' => 'nullable|numeric',
            'notes' => 'nullable|string',
            'expires_at' => 'nullable|date',
            'min_amount' => 'nullable',
            'market' => 'nullable',
            'pair' => 'array',
            'pair.crypto' => 'nullable|string',
            'pair.forex' => 'nullable|string',
            'pair.stock' => 'nullable|string',
        ]);

        // Create the signal
        $validated['slug'] = Str::uuid();

        // Create the new signal record.
        Signal::create($validated);

        return redirect()->back()->with('success', 'Signal created!');

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'min_amount' => 'nullable|numeric|min:0',
            'signal_type' => 'required|in:buy,sell',
            'entry_price' => 'required|numeric',
            'take_profit' => 'nullable|numeric',
            'stop_loss' => 'nullable|numeric',
            'notes' => 'nullable|string',
            'expires_at' => 'nullable|date',
            'market' => 'nullable|date',
            'pair' => 'array',
            'pair.crypto' => 'nullable|string',
            'pair.forex' => 'nullable|string',
            'pair.stock' => 'nullable|string',
        ]);

        $signal = Signal::findOrFail($id);

        $signal->min_amount = $request->min_amount;
        $signal->pair = $request->pair;
        $signal->signal_type = $request->signal_type;
        $signal->entry_price = $request->entry_price;
        $signal->take_profit = $request->take_profit;
        $signal->stop_loss = $request->stop_loss;
        $signal->notes = $request->notes;
        $signal->expires_at = $request->expires_at;
        $signal->save();

        return redirect()->route('admin.signal.index')->with('success', 'Signal updated successfully.');
    }


    public function destroy(Signal $signal)
    {
        $signal->delete();
        return redirect()->back()->with('success', 'Signal deleted!');
    }

}
