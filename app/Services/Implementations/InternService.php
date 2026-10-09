<?php

namespace App\Services\Implementations;

use App\Repositories\Contracts\InternRepository;
use App\Repositories\Contracts\ProjectRepository;
use App\Services\Contracts\InternServiceInterface;

class InternService implements InternServiceInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        private readonly InternRepository $internRepository,
        private readonly ProjectRepository $projectRepository
    ){}

    public function listInterns()
    {
        // list of ininterns
        $interns = $this->internRepository->all();
        return $interns;
    }

}
