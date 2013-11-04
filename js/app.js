var storage = Tabletop.init( { 
    key: config.key,
    wait: true
} );

var Conference = Backbone.Model.extend( {
    idAttribute: 'name',
    tabletop: {
        instance: storage,
        sheet: 'meet'
    },
    sync: Backbone.tabletopSync
} );

var ConferenceCollection = Backbone.Collection.extend( {
    model: Conference,
    tabletop: {
        instance: storage,
        sheet: 'meet'
    },
    comparator: function ( conference ) {
        return conference.get( 'name' );
    },
    sync: Backbone.tabletopSync
} );

var PeopleView = Backbone.View.extend( {
    tagname: 'div',
    template: _.template( $( '#people-template' ).html() ),
    events: {
        'click .talks-open': 'openTalks'
    },
    openTalks: function( e ) {
        $( e.target ).parent().next( '.talks' ).toggle( function() {
            $( this ).animate( { }, 500 );
        } );
    },
    render: function() {
        $( this.el ).html( this.template( { people: this.model.toJSON() } ) );
        return this;
    }
} );

var HeaderView = Backbone.View.extend( {
    tagname: 'div',
    template: _.template( $( '#header-template' ).html() ),
    render: function() {
        $( this.el ).html( this.template( { config: config } ) );
        return this;
    }
} );

$( document ).ready( function () {
    document.title = "The Washington Post at " + config.conference;
    showHeader();
    var conference = new ConferenceCollection();
    conference.fetch( { success: showPeople } );
} );

function showPeople( conference ) {
    var peopleview = new PeopleView( { model: conference } );
    $( '#people' ).append( peopleview.render().el );
}

function showHeader() {
    var headerview = new HeaderView();
    $( '#header' ).append( headerview.render().el );
}