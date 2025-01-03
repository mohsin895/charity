<?php

namespace Modules\SystemConfiguration\Interfaces\School;

interface SchoolInterface
{
    public function index($request, int $per_page = 50);

    public function getAll($request);

    public function getById(int $id);

    public function create(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);
}
