<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class ItemControllerTest extends TestCase
{
    use RefreshDatabase;
    //全てのユーザーが投稿内容一覧にアクセスできるかテスト
    public function testIndex()
    {
        $response = $this->get(route('items.index'));
        $response->assertStatus(200)
            ->assertViewIs('items.index');
    }
    //全てのユーザーがログイン画面にアクセスできるかテスト
    public function testLogin()
    {
        $response = $this->get(route('login'));
        $response->assertStatus(200)
            ->assertViewIs('auth.login');
    }
    //全てのユーザーがユーザー登録画面にアクセスできるかテスト
    public function testRegister()
    {
        $response = $this->get(route('register'));
        $response->assertStatus(200)
            ->assertViewIs('auth.register');
    }
    //ゲストが記事投稿ページにアクセスした場合、ログイン画面に移行するかテスト
     public function testGuestCreate()
    {
        $response = $this->get(route('items.create'));
        $response->assertRedirect(route('login'));
    }
    //ゲストが記事投稿ページにアクセスした場合、ログイン画面に移行するかテスト
     public function testGuestMyPage()
    {
        $response = $this->get(route('items.my_page'));
        $response->assertRedirect(route('login'));
    }
    //ログイン後ユーザーが記事投稿画面にアクセスできるかテスト
     public function testAuthCreate()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
            ->get(route('items.create'));
        $response->assertStatus(200)
            ->assertViewIs('items.create');
    }
    //ログイン後ユーザーがマイページ(自身の投稿記事一覧)にアクセスできるかテスト
     public function testAuthMyPage()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
            ->get(route('items.my_page'));
        $response->assertStatus(200)
            ->assertViewIs('items.my_page');
    }
}