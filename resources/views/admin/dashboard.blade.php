@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Count of category: 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Count of materials: 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Count of users: 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Count today: 0</span></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a href="" class="btn btn-block btn-default">Create category</a>
                <a href="" class="list-group-item">
                    <h4 class="list-group-item-heading">First category</h4>
                    <p class="list-group-item-text">
                        Count of materials
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="" class="btn btn-block btn-default">Create material</a>
                <a href="" class="list-group-item">
                    <h4 class="list-group-item-heading">First material</h4>
                    <p class="list-group-item-text">
                        Category
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection