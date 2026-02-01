<?php

namespace Database\Seeders;

use App\Models\Candidate;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidateSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // creating the first candidate
    Candidate::create([
      'name' => 'Gustavo Papi',
      'role' => 'Senior Full Stack Engineer',
      'specialty' => 'Interstellar Architecture'
    ]);

    // creating the second candidate
    Candidate::create([
      'name' => 'Viktor of Zaun',
      'role' => 'Magitech Engineer',
      'specialty' => 'Hextech Evolution'
    ]);

    // creating the third candidate
    Candidate::create([
      'name' => 'Jayce Talis',
      'role' => 'Councilor',
      'specialty' => 'Hextech Science'
    ]);

    // THE ETERNALS (Olympia)
    Candidate::create([
      'name' => 'Ikaris',
      'role' => 'Tactical Leader',
      'specialty' => 'Cosmic Energy Projection'
    ]);

    Candidate::create([
      'name' => 'Phastos',
      'role' => 'Technopath',
      'specialty' => 'Intelligent Design'
    ]);

    // STAR TREK: The Listeners & Architects
    Candidate::create([
      'name' => 'Guinan',
      'role' => 'El-Aurian Listener',
      'specialty' => 'Temporal Awareness'
    ]);

    Candidate::create([
      'name' => 'Pelia',
      'role' => 'Lanthanite Engineer',
      'specialty' => 'Archaeological Engineering'
    ]);

    // STAR WARS: The Yodian Sages
    Candidate::create([
      'name' => 'Vandar Tokare',
      'role' => 'Jedi Master',
      'specialty' => 'Form VI (Niman)'
    ]);

    Candidate::create([
      'name' => 'Oteg',
      'role' => 'Fleet Admiral',
      'specialty' => 'Galactic Strategy'
    ]);
  }
}
