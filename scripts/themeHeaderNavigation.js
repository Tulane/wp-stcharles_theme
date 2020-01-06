(function( $ ) {

  //On Load...
  $( window ).load(function() {
  
    //Search for Header Navigation
    $('.header').each(function() {
      var headerContent = this;
      $(headerContent).themeHeaderNavigation();
    });

  });

  
  //Header Navigation Functions
  $.fn.themeHeaderNavigation = function() {  
    
  	//Define Navigation areas
    var headerNavigation = $(this),
        navigationToggle  = $('#header_menu_toggle');
    
    //On click, toggle "navigationOpen" Class
    navigationToggle.on('click', function(){
      headerNavigation.toggleClass('navigationOpen');
    });
    
    //On Screen resize, remove "navigationOpen" Class
    $( window ).resize(function() {
      headerNavigation.removeClass('navigationOpen');
    });
    
  };

})( jQuery );
