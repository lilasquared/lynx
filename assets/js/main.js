var JDOC = $(document);
JDOC.ready(function() {
  $('#problemTabs').on('click', 'button', loadProblemTypeSettings);
});

function loadProblemTypeSettings () {
  var problemType = $(this).data().problemtype;
  // $.getJSON('/Problem/Settings' + problemType, function() {

  // });
  $('#problemModal .modal-body').html(problemType);
}