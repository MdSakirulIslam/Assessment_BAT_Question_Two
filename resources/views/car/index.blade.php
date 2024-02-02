@extends('layouts.master')
@section('title', 'List of Car')
@section('body')

    <div class="row row-sm">
        <div class="col-lg-10 text-center mx-auto mt-2">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Car Information</h3>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{ session('message') }}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom data-table">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">SL No</th>
                                    <th class="wd-15p border-bottom-0">Car Type</th>
                                    <th class="wd-15p border-bottom-0">Car Name</th>
                                    <th class="wd-20p border-bottom-0">Car Model</th>
                                    <th class="wd-15p border-bottom-0">Year</th>
                                    <th class="wd-15p border-bottom-0">Engine Configuration</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Script for ajax request -->
@push('script')
    <script type="text/javascript">
        $(function() {

            // Ajax request for datatable
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('car.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'type',
                        name: 'type'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    }, {
                        data: 'model',
                        name: 'model'
                    }, {
                        data: 'year',
                        name: 'year'
                    }, {
                        data: 'energy',
                        name: 'energy'
                    },
                ]
            });
        });
    </script>
@endpush
