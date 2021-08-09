<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class ItemControllerTest extends TestCase
{
     use RefreshDatabase;

    // 全ユーザーがログインページを確認できるかテスト
    public function testLogin()
    {
        $response = $this->get(route('login'));
        $response->assertStatus(200)
            ->assertViewIs('auth.login');
    }

    // 全ユーザーがユーザー登録ページを確認かテスト
    public function testRegister()
    {
        $response = $this->get(route('register'));
        $response->assertStatus(200)
            ->assertViewIs('auth.register');
    }

    // 全ユーザーが他のユーザー達の投稿内容一覧を確認できるかテスト
    public function testIndex()
    {
        $response = $this->get(route('items.index'));
        $response->assertStatus(200)
            ->assertViewIs('items.index');
    }

    // 未ログイン時に投稿ページにアクセスしたとき、ログインページにリダイレクトされるかテスト
    public function testGuestCreate()
    {
        $response = $this->get(route('items.create'));
        $response->assertRedirect(route('login'));
    }

    // 未ログイン時に自身の投稿一覧ページにアクセスしたとき、ログインページにリダイレクトされるかテスト
    public function testGuestMyPage()
    {
        $response = $this->get(route('items.my_page'));
        $response->assertRedirect(route('login'));
    }

    // 投稿内容作成ページがログイン時に確認できるかテスト
    public function testAuthCreate()
    {
        $user = factory(User::class)->create();
        $response_create = $this->actingAs($user)
            ->get(route('items.create'));
        $response_create->assertStatus(200)
            ->assertViewIs('items.create');
    }

    // 自身の投稿内容一覧ページがログイン時に確認できるかテスト
    public function testAuthMyPage()
    {
        $user = factory(User::class)->create();
        $response_my_page = $this->actingAs($user)
            ->get(route('items.my_page'));
        $response_my_page->assertStatus(200)
            ->assertViewIs('items.my_page');
    }
}