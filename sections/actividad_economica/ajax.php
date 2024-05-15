<script>
    let graficaAEI;
    $("document").ready(function() {

        $('#filtrarAEI').change(function() {
            var claveMunicipio = $(this).val();
            cargarTablaAEI(claveMunicipio);
            cargarGraficaAEI(claveMunicipio);
        });

        function cargarTablaAEI(claveMunicipio) {
            $.ajax({
                url: 'filtrarTablaAEI.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(data) {
                    $('#tbody-table-responsive-AEI').html(data);
                }
            });
        }

        function cargarGraficaAEI(claveMunicipio) {
            $.ajax({
                url: 'filtrarGraficaAEI.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(response) {
                    console.log(JSON.parse(response));
                    const ctx = document.getElementById('graficaAEI');
                    if (graficaAEI) {
                        graficaAEI.destroy();
                    }
                    graficaAEI = new Chart(ctx, {
                        type: 'bar',
                        data: JSON.parse(response),
                        options: {
                            indexAxis: 'y',
                            scales: {
                                y: {
                                    beginAtZero: true,
                                }
                            },
                            responsive: true,
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Actividades económicas realizadas por personas autoadscritas indígenas'
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
        cargarGraficaAEI('');
        cargarTablaAEI('');
    });
</script>
<script>
    let graficaAEA;
    $("document").ready(function() {

        $('#filtrarAEA').change(function() {
            var claveMunicipio = $(this).val();
            cargarTablaAEA(claveMunicipio);
            cargarGraficaAEA(claveMunicipio);
        });

        function cargarTablaAEA(claveMunicipio) {
            $.ajax({
                url: 'filtrarTablaAEA.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(data) {
                    $('#tbody-table-responsive-AEA').html(data);
                }
            });
        }

        function cargarGraficaAEA(claveMunicipio) {
            $.ajax({
                url: 'filtrarGraficaAEA.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(response) {
                    console.log(JSON.parse(response));
                    const ctx = document.getElementById('graficaAEA');
                    if (graficaAEA) {
                        graficaAEA.destroy();
                    }
                    graficaAEA = new Chart(ctx, {
                        type: 'bar',
                        data: JSON.parse(response),
                        options: {
                            indexAxis: 'y',
                            scales: {
                                y: {
                                    beginAtZero: true,
                                }
                            },
                            responsive: true,
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Actividades económicas realizadas por personas autoadscritas afromexicanas'
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
        cargarGraficaAEA('');
        cargarTablaAEA('');
    });
</script>