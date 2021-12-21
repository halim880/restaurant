<?php

namespace Tests\Unit\Order;

use App\Models\Order;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class OrderCrudTest extends TestCase
{
    use DatabaseMigrations;

    public function test_order_can_be_created(){
        $o = Order::create([
            'order_number'=> 1234,
            'customer_id'=> 1,
            'payment_method'=> 'cash',
            'gtotal'=> 500,
        ]);

        $this->assertNotNull($o);
    }
}
