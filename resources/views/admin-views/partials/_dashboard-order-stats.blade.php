<div class="col-sm-6 col-lg-3">
    <!-- Card -->
    <a class="resturant-card dashboard--card card--bg-1" href="{{route('admin.dispatch.list',['searching_for_deliverymen'])}}">
       <h4 class="title">{{$data['searching_for_dm']}}</h4>
       <span class="subtitle">{{translate('unassigned_orders')}}</span>
       <img src="{{asset('/public/assets/admin/img/dashboard/1.png')}}" alt="img" class="resturant-icon">
    </a>
    <!-- End Card -->
</div>

<div class="col-sm-6 col-lg-3">
    <!-- Card -->
    <a class="resturant-card dashboard--card card--bg-2" href="{{route('admin.order.list',['accepted'])}}">
       <h4 class="title">{{$data['accepted_by_dm']}}</h4>
       <span class="subtitle">{{translate('ongoing_orders')}}</span>
       <img src="{{asset('/public/assets/admin/img/dashboard/2.png')}}" alt="img" class="resturant-icon">
    </a>
    <!-- End Card -->
</div>

<div class="col-sm-6 col-lg-3">
    <!-- Card -->
    <a class="resturant-card dashboard--card card--bg-3" href="{{route('admin.order.list',['processing'])}}">
       <h4 class="title">{{$data['preparing_in_rs']}}</h4>
       <span class="subtitle">{{translate('preparing_in_stores')}}</span>
       <img src="{{asset('/public/assets/admin/img/dashboard/3.png')}}" alt="img" class="resturant-icon">
    </a>
    <!-- End Card -->
</div>

<div class="col-sm-6 col-lg-3">
    <!-- Card -->
    <a class="resturant-card dashboard--card card--bg-4" href="{{route('admin.order.list',['item_on_the_way'])}}">
       <h4 class="title">{{$data['picked_up']}}</h4>
       <span class="subtitle">{{translate('picked_up')}}</span>
       <img src="{{asset('/public/assets/admin/img/dashboard/4.png')}}" alt="img" class="resturant-icon">
    </a>
    <!-- End Card -->
</div>

<div class="col-12">
    <div class="row g-2">
        <div class="col-sm-6 col-lg-3">
            <a class="order--card h-100" href="{{route('admin.order.list',['delivered'])}}">
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="card-subtitle d-flex justify-content-between m-0 align-items-center">
                        <img src="{{asset('/public/assets/admin/img/dashboard/statistics/1.png')}}" alt="dashboard" class="oder--card-icon">
                        <span>{{translate('messages.delivered')}}</span>
                    </h6>
                    <span class="card-title text-success">
                        {{$data['delivered']}}
                    </span>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-lg-3">
            <a class="order--card h-100" href="{{route('admin.order.list',['canceled'])}}">
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="card-subtitle d-flex justify-content-between m-0 align-items-center">
                        <img src="{{asset('/public/assets/admin/img/dashboard/statistics/2.png')}}" alt="dashboard" class="oder--card-icon">
                        <span>{{translate('messages.canceled')}}</span>
                    </h6>
                    <span class="card-title text-danger">
                        {{$data['canceled']}}
                    </span>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-lg-3">
            <a class="order--card h-100" href="{{route('admin.order.list',['failed'])}}">
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="card-subtitle d-flex justify-content-between m-0 align-items-center">
                        <img src="{{asset('/public/assets/admin/img/dashboard/statistics/3.png')}}" alt="dashboard" class="oder--card-icon">
                        <span>{{translate('messages.payment')}} {{translate('messages.failed')}}</span>
                    </h6>
                    <span class="card-title text-primary">
                        {{$data['refund_requested']}}
                    </span>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-lg-3">
            <a class="order--card h-100" href="{{route('admin.order.list',['refunded'])}}">
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="card-subtitle d-flex justify-content-between m-0 align-items-center">
                        <img src="{{asset('/public/assets/admin/img/dashboard/statistics/4.png')}}" alt="dashboard" class="oder--card-icon">
                        <span>{{translate('messages.refunded')}}</span>
                    </h6>
                    <span class="card-title text-info">
                        {{$data['refunded']}}
                    </span>
                </div>
            </a>
        </div>
    </div>
</div>
