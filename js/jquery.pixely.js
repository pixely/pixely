var nav = responsiveNav(".nav-collapse", { animate: false, openPos: 'static' });

   function getRandomInt (min, max) {
    	return Math.floor(Math.random() * (max - min + 1)) + min;
	}

	function round_to_grid( num , ceil ){

		if ( ceil == true )
			return (30*Math.ceil(num/30));
		else
			return (30*Math.floor(num/30));

	}

    function insert_grid( $el ){

		var grid = '';

		if( $el.length == 0 ){
			return false;
		}

		grid += '<div id="grid" class="grid-outer">';

    	for( var i = 1; i <=12; i++ ){


			var rand_h = round_to_grid( Math.random() * 160 );
			var rand_w = round_to_grid( Math.random() * 160 );

    		grid += '<div class="grid-level grid-level-'+i+' grid-type-'+getRandomInt(1,12)+' grid-opacity-'+getRandomInt(1,10)+' grid-timing-'+i+' grid-delay-'+getRandomInt(1,10)+'" style="background-position: '+ rand_w +'px '+ rand_h +'px;"></div>';

		}

    	grid += '</div>';

        $el.prepend( grid );

        grid_breakpoint = $( 'header.banner' ).height();
	    grid_height = $( 'header.banner' ).height();
    }


	function nav_transition(){

		alert('nav_transition');

		var window_top = $window.scrollTop();

		if( window_top >= 0 ){

    		var nPos = (-window_top) + mPos;
    	}else{
			var mPos = 0;
    	}


		if( window_top <= grid_breakpoint && grid_mode == 'n' ){

	    	grid_mode = 'm';

    	}else if ( window_top >= grid_breakpoint && grid_mode == 'm' ){

    	
	    }


	}

$(function(){

	insert_grid( $( '.home-hero .cover' ) );

	$( '.skill' ).hover( function(){
		$( '.frame' ).addClass('fade');
		$( '.frame.' + $(this).data('frame') ).removeClass('fade');
	},
	function(){
		$( '.frame' ).removeClass('fade');
	});
});