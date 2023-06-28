
var config = {
    type: 'pie',
    data: {
        datasets: [{
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
            ],
            backgroundColor: [
                window.chartColors.navy,
                window.chartColors.blue,
                window.chartColors.purple,
                window.chartColors.danger,
                window.chartColors.grey,
            ],
            label: 'Dataset 1'
        }],
        labels: [
            'navy',
            'blue',
            'purple',
            'danger',
            'grey'
        ]
    },
    options: {
        responsive: true
    }
};

window.onload = function () {
    var ctx4 = document.getElementById('piechart').getContext('2d');
    window.myPie = new Chart(ctx4, config);
};