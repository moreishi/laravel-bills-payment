<?php

namespace Tests\Unit\Note;

use Tests\Unit\Note\BaseNoteTest;
use App\Models\User;
use App\Models\Note;

class NoteUserTest extends BaseNoteTest
{

    public function test_user_create_note(): void
    {
        $mockUser = BaseNoteTest::mockUser();
        $user = User::find($mockUser->id);
        $message = 'a sample note..';

        $note = new Note;
        $note->note = $message;
        $user->notes()->save($note);

        $this->assertEquals($user->notes->first()->note, $message);
        $this->assertEquals($user->notes->first()->noteable_type, 'App\Models\User');
    }
    
}
