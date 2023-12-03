<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'Title',
        'Author',
        'Genre',
        'published_year',
        'user_id',
        'Book_Covers', // Assuming book_covers is a URL. Modify as needed.
        'slug',
        'Description'
    ];

    // * Get the user that owns the book.
    //  */
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
