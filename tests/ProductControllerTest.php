<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    public function testIndex()
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertJson(['status' => 'success']);
    }
}
