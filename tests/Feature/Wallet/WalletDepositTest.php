<?php

namespace Tests\Feature\Wallet;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Feature\Wallet\WalletBaseTest;

class WalletDepositTest extends WalletBaseTest
{
    public function test_wallet_deposit()
    {
        $user = WalletBalanceTest::mockUser();
        $user->deposit(10);
        $this->assertEquals($user->balance, 10);
    }
}
