<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class measurements extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'customer_id', 'tailor_id','stock_id','added_by',
    
        // Cloth
        'length', 'chest', 'shoulder', 'sleeve', 'sleeve_type', 'collar_type','tonban_length', 
        'tonban_type','cuff_type', 'cuff_size','yakhan', 'yakhan_type','skirt_type', 'front_pocket', 
        'front_double_pockets','side_pocket', 'side_double_pockets','buttons_type',
    
        // Shirt
        'shirt_length', 'shirt_chest', 'shirt_shoulder', 'shirt_sleeve', 'shirt_collar', 
        'shirt_front_pock','shirt_front_double_pockets','shirt_type','shirt_buttons_type',
    
        // Pant
        'pant_length','pant_waist', 'pant_thigh', 'pant_type', 'pant_buttons',
    
        // Coat
        'coat_length', 'coat_chest', 'coat_waist', 'coat_shoulder','coat_sleeve','shirt_collar_type',
        'coat_sleeve_type', 'coat_type','coat_pockets','coat_inside_pockets','coat_buttons',
    
        // Waistcoat
        'waistcoat_length', 'waistcoat_chest', 'waistcoat_waist','waistcoat_shoulder','waistcoat_type',
        'waistcoat_pockets','waistcoat_inside_pockets','waistcoat_buttons',
    ];
}
