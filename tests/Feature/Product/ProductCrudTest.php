<?php

namespace Tests\Feature\Product;

use App\Models\Product;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductCrudTest extends TestCase
{
    use DatabaseMigrations;

    public function test_api_product_can_be_stored(){
        $this->withoutDeprecationHandling();

        $p = [
            'name'=> 'Sweet Doi',
            'rate'=> 200,
            'is_available'=> true,
        ];

        $response = $this->json('post', 'api/product/store', $p);

        $this->assertNotNull(Product::first());
        $response->assertJson(['message'=>'Product Stored Successfully']);
    }
}

