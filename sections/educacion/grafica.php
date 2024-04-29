<script>
    const ctx = document.getElementById('graficaEducacion');
    // console.log(<?php echo json_encode($valorMunicipio); ?>);
    // console.log(<?php echo json_encode($valorAsistencia); ?>);
    // console.log(<?php echo json_encode($valorPorcentaje); ?>);
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($valorAsistencia); ?>,
            datasets: [{
                label: 'Acceso',
                data: <?php echo json_encode($valorPorcentaje); ?>,
                borderWidth: 1,
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Población indígena menor de edad con acceso a la eduación'
                }
            }
        }
    });
</script>