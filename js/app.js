var storage = Tabletop.init( { 
	key: '0Avy4Bvx3Cy0ZdEtWOUhVT1lEelNqQUpuc0d6Zm1pc0E',
	wait: true
} );

var Meet = Backbone.Model.extend( {
	idAttribute: 'name',
	tabletop: {
		instance: storage,
		sheet: 'meet'
	},
	sync: Backbone.tabletopSync
} );

var MeetCollection = Backbone.Collection.extend( {
	model: Meet,
	tabletop: {
		instance: storage,
		sheet: 'meet'
	},
	sync: Backbone.tabletopSync
} );

var MeetView = Backbone.View.extend( {
	tagname: 'div',
	template: _.template( $( '#meet-template' ).html() ),
	render: function() {
		$( this.el ).html( this.template( { people: this.model.toJSON() } ) );
		return this;
	}
} );

$( document ).ready( function () {
	var meet = new MeetCollection();
	meet.fetch( { success: showInfo } );
} );

function showInfo( meet ) {
	var meetview = new MeetView( { model: meet } );
	$( '#meet-us' ).append( meetview.render().el );
}

