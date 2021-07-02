$(document).ready(function(){
  $('#compagnie').DataTable({
  "processing": true,
  "serverSide": true,
  ajax: '/compagnie/list',
  columns: [
      { data: 'comName', name: 'comName' },
      { data: 'comLogo', name: 'comLogo' }
        ],order: [[0, 'desc']]
});
});