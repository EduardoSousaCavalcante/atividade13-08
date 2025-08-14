<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone');
            $table->string('email')->unique();
            $table->string('motivo_contato');
            $table->text('mensagem');
            $table->timestamps();
        });

        // Inserindo dados iniciais
        \DB::table('alunos')->insert([
            [
                'nome' => 'Eduardo Cavalcante',
                'telefone' => '(11) 99999-9999',
                'email' => 'eduardo@email.com',
                'motivo_contato' => 'Dúvida',
                'mensagem' => 'Gostaria de mais informações sobre o curso.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nome' => 'Maria Silva',
                'telefone' => '(21) 98888-8888',
                'email' => 'maria@email.com',
                'motivo_contato' => 'Sugestão',
                'mensagem' => 'Seria interessante ter aulas aos sábados.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
