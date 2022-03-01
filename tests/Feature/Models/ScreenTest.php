<?php

use App\Models\Team;
use App\Models\Screen;
use App\Models\License;

test('a screen may be released by a team', function () {
    $team = Team::factory()->create();
    $license = License::factory()->lifetime()->for($team)->create();
    $screen = Screen::factory()->for($license)->create();

    // check relationship for sanity
    $this->assertCount(1, $team->screens);

    $screen->release();
    $this->assertCount(0, $team->fresh()->screens);
});

test('a screen can be unclaimed', function () {
    $screen = Screen::factory()->create();
    $this->assertFalse($screen->isClaimed());
});

test('a released screen is marked unclaimed');
