<?php

namespace Tests\Feature\Wallet;

use Tests\Feature\Wallet\WalletBaseTest;

use App\Models\User;

class WalletTransferTest extends WalletBaseTest
{
    public function test_wallet_transfer()
    {

        User::factory(10)->create();

        $user = WalletBalanceTest::mockUser();
        $user->deposit(10);

        $user_receiver = User::latest()->first();

        
        $user->transfer($user_receiver, 5);

        $this->assertEquals($user_receiver->balance, 5);
    }
}
