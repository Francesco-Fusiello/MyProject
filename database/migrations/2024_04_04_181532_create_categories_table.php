<?php


use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable;
            $table->timestamps();
        });

        $categories =['Abbigliamento','Informatica','Elettrodomestici','Libri','Giochi','Sport','Telefonia','Servizi','Arredamento','VideoGame','AccessoriPerAnimali','Televisori'];
        $images =['\images\Category\abbigliamento1 (5).png','\images\Category\abbigliamento1 (5).png','\images\Category\abbigliamento1 (5).png','\images\Category\abbigliamento1 (5).png','\images\Category\abbigliamento1 (5).png','\images\Category\abbigliamento1 (5).png','\images\Category\abbigliamento1 (5).png','\images\Category\abbigliamento1 (5).png','\images\Category\abbigliamento1 (5).png','\images\Category\abbigliamento1 (5).png','\images\Category\abbigliamento1 (5).png','\images\Category\abbigliamento1 (5).png'];
        foreach ($categories as $index => $category) {
            Category::create([
                'name' => $category,
                'image' => $images[$index] // Usiamo l'indice per ottenere l'immagine corrispondente
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
