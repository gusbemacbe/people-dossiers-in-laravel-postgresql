<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

// class CandidateController extends Controller
// {
//   /**
//    * Retrieving the list of candidates
//    *
//    * @return JsonResponse
//    */
//   public function index(): JsonResponse
//   {
//     // simulating data retrieval, perhaps from a PostgreSQL database
//     $data = [
//       [
//         'id' => 1,
//         'name' => 'Gustavo Papi',
//         'role' => 'Senior full stack engineer',
//         'specialty' => 'Interstellar architecture'
//       ],
//       [
//         'id' => 2,
//         'name' => 'Viktor of Zaun',
//         'role' => 'Magitech engineer',
//         'specialty' => 'Hextech evolution'
//       ]
//     ];

//     return response()->json($data);
//   }
// }

class CandidateController extends Controller
{
  /**
   * Returning all candidates from the PostgreSQL database
   *
   * @return JsonResponse
   */
  public function index(): JsonResponse
  {
    return response()->json(Candidate::all());
  }
}