<script>
    let graficaSSI;
    $("document").ready(function() {

        $('#filtrarSSI').change(function() {
            var claveMunicipio = $(this).val();
            cargarTablaSSI(claveMunicipio);
            cargarGraficaSSI(claveMunicipio);
        });

        function cargarTablaSSI(claveMunicipio) {
            $.ajax({
                url: 'filtrarTablaSSI.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(data) {
                    $('#tbody-table-responsive-SSI').html(data);
                }
            });
        }

        function cargarGraficaSSI(claveMunicipio) {
            $.ajax({
                url: 'filtrarGraficaSSI.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(response) {
                    console.log(JSON.parse(response));
                    const ctx = document.getElementById('graficaSSI');
                    if (graficaSSI) {
                        graficaSSI.destroy();
                    }
                    graficaSSI = new Chart(ctx, {
                        type: 'bar',
                        data: JSON.parse(response),
                        options: {
                            indexAxis: 'y',
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
                }
            });
        }
        cargarGraficaSSI('');
        cargarTablaSSI('');
    });
</script>
<script>
    let graficaSSA;
    $("document").ready(function() {

        $('#filtrarSSA').change(function() {
            var claveMunicipio = $(this).val();
            cargarTablaSSA(claveMunicipio);
            cargarGraficaSSA(claveMunicipio);
        });

        function cargarTablaSSA(claveMunicipio) {
            $.ajax({
                url: 'filtrarTablaSSA.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(data) {
                    $('#tbody-table-responsive-SSA').html(data);
                }
            });
        }

        function cargarGraficaSSA(claveMunicipio) {
            $.ajax({
                url: 'filtrarGraficaSSA.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(response) {
                    console.log(JSON.parse(response));
                    const ctx = document.getElementById('graficaSSA');
                    if (graficaSSA) {
                        graficaSSA.destroy();
                    }
                    graficaSSA = new Chart(ctx, {
                        type: 'bar',
                        data: JSON.parse(response),
                        options: {
                            indexAxis: 'y',
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
                }
            });
        }
        cargarGraficaSSA('');
        cargarTablaSSA('');
    });
</script>