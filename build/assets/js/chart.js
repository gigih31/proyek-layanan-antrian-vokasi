// ApexCharts options and config
window.addEventListener("load", function () {
    let options = {
        chart: {
            height: "100%",
            maxWidth: "100%",
            type: "area",
            fontFamily: "Inter, sans-serif",
            dropShadow: {
                enabled: false,
            },
            toolbar: {
                show: false,
            },
        },
        tooltip: {
            enabled: true,
            x: {
                show: false,
            },
        },
        fill: {
            type: "gradient",
            gradient: {
                opacityFrom: 0.55,
                opacityTo: 0,
                shade: "#1C64F2",
                gradientToColors: ["#1C64F2"],
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            width: 6,
        },
        grid: {
            show: false,
            strokeDashArray: 4,
            padding: {
                left: 2,
                right: 2,
                top: 0
            },
        },
        series: [
            {
                name: "Kemahasiswaan",
                data: [10, 20, 16, 21, 12],
                color: "#213349",
            },
            {
                name: "Akademik",
                data: [5, 10, 8, 11, 13],
                color: "#263959",
            },
            {
                name: "Keuangan",
                data: [10, 15, 24, 12, 12],
                color: "#2CA900",
            },
            {
                name: "Umum",
                data: [10, 23, 10, 20, 17],
                color: "#E9B82F",
            },
        ],
        xaxis: {
            categories: ['01 November', '02 November', '03 November', '04 November', '05 November', '06 November', '07 November'],
            labels: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {            
            show: true,
        },
    }

    if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("area-chart"), options);
        chart.render();
    }
});