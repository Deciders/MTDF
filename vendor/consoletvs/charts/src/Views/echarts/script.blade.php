<script type="text/javascript">
    let {{ $chart->id }}_rendered = false;
    let {{ $chart->id }}_load = function () {
        if (document.getElementById("{{ $chart->id }}") && !{{ $chart->id }}_rendered) {
            {{ $chart->id }}_rendered = true;
            window.{{ $chart->id }} = echarts.init(document.getElementById("{{ $chart->id }}")).setOption({
                series: {!! $chart->formatDatasets() !!},
                {!! $chart->formatOptions(false, true) !!}
            });
        }
    };
    window.addEventListener("load", {{ $chart->id }}_load);
    document.addEventListener("turbolinks:load", {{ $chart->id }}_load);
</script>