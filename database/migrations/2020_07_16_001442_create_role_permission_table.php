<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolePermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_permission', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id', 'fk_role_permission_rol')->references('id')->on('role')->OnDelete('restrict')->OnUpdate('restrict');
            $table->unsignedBigInteger('permission_id');
            $table->foreign('permission_id', 'fk_role_permission_user')->references('id')->on('permission')->OnDelete('restrict')->OnUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_permission');
    }
}
