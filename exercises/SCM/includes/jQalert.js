
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

  

 
  
 

  /*
$("document").ready(function() {
    var arrInput = [];
    arrInput = $('input');
    $("form").submit(function(event) {
        if (arrInput.val() === "ccc") {
            alert("dsdsdds");
        }
        if (arrInput.values() === "") {

            alert("ddddddddd");

        }

        alert("no fill");
        event.preventDefault();
    });

});




////ARIEL//
  $( "form" ).submit(function( event ) {
    if ( $( "#code" ).val() === "cor" ) {
      $( "span" ).text( "Validated..." ).show();
      return;
    }
   
    $( "span" ).text( "Not valid!" ).show().fadeOut( 1000 );
    event.preventDefault();
  });

   $( "form" ).submit(function( event ) {
    if ( $( "#number" ).val() === "1" ) {
      $( "span" ).text( "Validated..." ).show();
      return;
    }
   
    $( "span" ).text( "Not valid!" ).show().fadeOut( 1000 );
    event.preventDefault();
  });

*/
