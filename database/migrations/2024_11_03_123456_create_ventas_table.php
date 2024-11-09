<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id') // Referencia al usuario que realizó la venta.
                  ->constrained('users')
                  ->onDelete('cascade');
            $table->foreignId('producto_id') // Referencia al producto vendido.
                  ->constrained('productos')
                  ->onDelete('cascade');
            $table->integer('cantidad'); // Cantidad del producto vendido.
            $table->decimal('precio_total', 10, 2); // Precio total de la venta.
            $table->timestamps(); // Marca de tiempo.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};