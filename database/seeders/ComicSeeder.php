<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::create('_comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50)->unique();
            $table->text('description');
            $table->string('thumb');
            $table->string('price');
            $table->string('series');
            $table->string('sale_date');
            $table->string('type');
            $table->text('artists');
            $table->text('writers');
            $table->timestamps();
        });
    }
}
