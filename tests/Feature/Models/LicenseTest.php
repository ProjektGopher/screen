<?php

use App\Models\Team;
use App\Models\Screen;
use App\Models\License;

test('a license can be transfered to another team', function () {
    $teams = Team::factory()->times(2)->create();
    $license = License::factory()->monthly()->withTeam($teams[0])->create();

    // check relationship for sanity
    $this->assertTrue($license->team->is($teams[0]));

    $license->transferTo($teams[1]);

    $this->assertTrue($license->fresh()->team->is($teams[1]));
});

test('a license can be un-used', function () {
    $license = License::factory()->yearly()->withNewTeam()->create();

    expect($license->screen)->toBe(null);
});

test('a license has one screen', function () {
    $license = License::factory()->lifetime()->withNewTeam()->create();
    $screen = Screen::factory()->for($license)->create();

    $this->assertTrue($license->fresh()->screen->is($screen));
});