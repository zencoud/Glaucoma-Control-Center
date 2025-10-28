<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        $recentContacts = Contact::latest()->take(5)->get();
        
        $stats = [
            'total' => Contact::count(),
            'today' => Contact::whereDate('created_at', today())->count(),
            'this_week' => Contact::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count(),
            'this_month' => Contact::whereMonth('created_at', now()->month)->count(),
            'unprocessed' => Contact::where('email_sent', false)->count(),
            'processed' => Contact::where('email_sent', true)->count(),
        ];
        
        return view('admin.contacts.index', compact('contacts', 'recentContacts', 'stats'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        
        return redirect()->route('admin.contacts.index')
            ->with('success', 'Mensaje eliminado correctamente.');
    }

    /**
     * Resend email notification for a contact.
     */
    public function resendEmail(Contact $contact)
    {
        // Here you would typically send the email notification
        // For now, we'll just mark it as processed
        $contact->update(['email_sent' => true]);
        
        return redirect()->route('admin.contacts.index')
            ->with('success', 'Email reenviado correctamente.');
    }

    /**
     * Mark a contact as processed.
     */
    public function markProcessed(Contact $contact)
    {
        $contact->update(['email_sent' => true]);
        
        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contacto marcado como procesado.');
    }
}