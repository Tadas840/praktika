
            
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
    options: {}
};

 const myChart = new Chart(
    document.getElementById('myChart'),
    config
);
