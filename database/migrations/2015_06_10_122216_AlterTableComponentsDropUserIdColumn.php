<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableComponentsDropUserIdColumn extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('components', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('components', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->nullable()->default(null)->after('group_id');
        });
    }
}
