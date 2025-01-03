<?php

namespace Modules\SystemConfiguration\Services\Onboarding;

use Modules\SystemConfiguration\Interfaces\Onboarding\OnboardingInterface;
use Modules\SystemConfiguration\Models\RegistrationForm;

final class OnboardingService implements OnboardingInterface
{
    public function __construct(
        protected RegistrationForm $model
    ) {}

    /**
     * Get categories by filtering args.
     */
    public function get(array $args = []): \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder
    {
        $orderBy = empty($args['order_by']) ? 'id' : $args['order_by']; // column name
        $order = empty($args['order']) ? 'asc' : $args['order']; // asc, desc
        $query = RegistrationForm::orderBy($orderBy, $order);

        if (isset($args['is_query']) && $args['is_query']) {
            return $query;
        }

        return $query->get();
    }

    public function index($request, int $per_page = 50)
    {
        $orderColumn = request('sort_column', 'id');
        $orderDirection = request('sort_direction', 'desc');

        if (! in_array($orderColumn, ['id', 'name', 'created_at'])) {
            $orderColumn = 'id';
        }
        if (! in_array($orderDirection, ['asc', 'desc'])) {
            $orderDirection = 'desc';
        }

        return $this->model::query()
            ->when($request->search, function ($query) use ($request) {
                $query->where('name', 'like', $request->search.'%');
            })
            ->orderBy($orderColumn, $orderDirection)
            ->paginate($per_page);
    }

    public function getAll($request)
    {
        $orderColumn = request('sort_column', 'id');
        $orderDirection = request('sort_direction', 'desc');

        if (! in_array($orderColumn, ['id', 'name', 'created_at'])) {
            $orderColumn = 'id';
        }
        if (! in_array($orderDirection, ['asc', 'desc'])) {
            $orderDirection = 'desc';
        }

        return $this->model::query()
            ->when($request->search, function ($query) use ($request) {
                $query->where('name', 'like', $request->search.'%');
            })
            ->orderBy($orderColumn, $orderDirection)
            ->get();
    }

    public function getById(int $id)
    {
        $record = $this->model::find($id);

        return $record ?? null;
    }

    public function create(array $data)
    {
        return $this->model::create($data);
    }

    public function update(int $id, array $data)
    {
        $model = $this->model::findOrFail($id);
        $model->update($data);

        return $model;
    }

    public function delete(int $id)
    {
        $model = $this->model::findOrFail($id);

        return $model->delete();
    }
}
