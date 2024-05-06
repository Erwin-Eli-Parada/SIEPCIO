<script>
    let graficaAnalfabeta;
    $("document").ready(function() {

        $('#filtrar').change(function() {
            var nombreRegion = $(this).val();
            cargarMunicipios(nombreRegion);
            cargarGrafica(nombreRegion);
        });

        function cargarMunicipios(nombreRegion) {
            $.ajax({
                url: 'filtrar.php',
                method: 'POST',
                data: {
                    nombreRegion: nombreRegion
                },
                success: function(data) {
                    $('#tbody-table-responsive').html(data);
                    console.log(<?php echo json_encode($valorMunicipio2); ?>);
                    // graficaAnalfabeta.update();
                }
            });
        }

        function cargarGrafica(nombreRegion) {
            $.ajax({
                url: 'filtrarGrafica.php',
                method: 'POST',
                data: {
                    nombreRegion: nombreRegion
                },
                success: function(response) {
                    console.log(JSON.parse(response));
                    const ctx3 = document.getElementById('graficaAnalfabeta');
                    if (graficaAnalfabeta) {
                        graficaAnalfabeta.destroy();
                    }
                    graficaAnalfabeta = new Chart(ctx3, {
                        type: 'bar',
                        data: JSON.parse(response),
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
                }
            });
        }
        cargarGrafica('');
        cargarMunicipios('');
    });
</script>