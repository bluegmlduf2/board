<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\MainController;

class YoonTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        // $response = $this->get('/');
        // $this->assertTrue(true);
        // $response->assertStatus(200);
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/main', ['item_name' => '111','item_number' => '222']);

        $response
            ->assertStatus(200);
            // ->assertJson([
            //     'created' => true,
            // ]);
        $this->assertTrue(true);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHaha()
    {
        $s1=new MainController();
        $s2=$s1->test("한국어");
        $this->assertEquals("안녕",$s2[1]);
        $this->assertTrue($s2[0]);
    }
}
