@extends('layouts.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @if (session('status'))
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
                        {{ session('status') }}
                    </div>
                </div>
            @endif

            <div class="col-lg-3 col-sm-6 col-12">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $paymentsCount }}</h3>

                        <p>Total vendas ({{ ucfirst(strftime('%B')) }})</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('admin.payments.index') }}" class="small-box-footer">Mais informações <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-sm-6 col-12">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><span
                                style="font-size: 20px">R$</span> {{ number_format($paymentsTotalAmount, 2, ',', '.') }}
                        </h3>
                        <p>Total receitas ({{ ucfirst(strftime('%B')) }})</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('admin.payments.index') }}" class="small-box-footer">Mais informações <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-sm-6 col-12">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $registeredUsersCount }}</h3>
                        <p>Usuários registrados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('admin.users.index') }}" class="small-box-footer">Mais informações <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-sm-6 col-12">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $enroledUsersCount }}</h3>
                        <p>Alunos matriculados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-university"></i>
                    </div>
                    <a href="{{ route('admin.users.registered') }}" class="small-box-footer">Mais informações <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <div class="clearfix"></div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        Bem vindo, {{ Auth::user()->name }}!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
