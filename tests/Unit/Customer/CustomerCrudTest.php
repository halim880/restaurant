<?php

namespace Tests\Unit\Customer;

use App\Models\Customer;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CustomerCrudTest extends TestCase
{
    use DatabaseMigrations;

    public function test_customer_can_be_created(){
        $c = Customer::create([
            'name'=> 'akash',
            'email'=> 'akash@gmail.com',
            'phone'=> '01743920880',
            'address'=> 'address',
        ]);
        $this->assertNotNull($c);
    }
}
