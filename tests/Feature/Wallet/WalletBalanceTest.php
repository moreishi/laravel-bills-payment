<?php

namespace Tests\Feature\Wallet;

use Tests\Feature\Wallet\WalletBaseTest;

class WalletBalanceTest extends WalletBaseTest
{
    public function test_wallet_check_balance()
    {
        $user = WalletBalanceTest::mockUser();
        $this->assertEquals($user->balance, 0);
    }
}
