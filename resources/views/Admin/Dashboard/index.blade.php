@extends('Master.Layouts.app', ['title' => $title])

@section('content')
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Dashboard</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-gray">Admin</li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<!-- ROW 1 OPEN -->
<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-primary img-card box-primary-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <a href="{{ url('/admin/jenisbarang') }}" class="text-white text-decoration-none mb-0">cslb consultation </a>
                    </div>
                    <div class="ms-auto">
                        <i class="fe fe-search text-white fs-40 me-2 mt-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-secondary img-card box-secondary-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">{{$satuan}}</h2>
                        <a href="{{ url('/admin/satuan') }}" class="text-white text-decoration-none mb-0">cslb potential </a>
                    </div>
                    <div class="ms-auto">
                        <i class="fe fe-list text-white fs-40 me-2 mt-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card  bg-success img-card box-success-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">{{$merk}}</h2>
                        <a href="{{ url('/admin/merk') }}" class="text-white text-decoration-none mb-0">cslb potential contact </a>
                    </div>
                    <div class="ms-auto">
                        <i class="fe fe-book text-white fs-40 me-2 mt-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-info img-card box-info-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">{{$barang}}</h2>
                        <a href="{{ url('/admin/barang') }}" class="text-white text-decoration-none mb-0">Sales</a>
                    </div>
                    <div class="ms-auto">
                        <i class="fe fe-shopping-cart text-white fs-40 me-2 mt-2"></i>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <!-- Las cards "Barang Masuk" y "Barang Keluar" han sido eliminadas -->
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-purple img-card box-purple-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">{{$customer}}</h2>
                        <a href="{{ url('/admin/customer') }}" class="text-white text-decoration-none mb-0">Customer</a>

                    </div>
                    <div class="ms-auto">
                        <i class="fe fe-user text-white fs-40 me-2 mt-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-warning img-card box-warning-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">{{$user}}</h2>

                        <a href="{{ url('/admin/user') }}" class="text-white text-decoration-none mb-0">Collaborators</a>
                    </div>
                    <div class="ms-auto">
                        <i class="fe fe-user text-white fs-40 me-2 mt-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
</div>
<!-- ROW 1 CLOSED -->
@endsection
