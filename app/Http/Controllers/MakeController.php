<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Contact;

class MakeController extends Controller
{
    public function Landingpage() {
        return view("Landingpage");
    }

    public function Faq() {
        return view("Faq");
    }

    public function TermsAndCondition() {
        return view("TermsAndCondition");
    }

    public function PrivacyPolicy() {
        return view("PrivacyPolicy");
    }

    public function Home() {
        return view("Home");
    }

    public function Aboutus() {
        return view("Aboutus");
    }

    public function Contactus() {
        return view("Contactus");
    }

    public function Service() {
        return view("Service");
    }

    public function CleaningPackage() {
        return view("CleaningPackage");
    }

    public function PlumbingPackage() {
        return view("PlumbingPackage");
    }

    public function ElectricalPackage() {
        return view("ElectricalPackage");
    }

    public function DevicePackage() {
        return view("DevicePackage");
    }

    public function login() {
        return view("auth.login");
    }

    public function register() {
        return view("auth.register");
    }

    // ✅ Handles contact form: saves in DB + sends email
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'contactnumber' => 'required|numeric',
            'message' => 'required|string',
        ]);

        // 🗃️ Save to database
        Contact::create($validated);

        // 📧 Send email
        Mail::to('gharsewa5@gmail.com')->send(new ContactMail($validated));

        return redirect()->back()->with('success', 'Your message has been sent and saved successfully!');
    }
}
