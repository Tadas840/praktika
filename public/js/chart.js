
            
var cattles = cattle;
var labels =  labeld;

const data = {
    labels: labels,
    datasets: [{
    label: 'Galvijų gimstamumas',
    backgroundColor: 'rgb(255, 99, 132)',
    borderColor: 'rgb(255, 99, 132)',
    data: cattles,
    }]
};

 const config = {
    type: 'bar',
    data: data,
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
};

 const myChart = new Chart(
    document.getElementById('myChart'),
    config
);

var veisles = veisl;
var labels =  labelx;

const datasecond = {
    labels: labels,
    datasets: [{
    label: 'Veisliu kiekis',
    backgroundColor: 'rgb(255, 99, 132)',
    borderColor: 'rgb(255, 99, 132)',
    data: veisles,
    }]
};

 const configsecond = {
    type: 'bar',
    data: datasecond,
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
};

 const myChartsecond = new Chart(
    document.getElementById('SecondChart'),
    configsecond
);