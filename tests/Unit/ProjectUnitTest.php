<?php

namespace Tests\Unit;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectUnitTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function it_has_a_path()
    {
        $this->withoutExceptionHandling();
        $project = Project::factory()->create();
        $this->assertEquals('/projects/'. $project->id, $project->path());
    }
}
