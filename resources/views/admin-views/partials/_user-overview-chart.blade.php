@php($params = session('dash_params'))
@if($params['zone_id']!='all')
    @php($zone_name=\App\Models\Zone::where('id',$params['zone_id'])->first()->name)
@else
    @php($zone_name = translate('messages.all'))
@endif
<div class="chartjs-custom mx-auto">
    <canvas id="user-overview" class="mt-2"></canvas>
</div>
<div class="total--users">
    <span>{{translate('messages.total_users')}}</span>
    <h3>{{ $data['customer'] + $data['stores'] + $data['delivery_man'] }}</h3>
</div>
<div class="d-flex flex-wrap justify-content-center mt-4">
    <div class="chart--label">
        <span class="indicator chart-bg-2"></span>
        <span class="info">
            {{translate('messages.customer')}}
        </span>
    </div>
    <div class="chart--label">
        <span class="indicator chart-bg-1"></span>
        <span class="info">
            {{translate('messages.store')}}
        </span>
    </div>
    <div class="chart--label">
        <span class="indicator chart-bg-3"></span>
        <span class="info">
            {{translate('messages.delivery_man')}}
        </span>
    </div>
</div>


<script src="{{ asset('public/assets/admin') }}/vendor/chart.js/dist/Chart.min.js"></script>


<script>
    var ctx = document.getElementById('user-overview');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            datasets: [{
                label: 'User',
                data: ['{{ $data['customer'] }}', '{{ $data['stores'] }}',
                    '{{ $data['delivery_man'] }}'
                ],
                backgroundColor: [
                    '#00AA96',
                    '#005555',
                    '#D9F1F1'
                ],
                hoverOffset: 3
            }],
            labels: [
                '{{ translate('messages.customer') }}',
                '{{ translate('messages.store') }}',
                '{{ translate('messages.delivery_man') }}'
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            legend: {
                display: false,
                position: 'chartArea',
            }
        }
    });
</script>
