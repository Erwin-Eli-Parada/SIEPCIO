<script>
    let graficaEducacionInd;
    $("document").ready(function() {

        $('#filtrarEducacionInd').change(function() {
            var claveMunicipio = $(this).val();
            cargarTablaEducacionInd(claveMunicipio);
            cargarGraficaEducacionInd(claveMunicipio);
        });

        function cargarTablaEducacionInd(claveMunicipio) {
            $.ajax({
                url: 'filtrarTablaEducacionInd.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(data) {
                    $('#tbody-table-responsive-educacion-ind').html(data);
                }
            });
        }

        function cargarGraficaEducacionInd(claveMunicipio) {
            $.ajax({
                url: 'filtrarGraficaEducacionInd.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(response) {
                    console.log(JSON.parse(response));
                    const ctx = document.getElementById('graficaEducacionInd');
                    if (graficaEducacionInd) {
                        graficaEducacionInd.destroy();
                    }
                    graficaEducacionInd = new Chart(ctx, {
                        type: 'pie',
                        data: JSON.parse(response),
                        options: {
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Población indígena menor de edad con acceso a la educación'
                                }
                            }
                        }
                    });
                }
            });
        }
        cargarGraficaEducacionInd('');
        cargarTablaEducacionInd('');
    });
</script>
<script>
    let graficaEducacionAfro;
    $("document").ready(function() {

        $('#filtrarEducacionAfro').change(function() {
            var claveMunicipio = $(this).val();
            cargarTablaEducacionAfro(claveMunicipio);
            cargarGraficaEducacionAfro(claveMunicipio);
        });

        function cargarTablaEducacionAfro(claveMunicipio) {
            $.ajax({
                url: 'filtrarTablaEducacionAfro.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(data) {
                    $('#tbody-table-responsive-educacion-afro').html(data);
                }
            });
        }

        function cargarGraficaEducacionAfro(claveMunicipio) {
            $.ajax({
                url: 'filtrarGraficaEducacionAfro.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(response) {
                    console.log(JSON.parse(response));
                    const ctx = document.getElementById('graficaEducacionAfro');
                    if (graficaEducacionAfro) {
                        graficaEducacionAfro.destroy();
                    }
                    graficaEducacionAfro = new Chart(ctx, {
                        type: 'pie',
                        data: JSON.parse(response),
                        options: {
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Población afromexicana menor de edad con acceso a la educación'
                                }
                            }
                        }
                    });
                }
            });
        }
        cargarGraficaEducacionAfro('');
        cargarTablaEducacionAfro('');
    });
</script>
<script>
    let graficaTransporteInd;
    $("document").ready(function() {

        $('#filtrarTransporteInd').change(function() {
            var claveMunicipio = $(this).val();
            cargarTablaTransporteInd(claveMunicipio);
            cargarGraficaTransporteInd(claveMunicipio);
        });

        function cargarTablaTransporteInd(claveMunicipio) {
            $.ajax({
                url: 'filtrarTablaTransporteInd.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(data) {
                    $('#tbody-table-responsive-transporte-ind').html(data);
                }
            });
        }

        function cargarGraficaTransporteInd(claveMunicipio) {
            $.ajax({
                url: 'filtrarGraficaTransporteInd.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(response) {
                    console.log(JSON.parse(response));
                    const ctx3 = document.getElementById('graficaTransporteInd');
                    if (graficaTransporteInd) {
                        graficaTransporteInd.destroy();
                    }
                    graficaTransporteInd = new Chart(ctx3, {
                        type: 'bar',
                        data: JSON.parse(response),
                        options: {
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Tipo de transporte de personas indígneas menores de edad con acceso a la educación'
                                }
                            }
                        }
                    });
                }
            });
        }
        cargarGraficaTransporteInd('');
        cargarTablaTransporteInd('');
    });
</script>
<script>
    let graficaTransporteAfro;
    $("document").ready(function() {

        $('#filtrarTransporteAfro').change(function() {
            var claveMunicipio = $(this).val();
            cargarTablaTransporteAfro(claveMunicipio);
            cargarGraficaTransporteAfro(claveMunicipio);
        });

        function cargarTablaTransporteAfro(claveMunicipio) {
            $.ajax({
                url: 'filtrarTablaTransporteAfro.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(data) {
                    $('#tbody-table-responsive-transporte-afro').html(data);
                }
            });
        }

        function cargarGraficaTransporteAfro(claveMunicipio) {
            $.ajax({
                url: 'filtrarGraficaTransporteAfro.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(response) {
                    console.log(JSON.parse(response));
                    const ctx3 = document.getElementById('graficaTransporteAfro');
                    if (graficaTransporteAfro) {
                        graficaTransporteAfro.destroy();
                    }
                    graficaTransporteAfro = new Chart(ctx3, {
                        type: 'bar',
                        data: JSON.parse(response),
                        options: {
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Tipo de transporte de personas afromexicanas menores de edad con acceso a la educación'
                                }
                            }
                        }
                    });
                }
            });
        }
        cargarGraficaTransporteAfro('');
        cargarTablaTransporteAfro('');
    });
</script>
<script>
    let graficaCarreraInd;
    $("document").ready(function() {

        $('#filtrarCarreraInd').change(function() {
            var claveMunicipio = $(this).val();
            cargarTablaCarreraInd(claveMunicipio);
            cargarGraficaCarreraInd(claveMunicipio);
        });

        function cargarTablaCarreraInd(claveMunicipio) {
            $.ajax({
                url: 'filtrarTablaCarreraInd.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(data) {
                    $('#tbody-table-responsive-carrera-ind').html(data);
                }
            });
        }

        function cargarGraficaCarreraInd(claveMunicipio) {
            $.ajax({
                url: 'filtrarGraficaCarreraInd.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(response) {
                    console.log(JSON.parse(response));
                    const ctx5 = document.getElementById('graficaCarreraInd');
                    if (graficaCarreraInd) {
                        graficaCarreraInd.destroy();
                    }
                    graficaCarreraInd = new Chart(ctx5, {
                        type: 'bar',
                        data: JSON.parse(response),
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
                }
            });
        }
        cargarGraficaCarreraInd('');
        cargarTablaCarreraInd('');
    });
</script>
<script>
    let graficaCarreraAfro;
    $("document").ready(function() {

        $('#filtrarCarreraAfro').change(function() {
            var claveMunicipio = $(this).val();
            cargarTablaCarreraAfro(claveMunicipio);
            cargarGraficaCarreraAfro(claveMunicipio);
        });

        function cargarTablaCarreraAfro(claveMunicipio) {
            $.ajax({
                url: 'filtrarTablaCarreraAfro.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(data) {
                    $('#tbody-table-responsive-carrera-afro').html(data);
                }
            });
        }

        function cargarGraficaCarreraAfro(claveMunicipio) {
            $.ajax({
                url: 'filtrarGraficaCarreraAfro.php',
                method: 'POST',
                data: {
                    claveMunicipio: claveMunicipio
                },
                success: function(response) {
                    console.log(JSON.parse(response));
                    const ctx5 = document.getElementById('graficaCarreraAfro');
                    if (graficaCarreraAfro) {
                        graficaCarreraAfro.destroy();
                    }
                    graficaCarreraAfro = new Chart(ctx5, {
                        type: 'bar',
                        data: JSON.parse(response),
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
                }
            });
        }
        cargarGraficaCarreraAfro('');
        cargarTablaCarreraAfro('');
    });
</script>