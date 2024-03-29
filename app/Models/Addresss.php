<?php

namespace App\Models;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Addresss extends Model
{
    use HasFactory;
    protected $table = 'addressses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'street',
        'city',
        'province',
        'country',
        'postal_code',
        'contact_id',
    ];

    public function Contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id', 'id');
    }
}
