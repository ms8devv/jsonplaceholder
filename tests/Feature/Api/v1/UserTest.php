<?php

namespace Tests\Feature\Api\v1;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_users()
    {
        $response = $this->get(route('users'));

        $response->assertStatus(200);
    }

    public function test_get_user(){
        $user = User::factory()->create();
        $response = $this->get(route('user.show' , $user->id));
        $response->assertStatus(200);

    }
    public function test_register_user_validate()
    {
        $response = $this->postJson(route('user.register'));

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['name','email','password']);
    }

    public function test_register_user()
    {
        $response = $this->postJson(route('user.register') , [
            'name' => 'test-name' ,
            'email' => 'test@email.com',
            'password' => 'password'
        ]);

        $response->assertStatus(201);
    }

    public function test_login_user()
    {
        $user = User::factory()->create();
        $response = $this->postJson(route('user.login') , [
            'email' =>$user->email , 
            'password' => 'password'
        ]);

        $response->assertStatus(200);
    }

    public function test_logout_user()
    {
        $user = User::factory()->create();
        Auth::login($user);
        $response = $this->postJson(route('user.logout'));

        $response->assertStatus(200);
    }

    public function test_delete_user(){
        $user = User::factory()->create();
        $response = $this->putJson(route('user.delete', $user->id));

        // dd(User::all());
        $response->assertSuccessful();
    }

}
