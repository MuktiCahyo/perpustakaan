<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;

class BookAuthorSeeder extends Seeder
{
    public function run(): void
    {
        $books = Book::all();
        $authorIds = Author::pluck('id')->toArray();

        foreach ($books as $book) {
            // Setiap buku punya 1-2 penulis
            $book->authors()->attach(
                array_rand(array_flip($authorIds), rand(1, 2))
            );
        }
    }
}
