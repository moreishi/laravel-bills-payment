<?php

namespace Tests\Feature\Wallet;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WalletWithdrawTest extends TestCase
{
    public function test_wallet_withdraw()
    {
        $user = WalletBalanceTest::mockUser();
        $user->deposit(10);
        $user->withdraw(10);
        $this->assertEquals($user->balance, 0);
    }
}
