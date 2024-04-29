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