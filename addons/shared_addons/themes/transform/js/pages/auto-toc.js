$().ready(function() {
	var msie6 = $.browser.msie && $.browser.version < 7;
	var $tocMenu = $('#toc');

	if (!msie6) {
		var top = $tocMenu.offset().top - parseFloat($tocMenu.css('margin-top').replace(/auto/, 0));

		var y = $(this).scrollTop();
		if (y >= top) $tocMenu.addClass('top-fixed');
		else $tocMenu.removeClass('top-fixed');

		$(window).scroll(
			$.throttle(50, function() {
				var y = $(this).scrollTop();
				if (y >= top) $tocMenu.addClass('top-fixed');
				else $tocMenu.removeClass('top-fixed');
			})
		);
	}
	
	var $headers = $('#main-left-col').find('h2, h3'),
		$tocList = $('#toc ul');

	$topLink = $('<li id="toc-top" class="H2"><a href="#">Top &uarr;</a></li>');
	$tocList.prepend($topLink);
	$topLink.click(function() {
		$.scrollTo(0, 400);
		return false;
	});

	$headers.each(function(i, el) {
		var $el = $(el),
			headerText = $el.text(),
			tagType = $el.get(0).tagName,
			headerId = tagType + '_' + $el.html().toLowerCase().replace(/\s|:|\'|\.|&/g, '-');
		
		$el.prepend('<a id="' + headerId + '"></a>');
		
		var $tocLi = $('<li class="' + tagType+ '"><a href="#' + headerId + '">' + headerText + '</a></li>');
		if (!($.browser.msie && $.browser.version < 8)) {
			$tocLi.find('a').click(function() {
				if (!($.browser.msie && $.browser.version < 8)) {
					$.scrollTo($(this).attr('href'), 400);
					return false;
				}
			});
		}
		
		$tocList.append($tocLi);
	});
});