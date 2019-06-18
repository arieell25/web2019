$( "form" ).submit(function( event ) {
    if ( $( "#name" ).val() == '' ) {
      $( "span" ).text( "Please fill all" ).show().fadeOut( 1000 );
      event.preventDefault();
      return;
    }
   
    $( "span" ).show();
  });

  $( "form" ).submit(function( event ) {
    if ( $( "#code" ).val() == '' ) {
      $( "span" ).text( "Please fill all" ).show().fadeOut( 1000 );
      event.preventDefault();
      return;
    }
   
    $( "span" ).show();
  });

  $( "form" ).submit(function( event ) {
    if ( $( "#number" ).val() == '' ) {
      $( "span" ).text( "Please fill all" ).show().fadeOut( 1000 );
      event.preventDefault();
      return;
    }
   
    $( "span" ).show();
  });

  $( "form" ).submit(function( event ) {
    if ( $( "#provider" ).val() == '' ) {
      $( "span" ).text( "Please fill all" ).show().fadeOut( 1000 );
      event.preventDefault();
      return;
    }
   
    $( "span" ).show();
  });

  $( "form" ).submit(function( event ) {
    if ( $( "#date" ).val() == '' ) {
      $( "span" ).text( "Please fill all" ).show().fadeOut( 1000 );
      event.preventDefault();
      return;
    }
   
    $( "span" ).show();
  });



