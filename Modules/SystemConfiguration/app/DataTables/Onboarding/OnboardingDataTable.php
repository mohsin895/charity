<?php

namespace Modules\SystemConfiguration\DataTables\Onboarding;

use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Modules\SystemConfiguration\Models\RegistrationForm;
use Modules\SystemConfiguration\Services\Onboarding\OnboardingService;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class OnboardingDataTable extends DataTable
{
    public function __construct(
        private OnboardingService $service
    ) {}

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function (RegistrationForm $model) {
                $html = '<a class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 edit-icon" href="'.route('onboardings.edit', $model->id).'">
                <span class="svg-icon svg-icon-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                    </svg>
                </span>
              </a>';

                $html .= '<button type="button" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm delete-icon" data-bs-toggle="modal" data-bs-target="#deleteOnboarding'.$model->id.'">
                <span class="svg-icon svg-icon-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                    </svg>
                </span>
              </button>';

                $html .= '
                <div class="modal fade" id="deleteOnboarding'.$model->id.'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Are you sure?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    Are you sure you want to delete the Onboarding - <b>'.$model->sname.'</b>?
                                </p>
                                <form action="'.route('onboardings.destroy', $model->id).'" method="POST">
                                    '.csrf_field().method_field('DELETE').'
                                    <button type="submit" class="btn btn-danger">Confirm Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            ';

                $html .= '<a class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 edit-icon" href="'.url('admission', $model->id).'">
                <i class="fa fa-eye" aria-hidden="true"></i>
              </a>';

                return $html;
            })
            ->addColumn('school_name', function (RegistrationForm $model) {
                return $model->school ? $model->school?->school_name : 'N/A';
            })
            ->addColumn('upazila', function (RegistrationForm $model) {
                return $model->upazila ? $model->upazila?->name : 'N/A';
            })
            ->addColumn('roll', function (RegistrationForm $model) {
                return $model->upazila ? $model->upazila?->code.'-'.$model->roll : 'N/A';
            })
            ->rawColumns(['action', 'school_name', 'upazila', 'roll']);
    }

    public function query(RegistrationForm $model): QueryBuilder
    {
        return $this->service->get(['is_query' => true]);
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('Onboarding-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                // Button::make('add'),
                // Button::make('excel'),
                // Button::make('csv'),
                // Button::make('pdf'),
                // Button::make('print'),
                // Button::make('reset'),
                // Button::make('reload'),
            ]);
    }

    public function getColumns(): array
    {
        return [
            // Column::make('DT_RowIndex')->title('Sl no')->searchable(false)->orderable(false),
            Column::make('roll')->title('Roll'),
            Column::make('sclass')->title('Class'),
            Column::make('sname')->title('Student Name'),
            Column::make('fname')->title('Father name'),
            Column::make('mname')->title('Mother name'),
            Column::make('gender')->title('Gender'),
            Column::make('religion')->title('Religion'),
            Column::make('phone')->title('Phone'),
            Column::make('upazila')->title('Upazila'),
            Column::make('school_name')->title('School Name'),
            // Column::make('village')->title('Village'),
            Column::make('action')
                ->title('Action')
                ->searchable(false)
                ->orderable(false)
                ->printable(false),
        ];
    }

    protected function filename(): string
    {
        return 'Onboarding-'.date('YmdHis');
    }
}
