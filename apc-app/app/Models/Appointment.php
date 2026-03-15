<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'reference',
        'aanvraag_type',
        'naam',
        'email',
        'telefoon',
        'kenteken',
        'merk',
        'model',
        'voertuigsoort',
        'rdw_label',
        'pakket',
        'extras',
        'bericht',
        'vervuiling',
        'afspraak_datum',
        'afspraak_tijd',
        'deposit_amount',
        'currency',
        'payment_id',
        'payment_status',
        'appointment_status',
        'paid_at',
    ];

    protected $casts = [
        'afspraak_datum' => 'date',
        'paid_at' => 'datetime',
        'deposit_amount' => 'decimal:2',
    ];
}