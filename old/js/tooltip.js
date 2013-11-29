    /**
    * Tooltip top
    */
    $( "#tooltip-top" ).tooltip({
    position: {
    my: "center bottom-15",
    at: "center top",
    using: function( position, feedback ) {
    $( this ).css( position );
    $( "<div>" )
    .addClass( "arrow bottom" )
    .addClass( feedback.vertical )
    .addClass( feedback.horizontal )
    .appendTo( this );
    }
    }
    });
    /**
    * Tooltip right
    */
    $( "#tooltip-right" ).tooltip({
    position: {
    my: "left+15 left",
    at: "right center",
    using: function( position, feedback ) {
    $( this ).css( position );
    $( "<div>" )
    .addClass( "arrow left" )
    .addClass( feedback.vertical )
    .addClass( feedback.horizontal )
    .appendTo( this );
    }
    }
    });
    /**
    * Tooltip left
    */
    $( "#tooltip-left" ).tooltip({
    position: {
    my: "right-15 center",
    at: "left center",
    using: function( position, feedback ) {
    $( this ).css( position );
    $( "<div>" )
    .addClass( "arrow right" )
    .addClass( feedback.vertical )
    .addClass( feedback.horizontal )
    .appendTo( this );
    }
    }
    });
    /**
    * Tooltip bottom
    */
    $( "#tooltip-bottom" ).tooltip({
    position: {
    my: "center top+15",
    at: "center bottom",
    using: function( position, feedback ) {
    $( this ).css( position );
    $( "<div>" )
    .addClass( "arrow top" )
    .addClass( feedback.vertical )
    .addClass( feedback.horizontal )
    .appendTo( this );
    }
    }
    });