(function()
{
	/*----------  Init Other Functions  ----------*/

	$(document).ready(function()
	{
		fn_toggle();
		fn_placeholdit();
		fn_smooth_scroll();

		console.log('Functions Ready!');
	});

	$(window).on('change resize load', function()
	{
		
	});

	/*----------  Toggle Functions  ----------*/

	function fn_toggle()
	{
		var target;

		var $toggler = $('[data-fn-toggle]');

		if ($toggler.length > 0)
		{
			$toggler.off('click.toggle').on('click.toggle', function()
			{
				target = $(this).data('target');

				if ($(target).length > 0)
				{
					if ($(target).is(':visible'))
					{
						$(target).slideUp('fast');
						$(this).removeClass('open');
					}
					else
					{
						$(target).slideDown('fast');
						$(this).addClass('open');
					}
				}

				console.log('Initialized: fn_toggle();');

				return false;
			});
		}
	}

	/*----------  Smooth Scroll  ----------*/

	function fn_smooth_scroll()
	{
		var section;
		var $root = $('html, body');
		var $smooth = $('.smooth');

		if ($smooth.length > 0)
		{
			$smooth.off('click.smooth').on('click.smooth', function()
			{
				section = $.attr(this, 'href');
				
				if ($(section).length > 0)
				{
					$root.animate(
					{
						scrollTop: $(section).offset().top
					}, 1000, function () 
					{
						console.log('Reached to: ' + section);
					});
				}

				return false;
			});

			console.log('Initialized: fn_smooth_scroll();');
		}
	}

	/*----------  Placeholdit  ----------*/

	function fn_placeholdit()
	{
		/* <img data-placeholdit data-ph-dimension="" data-ph-text="" data-ph-txtcolor="" data-ph-bgcolor="" src="" class="img-responsive"/> */

		var placeholdit = $('[data-placeholdit], .placeholdit');

		if ($(placeholdit).length > 0)
		{
			var url = 'https://placehold.it';

			$(placeholdit).each(function()
			{
				var dimension = $(this).data('ph-dimension');
				var text = $(this).data('ph-text');
				var txt_color = $(this).data('ph-txtcolor');
				var bg_color = $(this).data('ph-bgcolor');
				var ex_class = $(this).data('ph-class');

				if ((dimension == '') || (dimension == null))
				{
					dimension = '500x500';
				}

				if ((bg_color == '') || (bg_color == null))
				{
					bg_color = 'aaa';
				}

				if ((txt_color == '') || (txt_color == null))
				{
					txt_color = 'f5f5f5';
				}

				if ((text == '') || (text == null))
				{
					text = 'Placeholder';
				}

				var src = url + '/' + dimension + '/' + bg_color + '/' + txt_color + '/?text=' + text;

				if ($(this).is('img'))
				{
					$(this).attr('src', src).addClass(ex_class);
				}
				else
				{
					var img = '<img src="' + src + '" alt="' + text + '" class="img-responsive ' + ex_class + '"/>';
					$(this).hide().after(img);
				}
			});
		}
	};
	
}).call(this);