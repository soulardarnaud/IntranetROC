<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Intranet - Lycée Notre Dame du ROC</title>
        <link rel="icon" type="image/png" href="http://lycee-ndduroc.ovny85.atester.fr//images/design/favicon.png" />

        <!-- Bootstrap core CSS -->
        <link href="../../sb-admin/css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="../../sb-admin/css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="../../sb-admin/font-awesome/css/font-awesome.min.css">
        <!-- Page Specific CSS -->
        <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/flick/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
    </head>

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Notre Dame Du ROC</span>
                </button>
                <a class="navbar-brand" href="../../index.html">Intranet Lycée Notre Dame Du ROC</a>
            </div>

            <!-- Barre de navigation à gauche -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit"></i> Notre Dame Du ROC <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../NotreDameduRoc/Présentation/présentation.html">Présentation générale </a></li>
                            <li><a href="../../NotreDameduRoc/Règlements/règlements.html">Les règlements</a></li>
                            <li><a href="../../NotreDameduROC/Personnels/personnels.html">Les personnels (photos)</a></li>
                            <li><a href="../../Enseignants/Classe/liste.html">Photos et listes des élèves </a></li>                            <li><a href="../../NotreDameduRoc/Formations/formations.html">Les formations</a></li>
                            <li><a href="../../NotreDameduRoc/Batiments/plan.html">Plan du lycée</a></li>
                            <li><a href="../../NotreDameduRoc/Feuilles_Vertes/feuille_verte.html">Feuille verte et ses historiques</a></li>
                            <li><a href="../../NotreDameduRoc/Ouverture_Internationale/ouverture.html">L'ouverture à l'internationale</a></li>
                        </ul>
                    </li>                        
                    <!-- Informations à savoir -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-dashboard"></i> Informations à savoir <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../Informations_a_savoir/Matériel/matériel.html">Matériel</a></li>
                            <li><a href="../../Informations_a_savoir/Self/self.html">Self</a></li>
                            <li><a href="../../Informations_a_savoir/Absences/absences.html">Que faire en cas d'absences ?</a></li>
                            <li><a href="https://docs.google.com/spreadsheet/viewform?formkey=dDFVMHNkdTlVQ3lJc19UM29Ia1BSR3c6MQ">Ordre de mission</a></li>
                            <li><a href="../../Informations_a_savoir/SEPA/sepa.html">Mandat de prélèvement SEPA</a></li>
                        </ul>
                    </li>
                    <!-- Informatique -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-desktop"></i> Informatique <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="maintenance.html">Pannes Informatiques </a></li>
                            <li><a href="http://dex.ndduroc.com/labolangues">Réservation Labo de langues</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right navbar-user">
                    <!-- Documentation -->
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book"></i> Documentation <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="#">
                                    <a href="http://0851460a.esidoc.fr"> Esidoc</a>
                                    <a href="http://05serv-cdi/bcdiweb/bcdiweb.cgi/data"> BCDIWeb</a>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Enseignant -->
                    <li class="dropdown message-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Enseignant <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="#">
                                    <a href="../../Enseignants/Classe/liste.html">Photos et listes des élèves </a>
                                    <a href="http://www.scolinfo.net/">Notes Scolinfo </a>
                                    <a href="../../Enseignants/Fiches/fiches.html">Fiches à compléter </a>
                                    <a href="http://ndduroc.e-lyco.fr/">E-lyco </a>
                                    <a href="http://moodroc.ndduroc.com/moodle">Moodroc </a>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

        <!-- JavaScript -->
        <script src="../../sb-admin/js/jquery-1.10.2.js"></script>
        <script src="../../sb-admin/js/bootstrap.js"></script>
        <script src="../../sb-admin/js/jquery-ui.js"></script>


        <script>
            if (top.location != location) {
                top.location.href = document.location.href;
            }
            $(function() {
                window.prettyPrint && prettyPrint();
                $('#dp1').datepicker({
                    format: 'dd/mm/yyyy'
                });
                $('#dp2').datepicker();
                $('#dp3').datepicker();

                // disabling dates
                var nowTemp = new Date();
                var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

                var checkin = $('#dpd1').datepicker({
                    onRender: function(date) {
                        return date.valueOf() < now.valueOf() ? 'disabled' : '';
                    }
                }).on('changeDate', function(ev) {
                    if (ev.date.valueOf() > checkout.date.valueOf()) {
                        var newDate = new Date(ev.date)
                        newDate.setDate(newDate.getDate() + 1);
                        checkout.setValue(newDate);
                    }
                    checkin.hide();
                    $('#dpd2')[0].focus();
                }).data('datepicker');
                var checkout = $('#dpd2').datepicker({
                    onRender: function(date) {
                        return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                    }
                }).on('changeDate', function(ev) {
                    checkout.hide();
                }).data('datepicker');
            });
        </script>
        <script>var typeaheadSettings = {
                source: function(typeahead, query) {
                    /* put your ajax call here..
                     return $.get('/typeahead', { query: query }, function (data) {
                     return typeahead.process(data);
                     });
                     */
                    return ['above', 'alpha', 'asphalt', 'beta', 'bravo', 'delta', 'epsilon', 'gamma', 'zulu'];
                }
            };

            $('.typeahead').typeahead(typeaheadSettings); /* init first input */

            $('#btnAddRow').click(function() {
                var newRow = $('<div class="row"><input type="text" placeholder="Start typing.." class="typeahead" data-items="3"></div>');
                newRow.insertBefore('#addRow');
                $('.typeahead').trigger('added');

            });

            $('.typeahead').on('added', function() {
                $('.typeahead').typeahead(typeaheadSettings);
            });


        </script>

        <!-- Page Specific Plugins -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
        <script src="../../sb-admin/js/morris/chart-data-morris.js"></script>
        <script src="../../sb-admin/js/tablesorter/jquery.tablesorter.js"></script>
        <script src="../../sb-admin/js/tablesorter/tables.js"></script>

</body>
</html>
