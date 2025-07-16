<?php

namespace Tests\Feature;

use App\Models\Trade;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TradeTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_view_trades_page()
    {
        $user = User::factory()->create();
        
        $response = $this->actingAs($user)->get('/user/trade');
        
        $response->assertStatus(200);
        $response->assertViewIs('dashboard.trade.index');
    }

    public function test_user_can_view_create_trade_page()
    {
        $user = User::factory()->create();
        
        $response = $this->actingAs($user)->get('/user/trade/create');
        
        $response->assertStatus(200);
        $response->assertViewIs('dashboard.trade.create');
    }

    public function test_user_can_create_trade()
    {
        $user = User::factory()->create(['balance' => 1000]);
        
        $response = $this->actingAs($user)->post('/user/trade/store', [
            'market' => 'stock',
            'symbol' => 'AAPL',
            'type' => 'buy',
            'amount' => 100,
            'order_type' => 'market',
            'stop_loss' => 150,
            'take_profit' => 200,
            'notes' => 'Test trade'
        ]);
        
        $response->assertRedirect('/user/trade');
        $this->assertDatabaseHas('trades', [
            'user_id' => $user->id,
            'market' => 'stock',
            'symbol' => 'AAPL',
            'type' => 'buy',
            'amount' => 100
        ]);
    }

    public function test_user_cannot_create_trade_with_insufficient_balance()
    {
        $user = User::factory()->create(['balance' => 50]);
        
        $response = $this->actingAs($user)->post('/user/trade/store', [
            'market' => 'stock',
            'symbol' => 'AAPL',
            'type' => 'buy',
            'amount' => 100,
            'order_type' => 'market'
        ]);
        
        $response->assertSessionHasErrors(['amount']);
    }
} 