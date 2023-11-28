<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->enum('product_type',['android_phone','ios_phone','tablet','ipad','laptop']);
            $table->enum('brand',['Samsung','Huawei','Oppo','Vivo','Sony','iPHONE']);
            $table->enum('model',['Samsung A14 5G','Samsung A34','Samsung A54','Samsung S23','Samsung S23 Ultra','Huawei NOVA 9','Huawei NEO 7','Huawei NOVA 9 5G','Huawei NOVA 5T','Huawei NOVA 7 5G','Oppo F5','Oppo A9','Oppo A98','Oppo A17K','Oppo A95','Vivo Y11','Vivo Y15','Vivo Y20','Vivo Y16','Vivo Y35','Sony Xperia 1','Sony Xperia XZ3','Sony Xperia 5','Sony Xperia T2','Sony Xperia','iPHONE 12','iPHONE 12 PRO','iPHONE 12 PrO Max','iPHONE 13 PRO','iPHONE 13 Pro Max','Lenovo core i7.6th Gen','ROG strix scar 16','Shark','HP','Acer','Asus','Dell INSPIRON 15','Samsung R519','Huawei D15','Acer NITRO 5','Sony VAIO','Macbook AIR M1','Ipad 3th Gen','Ipad 6th Gen','Ipad 7th Gen','Ipad AIR 2','Ipad 9th Gen']);
            $table->string('specs')->nulable();
            $table->double('price');
            $table->string('vat');
            $table->string('quantity');
            $table->string('discounted_price');
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
        Schema::dropIfExists('table_product');
    }
}
