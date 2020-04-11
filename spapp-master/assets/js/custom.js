//connecting main html index file with with views
$(document).ready(function() {
//changing header height for sections
  $("main#spapp > section").height($(document).height() - 60);

  var app = $.spapp({pageNotFound : 'error_404'}); // initialize

  // define routes
  //view_1
  app.route({
    view: 'view_1',
    load:"view_1.html"
  });
//view_2
  app.route({view: 'countries', load: 'countries.html' });
  //view_3
  
  app.route({view: 'charts', load: 'charts.html' });

  // run app
  app.run();
  


});