let ctx = document.getElementById('myChart').getContext('2d');
let labels = ['Users', 'Chat rooms',];
let colorHex = ['#2798B1', '#CE8AAE'];

let myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    datasets: [{
      data: [4,5],
      backgroundColor: colorHex
    }],
    labels: labels
  },
  options: {
    responsive: true,
    legend: {
      position: 'bottom'
    },
    plugins: {
      datalabels: {
        color: 'rgb(206,204,185)',
        anchor: 'end',
        align: 'start',
        offset: -10,
        borderWidth: 2,
        borderColor: 'rgb(206,204,185)',
        borderRadius: 25,
        backgroundColor: (context) => {
          return context.dataset.backgroundColor;
        },
        font: {
          weight: 'bold',
          size: '20'
        },
        formatter: (value) => {
          return value + ' %';
        }
      }
    }
  }
})
