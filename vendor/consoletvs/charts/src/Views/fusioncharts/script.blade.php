<script type="text/javascript">
    let {{ $chart->id }}_rendered = false;
    let {{ $chart->id }}_load = function () {
        if (document.getElementById("{{ $chart->id }}") && !{{ $chart->id }}_rendered) {
            {{ $chart->id }}_rendered = true;
            FusionCharts.ready(function () {
                window.{{ $chart->id }} = new FusionCharts({
                    type: "{!! $chart->formatType() !!}",
                    renderAt: "{{ $chart->id }}",
                    dataFormat: 'json',
                    {!! $chart->formatContainerOptions('js', true) !!}
                    dataSource: {
                        categories: [{
                            category: {!! $chart->formatLabels() !!}
                        }],
                        dataset: {!! $chart->formatDatasets() !!},
                        chart: {!! $chart->formatOptions(true) !!}
                    }
                }).render();
            });
        }
    };
    window.addEventListener("load", {{ $chart->id }}_load);
    document.addEventListener("turbolinks:load", {{ $chart->id }}_load);
</script>
