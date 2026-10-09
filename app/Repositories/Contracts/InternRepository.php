<?php

namespace App\Repositories\Contracts;

use App\Models\Intern;
use Illuminate\Database\Eloquent\Collection;

interface InternRepository
{
    /**
     * Summary of all interns
     * @return Collection
     */
    public function all(): Collection;
    // public function find(int $id);
    // public function create(array $data);
    // public function update(int $id, array $data);
    // public function delete(int $id);
}