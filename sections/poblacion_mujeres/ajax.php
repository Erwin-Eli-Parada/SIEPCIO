<script>
    let graficaFem;
    $("document").ready(function() {

        $('#filtrarSituacionMujeres').change(function() {
            var claveMunicipio = $(this).val();
            cargarTablaMujeres(claveMunicipio);
            cargarGraficaMujeres(claveMunicipio);
        });

        function cargarTablaMujeres(claveMunicipio) {
            $.ajax({
                url: 'filtrarTablaMujeres.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(data) {
                    $('#tbody-table-responsive-mujeres').html(data);
                }
            });
        }

        function cargarGraficaMujeres(claveMunicipio) {
            $.ajax({
                url: 'filtrarGraficaMujeres.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(response) {
                    console.log(JSON.parse(response));
                    const ctx = document.getElementById('graficaFem');
                    if (graficaFem) {
                        graficaFem.destroy();
                    }
                    graficaFem = new Chart(ctx, {
                        type: 'bar',
                        data: JSON.parse(response),
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
                }
            });
        }
        cargarGraficaMujeres('');
        cargarTablaMujeres('');
    });
</script>
<script>
    let graficaAEMI;
    $("document").ready(function() {

        $('#filtrarMujeresEconomico').change(function() {
            var claveMunicipio = $(this).val();
            cargarTablaAEMI(claveMunicipio);
            cargarGraficaAEMI(claveMunicipio);
        });

        function cargarTablaAEMI(claveMunicipio) {
            $.ajax({
                url: 'filtrarTablaAEMI.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(data) {
                    $('#tbody-table-responsive-mujeres-economica').html(data);
                }
            });
        }

        function cargarGraficaAEMI(claveMunicipio) {
            $.ajax({
                url: 'filtrarGraficaAEMI.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(response) {
                    console.log(JSON.parse(response));
                    const ctx2 = document.getElementById('graficaAEMI');
                    if (graficaAEMI) {
                        graficaAEMI.destroy();
                    }
                    graficaAEMI = new Chart(ctx2, {
                        type: 'bar',
                        data: JSON.parse(response),
                        options: {
                            indexAxis: 'y',
                            scales: {
                                y: {
                                    beginAtZero: true,
                                },
                                x: {
                                    ticks: {
                                        // display: false //this will remove only the label
                                    }
                                },
                            },
                            responsive: true,
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Actividades económicas realizadas por mujeres autoadscritas indígenas'
                                },
                                legend: {
                                    display: false
                                }
                            }
                        }
                    });
                }
            });
        }
        cargarGraficaAEMI('');
        cargarTablaAEMI('');
    });
</script>
<script>
    let graficaAEMA;
    $("document").ready(function() {

        $('#filtrarMujeresEconomicoAfro').change(function() {
            var claveMunicipio = $(this).val();
            cargarTablaAEMA(claveMunicipio);
            cargarGraficaAEMA(claveMunicipio);
        });

        function cargarTablaAEMA(claveMunicipio) {
            $.ajax({
                url: 'filtrarTablaAEMA.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(data) {
                    $('#tbody-table-responsive-mujeres-economica-afro').html(data);
                }
            });
        }

        function cargarGraficaAEMA(claveMunicipio) {
            $.ajax({
                url: 'filtrarGraficaAEMA.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(response) {
                    console.log(JSON.parse(response));
                    const ctx2 = document.getElementById('graficaAEMA');
                    if (graficaAEMA) {
                        graficaAEMA.destroy();
                    }
                    graficaAEMA = new Chart(ctx2, {
                        type: 'bar',
                        data: JSON.parse(response),
                        options: {
                            indexAxis: 'y',
                            scales: {
                                y: {
                                    beginAtZero: true,
                                },
                                x: {
                                    ticks: {
                                        // display: false //this will remove only the label
                                    }
                                },
                            },
                            responsive: true,
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Actividades económicas realizadas por mujeres autoadscritas afromexicanas'
                                },
                                legend: {
                                    display: false
                                }
                            }
                        }
                    });
                }
            });
        }
        cargarGraficaAEMA('');
        cargarTablaAEMA('');
    });
</script>