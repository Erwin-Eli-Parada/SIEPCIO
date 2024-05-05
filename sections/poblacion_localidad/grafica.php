<script>
    const ctx = document.getElementById('graficaHM');
    console.log(<?php echo json_encode($valorLocalidad); ?>);
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorLocalidad); ?>,
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
    const ctx2 = document.getElementById('graficaAI');
    console.log(<?php echo json_encode($valorLocalidad); ?>);
    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorLocalidad); ?>,
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
    const ctx3 = document.getElementById('graficaSEI');
    console.log(<?php echo json_encode($valorLocalidad2); ?>);
    new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorLocalidad2); ?>,
            datasets: [{
                label: '# Viviendas con acceso al servicio de salud',
                data: <?php echo json_encode($valorass); ?>,
                borderWidth: 1,
                backgroundColor: "#DBAB74"
            }, {
                label: '# Vivendas con acceso a la educación',
                data: <?php echo json_encode($valorea); ?>,
                borderWidth: 1,
                backgroundColor: "#74BCDB"
            }, {
                label: '# Viviendas habitadas',
                data: <?php echo json_encode($valorvh); ?>,
                borderWidth: 1,
                backgroundColor: "#D274DB"
            }, {
                label: '# Viviendas habitadas sin servicios basicos',
                data: <?php echo json_encode($valorvhss); ?>,
                borderWidth: 1,
                backgroundColor: "#748186"
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
                    text: 'SITUACIÓN ECONÓMICA, SALUD Y VIVIENDA DE POBLACIÓNES EN MUNICIPIOS QUE SE AUTOADSCRIBEN COMO INDÍGENAS'
                }
            }
        }
    });
</script>
<script>
    const ctx4 = document.getElementById('graficaSEA');
    console.log(<?php echo json_encode($valorLocalidad3); ?>);
    new Chart(ctx4, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorLocalidad3); ?>,
            datasets: [{
                label: '# Viviendas con acceso al servicio de salud',
                data: <?php echo json_encode($valorass2); ?>,
                borderWidth: 1,
                backgroundColor: "#DBD170"
            }, {
                label: '# Vivendas con acceso a la educación',
                data: <?php echo json_encode($valorea2); ?>,
                borderWidth: 1,
                backgroundColor: "#8970DC"
            }, {
                label: '# Viviendas habitadas',
                data: <?php echo json_encode($valorvh2); ?>,
                borderWidth: 1,
                backgroundColor: "#DB8270"
            }, {
                label: '# Viviendas habitadas sin servicios basicos',
                data: <?php echo json_encode($valorvhss2); ?>,
                borderWidth: 1,
                backgroundColor: "#495C54"
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
                    text: 'SITUACIÓN ECONÓMICA, SALUD Y VIVIENDA DE POBLACIÓNES EN MUNICIPIOS QUE SE AUTOADSCRIBEN COMO AFROMEXICANOS'
                }
            }
        }
    });
</script>