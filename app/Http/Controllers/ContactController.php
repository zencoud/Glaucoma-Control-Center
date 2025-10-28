<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Mostrar el formulario de contacto
     */
    public function show()
    {
        // Establecer el locale en español para esta petición
        app()->setLocale('es');
        
        return view('contact');
    }

    /**
     * Procesar el formulario de contacto
     */
    public function store(Request $request)
    {
        // Establecer el locale en español para esta petición
        app()->setLocale('es');
        
        // Validar los datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
        ]);

        try {
            // Crear el contacto en la base de datos
            $contact = Contact::create($validated);

            // Intentar enviar el correo si está configurado
            $this->sendContactEmail($contact);

            return redirect()->back()->with('success', '¡Gracias por contactarnos! Te responderemos pronto.');

        } catch (\Exception $e) {
            Log::error('Error al procesar formulario de contacto: ' . $e->getMessage());
            
            return redirect()->back()
                ->withInput()
                ->with('error', 'Hubo un problema al enviar tu mensaje. Por favor, inténtalo de nuevo.');
        }
    }

    /**
     * Enviar correo de contacto
     */
    private function sendContactEmail(Contact $contact)
    {
        try {
            // Verificar si el correo está configurado
            $adminEmail = config('mail.admin_email');
            
            if (!$adminEmail) {
                Log::info('Email administrativo no configurado, contacto guardado sin envío de correo');
                return;
            }

            // Enviar el correo
            Mail::to($adminEmail)->send(new ContactFormMail($contact));
            
            // Marcar como enviado
            $contact->markAsEmailSent('Email enviado exitosamente');
            
            Log::info("Email de contacto enviado para: {$contact->name} ({$contact->email})");

        } catch (\Exception $e) {
            Log::error('Error al enviar email de contacto: ' . $e->getMessage());
            
            // Marcar el error en el contacto
            $contact->markAsEmailSent('Error al enviar: ' . $e->getMessage());
        }
    }
}
