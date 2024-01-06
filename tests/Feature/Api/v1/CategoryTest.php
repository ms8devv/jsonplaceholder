<?php

namespace Tests\Feature\Api\v1;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_categories()
    {
        $response = $this->getJson(route('categories.index'));

        $response->assertStatus(200);
    }
    public function test_get_category()
    {
        $category = Category::factory()->create();
        $response = $this->getJson(route('categories.show' ,$category->id));

        $response->assertStatus(200);
    }
}
