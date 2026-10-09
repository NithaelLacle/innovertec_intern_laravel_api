<?php

namespace App\Http\Controllers\Api\V1;

use App\DTOs\ResponseApiDTO;
use App\Http\Controllers\Controller;
use App\Http\Resources\InternResource;
use App\Services\Contracts\InternServiceInterface;
use Illuminate\Http\Request;

class InternController extends Controller
{
    public function __construct(
        private readonly InternServiceInterface $internService
    ){}

    // List of interns in structure INNOVERTEC
    public function listInterns()
    {
        $interns = $this->internService->listInterns();

        return ResponseApiDTO::success(
            data: InternResource::collection($interns),
            message: 'List of interns in structure INNOVERTEC',
        );
    }
}
