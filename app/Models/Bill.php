<?php namespace FireflyIII\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{

    public function transactionjournals()
    {
        return $this->hasMany('TransactionJournal');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }


}
