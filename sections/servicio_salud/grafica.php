<script>
    const ctx = document.getElementById('graficaSS');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorSS); ?>,
            datasets: [{
                label: '% Personas',
                data: <?php echo json_encode($valorPorcentaje); ?>,
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: 'Servicio de salud de las personas autoadscritas indígenas'
                }
            }
        }
    });
</script>
<script>
    const ctx2 = document.getElementById('graficaSSA');
    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorSSA); ?>,
            datasets: [{
                label: '% Personas',
                data: <?php echo json_encode($valorPorcentajeA); ?>,
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: 'Servicio de salud de las personas autoadscritas afromexicanas'
                }
            }
        }
    });
</script>
