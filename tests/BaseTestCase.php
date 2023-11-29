<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BaseTestCase extends TestCase 
{
    use CreatesApplication;
    
    use RefreshDatabase;
}
