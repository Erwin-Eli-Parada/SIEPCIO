<script>
    const ctx = document.getElementById('graficaHM');
    console.log(<?php echo json_encode($valorMunicipio); ?>);
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorMunicipio); ?>,
            datasets: [{
                label: '# Hombres',
                data: <?php echo json_encode($valorMas); ?>,
                borderWidth: 1,
            }, {
                label: '# Mujeres',
                data: <?php echo json_encode($valorFem); ?>,
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Población total'
                }
            }
        }
    });
</script>
<script>
    const ctx2 = document.getElementById('myChart');
    console.log(<?php echo json_encode($valorMunicipio); ?>);
    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorMunicipio); ?>,
            datasets: [{
                label: '# Población Total',
                data: <?php echo json_encode($valorPobTotal); ?>,
                borderWidth: 1,
                backgroundColor: "#775B59"
            }, {
                label: '# Indigenas',
                data: <?php echo json_encode($valorInd); ?>,
                borderWidth: 1,
                backgroundColor: "#81A094"
            }, {
                label: '# Afromexicanos',
                data: <?php echo json_encode($valorAfro); ?>,
                borderWidth: 1,
                backgroundColor: "#9AE5E6"
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Población Autoadscrita Indigena y Afromexicana'
                }
            }
        }
    });
</script>
<script>
    const ctx3 = document.getElementById('graficaAnalfabeta');
    console.log(<?php echo json_encode($valorMunicipio); ?>);
    new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorMunicipio); ?>,
            datasets: [{
                label: '# Porcentaje analfabetismo',
                data: <?php echo json_encode($valorAnalfabetismo); ?>,
                borderWidth: 1,
                backgroundColor: "#775B59"
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Porcentaje de población analfabeta'
                }
            }
        }
    });
</script>