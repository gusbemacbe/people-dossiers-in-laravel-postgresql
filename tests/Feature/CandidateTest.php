<?php

namespace Tests\Feature;

use App\Models\Candidate;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CandidateTest extends TestCase
{
  /**
   * Test if the candidates endpoint returns a successful JSON response.
   *
   * @return void
   */
  public function test_the_candidates_endpoint_returns_successful_response()
  {
    Candidate::create([
      'name' => 'Gustavo Papi',
      'role' => 'Senior Full Stack Engineer',
      'specialty' => 'Interstellar Architecture'
    ]);

    $response = $this->get('/api/candidates');

    $response->assertStatus(200);

    $response->assertJsonStructure([
      '*' => [
        'id',
        'name',
        'role',
        'specialty',
      ]
    ]);

    $response->assertJsonFragment([
      'name' => 'Gustavo Papi'
    ]);
  }
}
