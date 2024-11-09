<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class RenameProfileToProfiles extends Migration
{
    public function up(): void
    {
        // Renomeia a tabela 'profile' para 'profiles'
        Schema::rename('profile', 'profiles');
    }

    public function down(): void
    {
        // Caso a migração seja revertida, renomeia a tabela de volta para 'profile'
        Schema::rename('profiles', 'profile');
    }
}
