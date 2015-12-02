/*----------  Preloader  ----------*/

/**
 *
 * Include this file above your custom js (ex: app.js).
 *
 */

var $cnt_preloader = $('#cnt_preloader');
var $preloader = $('#preloader');

$(window).load(function()
{
	init_preloader();
});

$(window).on('beforeunload', function()
{
	show_preloader();
});

function show_preloader()
{
	if (($cnt_preloader.length > 0) && ($preloader.length > 0))
	{
		$preloader.fadeIn('fast');
		$cnt_preloader.fadeIn('fast');
	}
}

function init_preloader()
{
	if (($cnt_preloader.length > 0) && ($preloader.length > 0))
	{
		// show_preloader()

		setTimeout(function() 
		{
			$preloader.fadeOut("slow");

			setTimeout(function() 
			{
				$cnt_preloader.fadeOut("slow");
			}, 1000);
		}, 0);

		console.log('Initialized: init_preloader();');
	}
}