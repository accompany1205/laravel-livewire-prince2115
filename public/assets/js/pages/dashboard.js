(function($) {
    "use strict";
    $(function() {
        if ($("#cutomerGrowthChart").length) {
            var barChartCanvas = $("#cutomerGrowthChart")
                .get(0)
                .getContext("2d");
            var barChart = new Chart(barChartCanvas, {
                type: "bar",
                data: {
                    labels: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec"
                    ],
                    datasets: [
                        {
                            label: "Customers",
                            data: [39, 19, 25, 16, 31, 39, 12, 18, 33, 24, 50, 80],
                            backgroundColor: '#00ccf2',
                            borderColor: primaryColor,
                            borderWidth: 0
                        }
                    ]
                },
                options: {
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    },

                    scales: {
                        responsive: true,
                        maintainAspectRatio: true,
                        yAxes: [
                            {
                                display: true,
                                gridLines: {
                                    color: false
                                }
                            }
                        ],
                        xAxes: [
                            {
                                display: true,
                                barPercentage: 0.4,
                                gridLines: {
                                    display: false
                                }
                            }
                        ]
                    },
                    legend: {
                        display: false
                    }
                }
            });
        }

        if ($("#loansProfileChart").length) {
            var barChartCanvas = $("#loansProfileChart")
                .get(0)
                .getContext("2d");
            var barChart = new Chart(barChartCanvas, {
                type: "bar",
                data: {
                    labels: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec"
                    ],
                    datasets: [
                        {
                            label: "Loans",
                            data: [39, 19, 25, 16, 31, 39, 12, 18, 33, 24, 50, 80],
                            backgroundColor: '#2e84be',
                            borderColor: primaryColor,
                            borderWidth: 0
                        }
                    ]
                },
                options: {
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    },

                    scales: {
                        responsive: true,
                        maintainAspectRatio: true,
                        yAxes: [
                            {
                                display: true,
                                gridLines: {
                                    color: false
                                }
                            }
                        ],
                        xAxes: [
                            {
                                display: true,
                                barPercentage: 0.4,
                                gridLines: {
                                    display: false
                                }
                            }
                        ]
                    },
                    legend: {
                        display: false
                    }
                }
            });
        }
        
        
    });
})(jQuery);
