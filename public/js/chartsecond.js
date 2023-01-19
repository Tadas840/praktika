var veisles = veisl;
var labels =  labelx;

const data = {
    labels: labels,
    datasets: [{
    label: 'Viesliu kiekis',
    backgroundColor: 'rgb(255, 99, 132)',
    borderColor: 'rgb(255, 99, 132)',
    data: veisles,
    }]
};

 const config = {
    type: 'bar',
    data: data,
    options: {}
};

 const myChart = new Chart(
    document.getElementById('SecondChart'),
    config
);