<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SettingsController extends Controller
{
    /**
     * Display the settings page
     */
    public function index()
    {
        $adminEmail = config('mail.admin_email');
        
        return view('admin.settings.index', compact('adminEmail'));
    }

    /**
     * Update the admin email setting
     */
    public function updateAdminEmail(Request $request)
    {
        $request->validate([
            'admin_email' => 'required|email|max:255',
        ]);

        // Update the .env file
        $envFile = base_path('.env');
        $envContent = file_get_contents($envFile);
        
        if (strpos($envContent, 'MAIL_ADMIN_EMAIL=') !== false) {
            $envContent = preg_replace(
                '/MAIL_ADMIN_EMAIL=.*/',
                'MAIL_ADMIN_EMAIL="' . $request->admin_email . '"',
                $envContent
            );
        } else {
            $envContent .= "\nMAIL_ADMIN_EMAIL=\"{$request->admin_email}\"\n";
        }
        
        file_put_contents($envFile, $envContent);
        
        // Clear config cache
        Cache::forget('config');
        config(['mail.admin_email' => $request->admin_email]);
        
        return redirect()->back()
            ->with('success', 'Email administrativo actualizado correctamente.');
    }
}
