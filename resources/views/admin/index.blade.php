@extends('admin.master')
@section('title', __("keywords.dashboard"))
@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <!-- Page Header -->
                <div class="row align-items-center mb-2">
                    <div class="col">
                        <h2 class="h5 page-title">{{ __("keywords.welcome") }}</h2>
                    </div>
                    <div class="col-auto">
                        <form class="form-inline">
                            <div class="form-group d-none d-lg-inline">
                                <label for="reportrange" class="sr-only">{{ __("keywords.select_date") }}</label>
                                <div id="reportrange" class="px-2 py-2 text-muted">
                                    <span class="small"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-sm">
                                    <span class="fe fe-refresh-ccw fe-16 text-muted"></span>
                                </button>
                                <button type="button" class="btn btn-sm mr-2">
                                    <span class="fe fe-filter fe-16 text-muted"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Balance / Charts -->
                <div class="mb-2 align-items-center">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="row mt-1 align-items-center">
                                <div class="col-12 col-lg-4 text-left pl-4">
                                    <p class="mb-1 small text-muted">{{ __("keywords.balance") }}</p>
                                    <span class="h3">$12,600</span>
                                    <span class="small text-muted">+20%</span>
                                    <span class="fe fe-arrow-up text-success fe-12"></span>
                                    <p class="text-muted mt-2">{{ __("keywords.balance_info") }}</p>
                                </div>
                                <div class="col-6 col-lg-2 text-center py-4">
                                    <p class="mb-1 small text-muted">{{ __("keywords.today") }}</p>
                                    <span class="h3">$2,600</span><br>
                                    <span class="small text-muted">+20%</span>
                                    <span class="fe fe-arrow-up text-success fe-12"></span>
                                </div>
                                <div class="col-6 col-lg-2 text-center py-4 mb-2">
                                    <p class="mb-1 small text-muted">{{ __("keywords.goal_value") }}</p>
                                    <span class="h3">$260</span><br>
                                    <span class="small text-muted">+6%</span>
                                    <span class="fe fe-arrow-up text-success fe-12"></span>
                                </div>
                                <div class="col-6 col-lg-2 text-center py-4">
                                    <p class="mb-1 small text-muted">{{ __("keywords.completions") }}</p>
                                    <span class="h3">26</span><br>
                                    <span class="small text-muted">+20%</span>
                                    <span class="fe fe-arrow-up text-success fe-12"></span>
                                </div>
                                <div class="col-6 col-lg-2 text-center py-4">
                                    <p class="mb-1 small text-muted">{{ __("keywords.conversion") }}</p>
                                    <span class="h3">6%</span><br>
                                    <span class="small text-muted">-2%</span>
                                    <span class="fe fe-arrow-down text-danger fe-12"></span>
                                </div>
                            </div>
                            <div class="chartbox mr-4">
                                <div id="areaChart"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cards Row -->
                <div class="row items-align-baseline">
                    <!-- Earning Card -->
                    <div class="col-md-12 col-lg-4">
                        <div class="card shadow eq-card mb-4">
                            <div class="card-body mb-n3">
                                <div class="row items-align-baseline h-100">
                                    <div class="col-md-6 my-3">
                                        <p class="mb-0"><strong class="mb-0 text-uppercase text-muted">{{ __("keywords.earning") }}</strong></p>
                                        <h3>$2,562</h3>
                                        <p class="text-muted">{{ __("keywords.earning_desc") }}</p>
                                    </div>
                                    <div class="col-md-6 my-4 text-center">
                                        <div class="chart-box mx-4">
                                            <div id="radialbarWidget"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 border-top py-3">
                                        <p class="mb-1"><strong class="text-muted">{{ __("keywords.cost") }}</strong></p>
                                        <h4 class="mb-0">108</h4>
                                        <p class="small text-muted mb-0"><span>37.7% {{ __("keywords.last_week") }}</span></p>
                                    </div>
                                    <div class="col-md-6 border-top py-3">
                                        <p class="mb-1"><strong class="text-muted">{{ __("keywords.revenue") }}</strong></p>
                                        <h4 class="mb-0">1,168</h4>
                                        <p class="small text-muted mb-0"><span>-18.9% {{ __("keywords.last_week") }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="card shadow eq-card mb-4">
                            <div class="card-body mb-n3">
                                <div class="row items-align-baseline h-100">
                                    <div class="col-md-6 my-3">
                                        <p class="mb-0"><strong class="mb-0 text-uppercase text-muted">{{ __("keywords.earning") }}</strong></p>
                                        <h3>$2,562</h3>
                                        <p class="text-muted">{{ __("keywords.earning_desc") }}</p>
                                    </div>
                                    <div class="col-md-6 my-4 text-center">
                                        <div class="chart-box mx-4">
                                            <div id="radialbarWidget"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 border-top py-3">
                                        <p class="mb-1"><strong class="text-muted">{{ __("keywords.cost") }}</strong></p>
                                        <h4 class="mb-0">108</h4>
                                        <p class="small text-muted mb-0"><span>37.7% {{ __("keywords.last_week") }}</span></p>
                                    </div>
                                    <div class="col-md-6 border-top py-3">
                                        <p class="mb-1"><strong class="text-muted">{{ __("keywords.revenue") }}</strong></p>
                                        <h4 class="mb-0">1,168</h4>
                                        <p class="small text-muted mb-0"><span>-18.9% {{ __("keywords.last_week") }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="card shadow eq-card mb-4">
                            <div class="card-body mb-n3">
                                <div class="row items-align-baseline h-100">
                                    <div class="col-md-6 my-3">
                                        <p class="mb-0"><strong class="mb-0 text-uppercase text-muted">{{ __("keywords.earning") }}</strong></p>
                                        <h3>$2,562</h3>
                                        <p class="text-muted">{{ __("keywords.earning_desc") }}</p>
                                    </div>
                                    <div class="col-md-6 my-4 text-center">
                                        <div class="chart-box mx-4">
                                            <div id="radialbarWidget"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 border-top py-3">
                                        <p class="mb-1"><strong class="text-muted">{{ __("keywords.cost") }}</strong></p>
                                        <h4 class="mb-0">108</h4>
                                        <p class="small text-muted mb-0"><span>37.7% {{ __("keywords.last_week") }}</span></p>
                                    </div>
                                    <div class="col-md-6 border-top py-3">
                                        <p class="mb-1"><strong class="text-muted">{{ __("keywords.revenue") }}</strong></p>
                                        <h4 class="mb-0">1,168</h4>
                                        <p class="small text-muted mb-0"><span>-18.9% {{ __("keywords.last_week") }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add other cards here as needed -->
                </div>

                <!-- Recent Activity -->
                <div class="row">
                    <div class="col-md-12 col-lg-4 mb-4">
                        <div class="card timeline shadow">
                            <div class="card-header">
                                <strong class="card-title">{{ __("keywords.recent_activity") }}</strong>
                                <a class="float-right small text-muted" href="#!">{{ __("keywords.view_all") }}</a>
                            </div>
                            <div class="card-body" data-simplebar style="height:355px; overflow-y:auto; overflow-x:hidden;">
                                <h6 class="text-uppercase text-muted mb-4">{{ __("keywords.today") }}</h6>
                                <!-- Timeline item -->
                                <div class="pb-3 timeline-item item-primary">
                                    <div class="pl-5">
                                        <div class="mb-1">
                                            <strong>@Brown Asher</strong>
                                            <span class="text-muted small mx-2">{{ __("keywords.created_new_layout") }}</span>
                                            <strong>Tiny Admin</strong>
                                        </div>
                                        <p class="small text-muted">{{ __("keywords.front_end_dev") }} <span class="badge badge-light">1h ago</span></p>
                                    </div>
                                </div>
                                <div class="pb-3 timeline-item item-primary">
                                    <div class="pl-5">
                                        <div class="mb-1">
                                            <strong>@Brown Asher</strong>
                                            <span class="text-muted small mx-2">{{ __("keywords.created_new_layout") }}</span>
                                            <strong>Tiny Admin</strong>
                                        </div>
                                        <p class="small text-muted">{{ __("keywords.front_end_dev") }} <span class="badge badge-light">1h ago</span></p>
                                    </div>
                                </div>
                                <!-- More timeline items -->
                            </div>
                        </div>
                    </div>

                    <!-- Recent Data Table -->
                    <div class="col-md-12 col-lg-8">
                        <div class="card shadow">
                            <div class="card-header">
                                <strong class="card-title">{{ __("keywords.recent_data") }}</strong>
                                <a class="float-right small text-muted" href="#!">{{ __("keywords.view_all") }}</a>
                            </div>
                            <div class="card-body my-n2">
                                <table class="table table-striped table-hover table-borderless">
                                    <thead>
                                        <tr>
                                            <th>{{ __("keywords.id") }}</th>
                                            <th>{{ __("keywords.name") }}</th>
                                            <th>{{ __("keywords.address") }}</th>
                                            <th>{{ __("keywords.date") }}</th>
                                            <th>{{ __("keywords.action") }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2474</td>
                                            <th scope="row">Brown, Asher D.</th>
                                            <td>Ap #331-7123 Lobortis Avenue</td>
                                            <td>13/09/2020</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm dropdown-toggle more-vertical" type="button" id="dr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted sr-only">{{ __("keywords.action") }}</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
                                                        <a class="dropdown-item" href="#">{{ __("keywords.edit") }}</a>
                                                        <a class="dropdown-item" href="#">{{ __("keywords.remove") }}</a>
                                                        <a class="dropdown-item" href="#">{{ __("keywords.assign") }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2474</td>
                                            <th scope="row">Brown, Asher D.</th>
                                            <td>Ap #331-7123 Lobortis Avenue</td>
                                            <td>13/09/2020</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm dropdown-toggle more-vertical" type="button" id="dr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted sr-only">{{ __("keywords.action") }}</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
                                                        <a class="dropdown-item" href="#">{{ __("keywords.edit") }}</a>
                                                        <a class="dropdown-item" href="#">{{ __("keywords.remove") }}</a>
                                                        <a class="dropdown-item" href="#">{{ __("keywords.assign") }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2474</td>
                                            <th scope="row">Brown, Asher D.</th>
                                            <td>Ap #331-7123 Lobortis Avenue</td>
                                            <td>13/09/2020</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm dropdown-toggle more-vertical" type="button" id="dr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted sr-only">{{ __("keywords.action") }}</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
                                                        <a class="dropdown-item" href="#">{{ __("keywords.edit") }}</a>
                                                        <a class="dropdown-item" href="#">{{ __("keywords.remove") }}</a>
                                                        <a class="dropdown-item" href="#">{{ __("keywords.assign") }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2474</td>
                                            <th scope="row">Brown, Asher D.</th>
                                            <td>Ap #331-7123 Lobortis Avenue</td>
                                            <td>13/09/2020</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm dropdown-toggle more-vertical" type="button" id="dr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted sr-only">{{ __("keywords.action") }}</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
                                                        <a class="dropdown-item" href="#">{{ __("keywords.edit") }}</a>
                                                        <a class="dropdown-item" href="#">{{ __("keywords.remove") }}</a>
                                                        <a class="dropdown-item" href="#">{{ __("keywords.assign") }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2474</td>
                                            <th scope="row">Brown, Asher D.</th>
                                            <td>Ap #331-7123 Lobortis Avenue</td>
                                            <td>13/09/2020</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm dropdown-toggle more-vertical" type="button" id="dr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted sr-only">{{ __("keywords.action") }}</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
                                                        <a class="dropdown-item" href="#">{{ __("keywords.edit") }}</a>
                                                        <a class="dropdown-item" href="#">{{ __("keywords.remove") }}</a>
                                                        <a class="dropdown-item" href="#">{{ __("keywords.assign") }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- More table rows -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div> <!-- /row -->
            </div> <!-- /col-12 -->
        </div> <!-- /row -->
    </div> <!-- /container-fluid -->
</main>
@endsection
