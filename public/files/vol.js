$(document).ready(function(){
  $('#vol').DataTable({
  "processing": true,
  "serverSide": true,
  ajax: '/vol/list',
  columns: [
      { data: 'numeroVol', name: 'numeroVol' },
      { data: 'jourDepart', name: 'jourDepart' },
      { data: 'jourArrivee', name: 'jourArrivee' },
      { data: 'heureDepart', name: 'heureDepart' },
      { data: 'heureArrivee', name: 'heureArrivee' },
      { data: 'idAirportDepart', name: 'idAirportDepart' },
      { data: 'idAirportArrivee', name: 'idAirportArrivee' },
      { data: 'nbrePassagers', name: 'nbrePassagers' }
        ],order: [[0, 'desc']]
});
});