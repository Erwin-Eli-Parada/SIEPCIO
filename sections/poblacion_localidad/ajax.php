<script>
    let graficaHM;
    let graficaAI;
    $("document").ready(function() {

        $('#filtrarPoblacionLocalidad').change(function() {
            var claveMunicipio = $(this).val();
            cargarTablaPoblacion(claveMunicipio);
            cargarGraficaPoblacionHM(claveMunicipio);
            cargarGraficaPoblacionAI(claveMunicipio);
        });

        function cargarTablaPoblacion(claveMunicipio) {
            $.ajax({
                url: 'filtrarTablaPoblacion.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(data) {
                    $('#tbody-table-responsive-poblacion-localidad').html(data);
                }
            });
        }

        function cargarGraficaPoblacionHM(claveMunicipio) {
            $.ajax({
                url: 'filtrarGraficaPoblacionHM.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
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

        function cargarGraficaPoblacionAI(claveMunicipio) {
            $.ajax({
                url: 'filtrarGraficaPoblacionAI.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(response) {
                    const ctx2 = document.getElementById('graficaAI');
                    if (graficaAI) {
                        graficaAI.destroy();
                    }
                    graficaAI = new Chart(ctx2, {
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
        cargarGraficaPoblacionAI('');
        cargarTablaPoblacion('');
    });
</script>
<script>
    let graficaSEI;
    $("document").ready(function() {

        $('#filtrarSituacionIndi').change(function() {
            var claveMunicipio = $(this).val();
            cargarTablaSEI(claveMunicipio);
            cargarGraficaSEI(claveMunicipio);
        });

        function cargarTablaSEI(claveMunicipio) {
            $.ajax({
                url: 'filtrarTablaSEI.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(data) {
                    $('#tbody-table-responsive-servicios-indi').html(data);
                }
            });
        }

        function cargarGraficaSEI(claveMunicipio) {
            $.ajax({
                url: 'filtrarGraficaSEI.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(response) {
                    const ctx3 = document.getElementById('graficaSEI');
                    if (graficaSEI) {
                        graficaSEI.destroy();
                    }
                    graficaSEI = new Chart(ctx3, {
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
                                    text: 'SITUACIÓN ECONÓMICA, SALUD Y VIVIENDA DE POBLACIÓNES EN MUNICIPIOS QUE SE AUTOADSCRIBEN COMO INDÍGENAS'
                                }
                            }
                        }
                    });
                }
            });
        }

        cargarGraficaSEI('');
        cargarTablaSEI('');
    });
</script>
<script>
    let graficaSEA;
    $("document").ready(function() {

        $('#filtrarSituacionAfro').change(function() {
            var claveMunicipio = $(this).val();
            cargarTablaSEA(claveMunicipio);
            cargarGraficaSEA(claveMunicipio);
        });

        function cargarTablaSEA(claveMunicipio) {
            $.ajax({
                url: 'filtrarTablaSEA.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(data) {
                    $('#tbody-table-responsive-servicios-afro').html(data);
                }
            });
        }

        function cargarGraficaSEA(claveMunicipio) {
            $.ajax({
                url: 'filtrarGraficaSEA.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(response) {
                    const ctx4 = document.getElementById('graficaSEA');
                    if (graficaSEA) {
                        graficaSEA.destroy();
                    }
                    graficaSEA = new Chart(ctx4, {
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
                                    text: 'SITUACIÓN ECONÓMICA, SALUD Y VIVIENDA DE POBLACIÓNES EN MUNICIPIOS QUE SE AUTOADSCRIBEN COMO AFROMEXICANOS'
                                }
                            }
                        }
                    });
                }
            });
        }

        cargarGraficaSEA('');
        cargarTablaSEA('');
    });
</script>