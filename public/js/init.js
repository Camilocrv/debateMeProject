// display individual button toolbar with click
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.fixed-action-btn');
  var instances = M.FloatingActionButton.init(elems, {
    direction: 'buttom',
    hoverEnabled: false
  });
});
//display complete toolbar class
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.fixed-action-btn');
  var instances = M.FloatingActionButton.init(elems, {
    toolbarEnabled: true
  });
});

function(id) {
  return 'a[href="#' + id + '"]';
}

M.toast({html: 'You must be logged'})
