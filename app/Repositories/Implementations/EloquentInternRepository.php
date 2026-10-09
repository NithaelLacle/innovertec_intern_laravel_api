<?php

use App\Models\Intern;
use App\Repositories\Contracts\InternRepository;
use Illuminate\Database\Eloquent\Collection;

final class EloquentInternRepository implements InternRepository
{
    public function all(): Collection{
        return Intern::all();
    }
}