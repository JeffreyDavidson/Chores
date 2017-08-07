<?php

namespace Tests\Feature;

use App\Chore;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ViewChoreListingTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function user_can_view_chore_listing_details()
    {
        $chore = Chore::create([
            'name' => 'Take out the trash',
            'additional_information' => 'Don\'t forget the trash in the garage.',
            'due_at' => Carbon::parse('August 6, 2017'),
            'completed_at' => Carbon::parse('August 6, 2017 7:00pm'),
        ]);

        $response = $this->get('/chores/'.$chore->id);

        $response->assertStatus(200);
        $response->assertSee('Take out the trash');
        $response->assertSee(e('Don\'t forget the trash in the garage.'));
        $response->assertSee('August 6th, 2017');
    }

    /** @test */
    function user_cannot_view_chore_that_does()
    {
        $response = $this->get('/chores/999');

        $response->assertStatus(404);
    }
}
