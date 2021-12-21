<?php

namespace Tests\Unit\Order;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class OrderItemTest extends TestCase
{
     use DatabaseMigrations;

    public function test_order_can_be_stored(){
        $o = Order::factory()->create();
        $p = Product::factory()->create();

        $oi =  OrderItem::create([
            'order_id'=>  $o->id,
            'product_id'=> $p->id,
            'qty'=> 1,
        ]);

        dd($oi);
    }
}
