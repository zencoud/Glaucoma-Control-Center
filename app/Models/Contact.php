<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'message',
        'phone',
        'subject',
        'email_sent',
        'email_sent_at',
        'email_response',
    ];

    protected $casts = [
        'email_sent' => 'boolean',
        'email_sent_at' => 'datetime',
    ];

    /**
     * Scope para obtener contactos no procesados
     */
    public function scopeUnprocessed($query)
    {
        return $query->where('email_sent', false);
    }

    /**
     * Scope para obtener contactos procesados
     */
    public function scopeProcessed($query)
    {
        return $query->where('email_sent', true);
    }

    /**
     * Marcar como email enviado
     */
    public function markAsEmailSent($response = null)
    {
        $this->update([
            'email_sent' => true,
            'email_sent_at' => now(),
            'email_response' => $response,
        ]);
    }
}
