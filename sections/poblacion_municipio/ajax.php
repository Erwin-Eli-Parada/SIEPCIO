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
<script>
    let graficaHM;
    let myChart;
    $("document").ready(function() {

        $('#filtrarPoblacion').change(function() {
            var nombreRegion = $(this).val();
            cargarTablaPoblacion(nombreRegion);
            cargarGraficaPoblacionHM(nombreRegion);
            cargarGraficaPoblacionIA(nombreRegion);
        });

        function cargarTablaPoblacion(nombreRegion) {
            $.ajax({
                url: 'filtrarTablaPoblacion.php',
                method: 'POST',
                data: {
                    nombreRegion: nombreRegion
                },
                success: function(data) {
                    $('#tbody-table-responsive-poblacion').html(data);
                    // graficaAnalfabeta.update();
                }
            });
        }

        function cargarGraficaPoblacionHM(nombreRegion) {
            $.ajax({
                url: 'filtrarGraficaPoblacionHM.php',
                method: 'POST',
                data: {
                    nombreRegion: nombreRegion
                },
                success: function(response) {
                    const ctx = document.getElementById('graficaHM');
                    if (graficaHM) {
                        graficaHM.destroy();
                    }
                    graficaHM = new Chart(ctx, {
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
                                    text: 'Población total'
                                }
                            }
                        }
                    });
                }
            });
        }

        function cargarGraficaPoblacionIA(nombreRegion) {
            $.ajax({
                url: 'filtrarGraficaPoblacionIA.php',
                method: 'POST',
                data: {
                    nombreRegion: nombreRegion
                },
                success: function(response) {
                    const ctx2 = document.getElementById('myChart');
                    if (myChart) {
                        myChart.destroy();
                    }
                    myChart = new Chart(ctx2, {
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
                                    text: 'Población Autoadscrita Indigena y Afromexicanal'
                                }
                            }
                        }
                    });
                }
            });
        }

        cargarGraficaPoblacionHM('');
        cargarGraficaPoblacionIA('');
        cargarTablaPoblacion('');
    });
</script>