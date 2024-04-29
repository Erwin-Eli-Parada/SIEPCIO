<script>
    const ctx = document.getElementById('graficaVG');
    console.log(<?php echo json_encode($valorLocalidad); ?>);
    new Chart(ctx, {
        type: 'radar',
        data: {
            labels: <?php echo json_encode(["Valles Centrales", "Costa", "Mixteca", "Istmo", "Cañada", "Sierra norte", "Sierra sur", "Papaloapan"]); ?>,
            datasets: [{
                label: '# Municipios con violencia de género',
                data: <?php echo json_encode($numRegion); ?>,
                borderWidth: 1,
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Tendencia a la violencia de género por región'
                }
            }
        }
    });
</script>