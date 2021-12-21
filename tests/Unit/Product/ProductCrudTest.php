<?php

namespace Tests\Unit\Product;

use App\Models\Product;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ProductCrudTest extends TestCase
{
    use DatabaseMigrations;

    public function test_product_can_be_created(){
        $p = Product::create([
            'name'=> 'Sweet Doi',
            'rate'=> 200,
            'is_available'=> true,
        ]);

        $this->assertNotNull($p);
    }
}
