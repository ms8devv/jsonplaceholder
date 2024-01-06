<?php

namespace Tests\Feature\Api\v1;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_all_comments()
    {
        $response = $this->getJson(route('comments.index'));

        $response->assertStatus(200);
    }

    public function test_get_commment()
    {
        User::factory()->create();
        Category::factory()->create();
        Post::factory()->create();
        $comment = Comment::factory()->create();
        $response = $this->getJson(route('comments.show',$comment->id));

        $response->assertStatus(200);
    }

    public function test_create_commment()
    {
        $user = User::factory()->create();
        Category::factory()->create();
        $post = Post::factory()->create();
        $comment = Comment::factory()->create();
        $response = $this->postJson(route('comments.store'),[
            'comment' => $comment->comment ,
            'user_id' => $user->id ,
            'post_id' => $post->id
        ]);

        $response->assertStatus(201);
    }

    public function test_update_commment()
    {
        User::factory()->create();
        Category::factory()->create();
        Post::factory()->create();
        $comment = Comment::factory()->create();
        $response = $this->putJson(route('comments.update', $comment->id),[
            'comment' => 'updated comment'
        ]);

        $updated_comment = Comment::query()->where('id' , $comment->id)->first();
        $response->assertStatus(200);
        // $this->assertTrue($updated_comment->comment == 'updated comment');
    }

    public function test_delete_commment()
    {
        User::factory()->create();
        Category::factory()->create();
        Post::factory()->create();
        $comment = Comment::factory()->create();
        $response = $this->deleteJson(route('comments.destroy', $comment->id));

        $response->assertStatus(200);
        // $this->assertTrue(Comment::query()->where('id' , $comment->id)->count() == 0);
    }
}
