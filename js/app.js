$( document ).ready( function () {
    Tabletop.init( { 
        key: '0Avy4Bvx3Cy0ZdEtWOUhVT1lEelNqQUpuc0d6Zm1pc0E',
        callback: showInfo,
        simpleSheet: true 
    } );
} );

function showInfo( data, tabletop ) {
    var source   = $( '#meet-template' ).html();
    var template = Handlebars.compile( source );

    $.each( tabletop.sheets( 'meet' ).all(), function( i, person ) {
        var html = template( person );
        $( '#meet-us' ).append( html );
    } );
}

$( document ).on( 'click', '.talks-open', function () {
	$( this ).parent().next( '.talks' ).toggle( function() {
   		$( this ).animate( { }, 500 );
   	} );
} );