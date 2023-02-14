<?php

namespace App\Models\Wisa;

use Illuminate\Database\Eloquent\Model;

class WisaModel extends Model
{
    //connectie via de wisa firebird driver (zie conf/database.php en .ENV)
    protected $connection = 'wisa';

    //override de getAttributeValue functie zodat we alle strings utf8 kunnen encoden,
    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);
        return (is_string($value)) ? $value : $value;
    }

    //override de attributesToArray functie zodat we alle string utf8 kunnen encoden,
    public function attributesToArray()
    {
        return array_map(function ($value) {
            return (is_string($value)) ? $value : $value;
        }, parent::attributesToArray());
    }
}
