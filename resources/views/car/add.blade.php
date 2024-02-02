@extends('layouts.master')
@section('title', 'Add Car')
@section('body')
    <!-- start section -->
    <div class="row mt-4 mb-3">
        <div class="col-9 text-center mx-auto">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Car input Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{ session('message') }}</p>
                    <form class="form-horizontal" action="{{ route('car.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Car Type</label>
                            <div class="col-md-9">
                                <input class="form-control" placeholder="Category Name" type="text" name="type" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Car Name</label>
                            <div class="col-md-9">
                                <input class="form-control" placeholder="Category Name" type="text" name="name" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Car Model</label>
                            <div class="col-md-9">
                                <input class="form-control" placeholder="Category Model" type="text" name="model" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Capacity/Efficiency</label>
                            <div class="col-md-9">
                                <input class="form-control" placeholder="Category Model" type="text"
                                    name="capacity_or_efficiency" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">year</label>
                            <div class="col-md-9">
                                <input class="form-control" placeholder="Year" type="text" name="year" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 form-label">Engine Status</label>
                            <div class="col-2 d-flex">
                                <label><input type="radio" name="energy" value="electric">Electric</label>
                                <label class="ms-3"><input type="radio" class="ms-3" name="energy"
                                        value="gas">Gas</label>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Create New Information</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
