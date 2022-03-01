<?php

use App\Models\Team;
use App\Models\License;

test('a team has many licenses', function () {
  $team = Team::factory()->create();
  License::factory()->times(3)->lifetime()->withTeam($team)->create();

  $this->assertCount(3, $team->licenses);
});

test('a team has many screens through license');