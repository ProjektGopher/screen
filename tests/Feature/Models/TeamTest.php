<?php

use App\Models\Team;
use App\Models\Screen;
use App\Models\License;

test('a team has many licenses', function () {
  $team = Team::factory()->create();
  License::factory()->times(3)->lifetime()->for($team)->create();

  $this->assertCount(3, $team->licenses);
});

test('a team has many screens through license', function () {
  $team = Team::factory()->create();
  $licenses = License::factory()->times(3)->lifetime()->withTeam($team)->create();
  $licenses->map(function ($license) {
    Screen::factory()->for($license)->create();
  });

  $this->assertCount(3, $team->screens);
});