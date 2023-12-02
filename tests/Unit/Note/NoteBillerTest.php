<?php

namespace Tests\Unit\Note;

use PHPUnit\Framework\TestCase;

use Tests\Unit\Note\BaseNoteTest;
use App\Models\Biller;
use App\Models\Note;

class NoteBillerTest extends BaseNoteTest
{
    public function test_biller_create_note(): void
    {
        $mock = Biller::factory()->create();
        $user = Biller::find($mock->id);
        $message = 'a sample note..';

        $note = new Note;
        $note->note = $message;
        $user->notes()->save($note);

        $this->assertEquals($user->notes->first()->note, $message);
        $this->assertEquals($user->notes->first()->noteable_type, 'App\Models\Biller');
    }
}
