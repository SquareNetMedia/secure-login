<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TestMe extends Migration
{
    public function __construct()
    {
        // Get the prefix
        $this->prefix = Config::get('secure-login.db_prefix');
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (! Schema::hasTable($this->prefix.'test')) {
            Schema::create($this->prefix.'test', function (Blueprint $table) {
                $table->id();
                $table->string('name');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists($this->prefix.'test');
    }
}
