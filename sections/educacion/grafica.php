<!-- <script>
    const ctx = document.getElementById('graficaEducacionInd');
    // console.log(<?php echo json_encode($valorMunicipioInd); ?>);
    // console.log(<?php echo json_encode($valorAsistenciaInd); ?>);
    // console.log(<?php echo json_encode($valorPorcentajeInd); ?>);
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($valorAsistenciaInd); ?>,
            datasets: [{
                label: 'Acceso',
                data: <?php echo json_encode($valorPorcentajeInd); ?>,
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
</script> -->
<!-- <script>
    const ctx2 = document.getElementById('graficaEducacionAfro');
    new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($valorAsistenciaAfro); ?>,
            datasets: [{
                label: 'Acceso',
                data: <?php echo json_encode($valorPorcentajeAfro); ?>,
                borderWidth: 1,
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Población afromexicana menor de edad con acceso a la educación'
                }
            }
        }
    });
</script> -->
<!-- <script>
    const ctx3 = document.getElementById('graficaTransporteInd');
    new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorTransporteInd); ?>,
            datasets: [{
                label: 'Acceso',
                data: <?php echo json_encode($valorPorcentajeInd2); ?>,
                borderWidth: 1,
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Tipo de transporte de personas indígneas menores de edad con acceso a la educación'
                }
            }
        }
    });
</script> -->
<!-- <script>
    const ctx4 = document.getElementById('graficaTransporteAfro');
    new Chart(ctx4, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorTransporteAfro); ?>,
            datasets: [{
                label: 'Acceso',
                data: <?php echo json_encode($valorPorcentajeAfro2); ?>,
                borderWidth: 1,
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Tipo de transporte de personas afromexicanas menores de edad con acceso a la educación'
                }
            }
        }
    });
</script> -->
<!-- <script>
    const ctx5 = document.getElementById('graficaCarreraInd');
    new Chart(ctx5, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorCarreraInd); ?>,
            datasets: [{
                label: 'Acceso',
                data: <?php echo json_encode($valorPorcentajeInd3); ?>,
                borderWidth: 1,
            }]
        },
        options: {
            indexAxis: 'y',
            plugins: {
                title: {
                    display: true,
                    text: 'PORCENTAJE DEL TIPO DE CARRERA QUE TOMA LA POBLACIÓN INDÍGENA'
                }
            }
        }
    });
</script> -->
<script>
    const ctx6 = document.getElementById('graficaCarreraAfro');
    new Chart(ctx6, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($valorCarreraAfro); ?>,
            datasets: [{
                label: 'Acceso',
                data: <?php echo json_encode($valorPorcentajeAfro3); ?>,
                borderWidth: 1,
            }]
        },
        options: {
            indexAxis: 'y',
            plugins: {
                title: {
                    display: true,
                    text: 'PORCENTAJE DEL TIPO DE CARRERA QUE TOMA LA POBLACIÓN AFROMEXICANA'
                }
            }
        }
    });
</script>