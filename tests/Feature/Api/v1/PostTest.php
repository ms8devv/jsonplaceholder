<?php

namespace Tests\Feature\Api\v1;

use App\Models\Category;
use App\Models\Post;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_all_posts()
    {
        $response = $this->getJson(route('posts.index'));

        $response->assertStatus(200);
    }

    public function test_get_post()
    {
        User::factory()->create();
        Category::factory()->create();
        $post = Post::factory()->create();
        $response = $this->getJson(route('posts.show',$post->id));

        $response->assertStatus(200);
    }

    public function test_create_post(){
        $user = User::factory()->create();
        $category = Category::factory()->create();
        $response = $this->postJson(route('posts.store'), [
            'title' => 'test_post' ,
            'body' => 'test-body' ,
            'category_id' => $category->id ,
            'user_id' => $user->id
        ]);

        $response->assertStatus(201);
    }

    public function test_update_post(){
        User::factory()->create();
        Category::factory()->create();
        $post = Post::factory()->create();
        // dd($post->body);
        $response = $this->putJson(route('posts.update' , $post->id), [
            'title' => 'test_post' ,
            'body' => 'test-body_update' ,

        ]);

        $updated_post = Post::query()->where('id' , $post->id)->first();

        $response->assertStatus(200);
        $this->assertTrue($updated_post->body == 'test-body_update');
    }

    public function test_delete_post(){
        User::factory()->create();
        Category::factory()->create();
        $post = Post::factory()->create();

        $response = $this->deleteJson(route('posts.destroy' , $post->id));
        $response->assertSuccessful();
        $this->assertTrue(Post::query()->where('id' , $post->id)->count() == 0);
    }
}
