<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentDetails extends Model
{
    protected $fillable = ['purchase_id', 'amount_recieved', 'invoice_generated', 'invoice_date', 'amount_received_date'];
}
