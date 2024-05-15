<!-- <script>
    const ctx = document.getElementById('graficaAE');
    var data = <?php echo json_encode($valorAE); ?>.map((valor, index)=>{
        cantidades = <?php echo json_encode($valorCantidad); ?>;
        return {
            label: valor,
            data: cantidades[index],
            borderWidth: 1
        }
    });
    console.log(data);
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorAE); ?>,
            // labels: ["Profesión"],
            // datasets: data
            datasets: [{
                label: '# Personas',
                data: <?php echo json_encode($valorCantidad); ?>,
                borderWidth: 1,
                // backgroundColor: 'rgba(100, 100, 100, 0.1)'
            }]
        },
        options: {
            indexAxis: 'y',
            scales: {
                y: {
                    beginAtZero: true,
                },
                x: {
                    ticks: {
                        // display: false //this will remove only the label
                    }
                },
            },
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: 'Actividades económicas realizadas por personas autoadscritas indígenas'
                },
                legend: {
                    display: false
                }
            }
        }
    });
</script> -->
<!-- <script>
    const ctx2 = document.getElementById('graficaAEA');
    var data = <?php echo json_encode($valorAE); ?>.map((valor, index)=>{
        cantidades = <?php echo json_encode($valorCantidad); ?>;
        return {
            label: valor,
            data: cantidades[index],
            borderWidth: 1
        }
    });
    console.log(data);
    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorAE); ?>,
            // labels: ["Profesión"],
            // datasets: data
            datasets: [{
                label: '# Personas',
                data: <?php echo json_encode($valorCantidad); ?>,
                borderWidth: 1,
                // backgroundColor: 'rgba(100, 100, 100, 0.1)'
            }]
        },
        options: {
            indexAxis: 'y',
            scales: {
                y: {
                    beginAtZero: true,
                },
                x: {
                    ticks: {
                        // display: false //this will remove only the label
                    }
                },
            },
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: 'Actividades económicas realizadas por personas autoadscritas afromexicanas'
                },
                legend: {
                    display: false
                }
            }
        }
    });
</script> -->