<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Candra\UpscaleApiIntegration\UpscaleApiIntegration;

class UpScaleApiIntegrationTest extends TestCase
{

    private $apiUrl = 'https://jsonplaceholder.typicode.com/users';

    /**
     * @test
     */

    public function testGetAll()
    {
        // $apiData  = new UpscaleApiIntegration($this->apiUrl);
        // $Users    = $apiData->getAll();

        // $response->assertStatus(200);
    }

    /**
     * @test
     */

    public function testGetSpecific()
    {
        // $apiData    = new UpscaleApiIntegration($this->apiUrl);
        // $randomUser = rand(1, 10);
        // $response   = $apiData->getSpecific($randomUser);

        // $response->assertStatus(200);
    }
}
