<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(15);
        
        // Calcular estadísticas completas para la vista unificada
        $stats = [
            'total' => Contact::count(),
            'unprocessed' => Contact::unprocessed()->count(),
            'processed' => Contact::processed()->count(),
            'this_week' => Contact::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count(),
        ];

        // Contactos recientes para el dashboard
        $recentContacts = Contact::orderBy('created_at', 'desc')->limit(5)->get();
        
        return view('admin.contacts.index', compact('contacts', 'stats', 'recentContacts'));
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
            ->with('success', 'Contacto eliminado exitosamente.');
    }

    /**
     * Reenviar email de contacto
     */
    public function resendEmail(Contact $contact)
    {
        try {
            $adminEmail = config('mail.admin_email');
            
            if (!$adminEmail) {
                return redirect()->back()
                    ->with('error', 'Email administrativo no configurado.');
            }

            Mail::to($adminEmail)->send(new ContactFormMail($contact));
            
            $contact->markAsEmailSent('Email reenviado exitosamente');
            
            return redirect()->back()
                ->with('success', 'Email reenviado exitosamente.');
                
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error al reenviar email: ' . $e->getMessage());
        }
    }

    /**
     * Marcar como procesado
     */
    public function markAsProcessed(Contact $contact)
    {
        $contact->markAsEmailSent('Marcado como procesado manualmente');
        
        return redirect()->back()
            ->with('success', 'Contacto marcado como procesado.');
    }
}
