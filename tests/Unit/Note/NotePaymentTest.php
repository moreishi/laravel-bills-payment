<?php

namespace Tests\Unit\Note;

use Tests\Unit\Note\BaseNoteTest;
use App\Models\Payment;
use App\Models\Note;

class NotePaymentTest extends BaseNoteTest
{
    /**
     * A basic unit test example.
     */
    public function test_payment_create_note(): void
    {
        $mock = Payment::factory()->create();
        $user = Payment::find($mock->id);
        $message = 'a sample note..';

        $note = new Note;
        $note->note = $message;
        $user->notes()->save($note);

        $this->assertEquals($user->notes->first()->note, $message);
        $this->assertEquals($user->notes->first()->noteable_type, 'App\Models\Payment');
    }
}
