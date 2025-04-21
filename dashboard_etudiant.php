<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calendrier Aligné</title>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
        
</head>
<body>
    <div id='calendar'></div>
    <div class="Crud">
            <div class="présence">
                <span class="nb_pré">10</span>
                <p>Présences</p>
            </div>
      
            <div class="abs_jus">
                <span class="nb_pré">2</span>
                <p>Absences justifiées</p>
            </div>
      
            <div class="abs_njus">
                <span class="nb_pré">3</span>
                <p>Absences non justifiées</p>
            </div>
    </div>
    <div class="table">
        <table>
            <tr>
                <th>Date</th>
                <th>Module</th>
                <th>Enseignant</th>
                <th>Horaire</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>15/04/2025</td>
                <td>php</td>
                <td>Dr.Walid bennani</td>
                <td>8.30-10.30</td>
                <td class="status non-justifie"><a href="justification.php">abs non justifié</a></td>
            </tr>
            <tr>
                <td>15/04/2025</td>
                <td>php</td>
                <td>Dr.Walid bennani</td>
                <td>8.30-10.30</td>
                <td class="status justifie">abs justifié</td>  
            </tr>
            <tr>
                <td>15/04/2025</td>
                <td>php</td>
                <td>Dr.Walid bennani</td>
                <td>8.30-10.30</td>
                <td class="attend">en attend</td>  
            </tr>
            <tr>
                <td>15/04/2025</td>
                <td>php</td>
                <td>Dr.Walid bennani</td>
                <td>8.30-10.30</td>
                <td class="présente">présente</td>  
            </tr>



        </table>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/locales/fr.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendar = new FullCalendar.Calendar(document.getElementById('calendar'), {
                initialView: 'dayGridMonth',
                locale: 'fr',
                headerToolbar: {
                    left: 'prev',
                    center: 'title',
                    right: 'next'
                },
                fixedWeekCount: false,
                height: 'auto',
                dayCellContent: function(info) {
                    // Format personnalisé pour un alignement parfait
                    return { html: `<div class="day-number">${info.dayNumberText}</div>` };
                }
            });
            calendar.render();
        });
    </script>
</body>
</html>