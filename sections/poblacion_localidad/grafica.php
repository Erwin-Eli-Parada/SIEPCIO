<!-- <script>
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
</script> -->