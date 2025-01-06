<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.index');
    }

    // Пока в тестовом формате (не работает)
    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:255',
            'phone' => 'required|string|min:7|max:20',
            'email' => 'required|email|min:7|max:255',
            'file' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $data = $request->only(['name', 'phone', 'email', 'company', 'note']);

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('orders', 'public');
            $data['file'] = $filePath;
        }

        Mail::send('emails.order', $data, function ($message) use ($data, $request) {
            $message->to('example@customer.com')
                ->subject('Новый заказ');

            if (isset($data['file'])) {
                $message->attach(storage_path('app/public/' . $data['file']));
            }
        });

        return redirect()->route('order.index')->with('success', 'Ваш заказ отправлен!');
    }
}
