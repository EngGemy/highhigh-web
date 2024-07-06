<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwoFactorController extends Controller
{
    public function index()
    {
        return view('2fa-home');
    }

    public function showQRCode()
    {
        // This should show the QR code for the 2FA
        return view('2fa-qr');
    }

    public function showOTP()
    {
        // This should show the OTP form for the 2FA
        return view('2fa-otp');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'code' => 'required|numeric',
        ]);

        // Here you should verify the code
        // Assuming verification is successful, redirect to the home page
        return redirect()->route('home');
    }
}
