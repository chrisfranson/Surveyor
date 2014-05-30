
$().ready(function() {

	$('a').live('click', function() {
		var $a = $(this),
			href = $a.attr('href'),
			trackHref = (href) ? href.replace('http://tobwis.org', '').toLowerCase() : '#',
			types = ['pdf', 'doc', 'ppt', 'xls', 'zip'];

		if (trackHref == '#' || trackHref == '') {
			return true; // remove this if we want to track AJAX links
			trackHref = 'Class = ' + $a.attr('class') + ', Text = ' + $a.text();
		}

		$.each(types, function(i, v) {
			if (trackHref.indexOf('.' + v) > -1) {
				_gaq.push(['_trackPageview', trackHref]);
				return false; // exit the loop
			}
		});
	});
	
	var $siteSearch = $('#site-search');
	setTimeout(function() {
		if ($siteSearch.val() != '') $siteSearch.addClass('active');
	}, 500);
	$siteSearch.bind('focus blur mouseenter mouseleave', function() {
		if ($siteSearch.val() == '') $siteSearch.removeClass('active');
		else $siteSearch.addClass('active');
	});
	
	$("ul.sf-menu").supersubs({
		minWidth:    12,   // minimum width of sub-menus in em units
		maxWidth:    27,   // maximum width of sub-menus in em units
		extraWidth:  1     // extra width can ensure lines don't sometimes turn over
	                           // due to slight rounding differences and font-family
	}).superfish({
		delay: 200,
		autoArrows: false
	});
	
	$('ul.sf-menu li').find('li:last').css({'padding-bottom': '.4em'});

	preloadImages({
		imgDir: '/includes/global/',
		imgFormat: '',
		imgContainer: 'preload-container'
	}, ['site-nav/logo-on.png', 'footer/map-color.jpg']);
	
	$('a#home-button').hover(
		function() {
			$(this).find('img').attr('src', function(index, attr) { return attr.replace('off.png', 'on.png'); });
		},
		function() {
			$(this).find('img').attr('src', function(index, attr) { return attr.replace('on.png', 'off.png'); });
		}
	);
	
	$('a.gmap-link').hover(
		function() {
			$(this).find('img').attr('src', function(index, attr) {
				return attr.replace('tan', 'color');
			});
		},
		function() {
			$(this).find('img').attr('src', function(index, attr) {
				return attr.replace('color', 'tan');
			});
		}
	);

});

function preloadImages(config, fileNames) {
  for (var x = 0; x < fileNames.length; x++) {
    $("<img>").attr({
      id: fileNames[x],
      src: config.imgDir + fileNames[x] + config.imgFormat
    }).appendTo("#" + config.imgContainer).css({ display: "none" });
  }
};


function getParams(string) {
	var urlParams = {},
		e,
        a = /\+/g,  // Regex for replacing addition symbol with a space
        r = /([^&=]+)=?([^&]*)/g,
        d = function (s) { return decodeURIComponent(s.replace(a, " ")); },
        q = (string) ? string : window.location.search.substring(1);

    while (e = r.exec(q))
       urlParams[d(e[1])] = d(e[2]);

    return urlParams;
}
