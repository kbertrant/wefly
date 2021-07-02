$(document).ready(function(){
  $('#airport').DataTable({
  "processing": true,
  "serverSide": true,
  ajax: '/airport/list',
  columns: [
      { data: 'aeroportName', name: 'aeroportName' },
      { data: 'ville', name: 'ville' }
        ],order: [[0, 'desc']]
});
});