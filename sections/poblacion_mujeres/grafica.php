<script>
    const ctx = document.getElementById('graficaFem');
    console.log(<?php echo json_encode($valorLocalidad); ?>);
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorLocalidad); ?>,
            datasets: [{
                label: '# Mujeres de 3 a 5 años',
                data: <?php echo json_encode($valorPob3_5); ?>,
                borderWidth: 1,
            }, {
                label: '# Mujeres de 6 a 11 años',
                data: <?php echo json_encode($valorPob6_11); ?>,
                borderWidth: 1,
            }, {
                label: '# Mujeres de 12 a 14 años',
                data: <?php echo json_encode($valorPob12_14); ?>,
                borderWidth: 1,
            }, {
                label: '# Mujeres de 15 a 49 años',
                data: <?php echo json_encode($valorPob15_49); ?>,
                borderWidth: 1,
            }, {
                label: '# Mujeres de 60 y más años',
                data: <?php echo json_encode($valorPob60); ?>,
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                x: {
                    stacked: true
                },
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Población Femenina por edad'
                }
            }
        }
    });
</script>
<script>
    const ctx2 = document.getElementById('graficaAEMI');
    // var data2 = <?php echo json_encode($valorAEMI); ?>.map((valor, index)=>{
    //     cantidades = <?php echo json_encode($valorCantidadAEMI); ?>;
    //     return {
    //         label: valor,
    //         data: cantidades[index],
    //         borderWidth: 1
    //     }
    // });
    // console.log(data2);
    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorAEMI); ?>,
            // labels: ["Profesión"],
            // datasets: data
            datasets: [{
                label: '# Personas',
                data: <?php echo json_encode($valorCantidadAEMI); ?>,
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
                    text: 'Actividades económicas realizadas por mujeres autoadscritas indígenas'
                },
                legend: {
                    display: false
                }
            }
        }
    });
</script>
<script>
    const ctx3 = document.getElementById('graficaAEMA');
    // var data2 = <?php echo json_encode($valorAEMA); ?>.map((valor, index)=>{
    //     cantidades = <?php echo json_encode($valorCantidadAEMA); ?>;
    //     return {
    //         label: valor,
    //         data: cantidades[index],
    //         borderWidth: 1
    //     }
    // });
    // console.log(data2);
    new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorAEMA); ?>,
            // labels: ["Profesión"],
            // datasets: data
            datasets: [{
                label: '# Personas',
                data: <?php echo json_encode($valorCantidadAEMA); ?>,
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
                    text: 'Actividades económicas realizadas por mujeres autoadscritas afromexicanas'
                },
                legend: {
                    display: false
                }
            }
        }
    });
</script>