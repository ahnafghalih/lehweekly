
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('beritas')) {
            Schema::create('beritas', function (Blueprint $table) {
                $table->id();
                $table->string('judul');
                $table->string('slug')->unique();
                $table->string('penulis');
                $table->text('konten');
                $table->timestamps();
            });
        } else {
            if (!Schema::hasColumn('beritas', 'judul')) {
                Schema::table('beritas', function (Blueprint $table) {
                    $table->string('judul')->nullable();
                });
            }

            if (!Schema::hasColumn('beritas', 'slug')) {
                Schema::table('beritas', function (Blueprint $table) {
                    $table->string('slug')->nullable()->unique();
                });
            }

            if (!Schema::hasColumn('beritas', 'penulis')) {
                Schema::table('beritas', function (Blueprint $table) {
                    $table->string('penulis')->nullable();
                });
            }

            if (!Schema::hasColumn('beritas', 'konten')) {
                Schema::table('beritas', function (Blueprint $table) {
                    $table->text('konten')->nullable();
                });
            }
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
