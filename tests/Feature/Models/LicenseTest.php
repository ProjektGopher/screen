<?php

use App\Models\License;
use App\Models\Team;

test('a license can be transfered to another team', function () {
    $teams = Team::factory()->times(2)->create();
    $license = License::factory()->monthly()->withTeam($teams[0])->create();

    // check relationship for sanity
    $this->assertTrue($license->team->is($teams[0]));

    $license->transferTo($teams[1]);

    $this->assertTrue($license->fresh()->team->is($teams[1]));
});
