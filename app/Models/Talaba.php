<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talaba extends Model
{
    use HasFactory;
    protected $fillable = [
        'fio',
        'tel',
        'email',
        'yosh',
        'manzil',
        'image',
    ];
    public function fileExists()
    {
        return file_exists($this->imagePath());
    }


    public function imagePath()
    {
        return public_path('/admin/talabalar/') . $this->image;
    }

    public function deleteImage()
    {
        if ($this->fileExists()) {
            unlink($this->imagePath());
        }
    }

}