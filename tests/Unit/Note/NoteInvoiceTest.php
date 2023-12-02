<?php

namespace Tests\Unit\Note;

use Tests\Unit\Note\BaseNoteTest;
use App\Models\Invoice;
use App\Models\Note;

class NoteInvoiceTest extends BaseNoteTest
{
    public function test_biller_create_note(): void
    {
        $mock = Invoice::factory()->create();
        $invoice = Invoice::find($mock->id);
        $message = 'a sample note..';

        $note = new Note;
        $note->note = $message;
        $invoice->notes()->save($note);

        $this->assertEquals($invoice->notes->first()->note, $message);
        $this->assertEquals($invoice->notes->first()->noteable_type, 'App\Models\Invoice');
    }
}
