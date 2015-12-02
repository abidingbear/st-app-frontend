/*----------  Global Variables  ----------*/

var w_width;
var w_height;

/*----------  Document Ready  ----------*/

$(document).ready(function()
{
	w_width = $(window).width();
	w_height = $(window).height();

	setTimeout(init_custom_scroll, 300);

	init_icheck();

	modal_handler();
	navbar_handler();
	group_chat_handler();

	console.log('Ready');
});

/*----------  Window Events  ----------*/

$(window).on('load change resize', function()
{
	w_width = $(window).width();
	w_height = $(window).height();

	navbar_handler();

	console.log('Window Loaded/Updated');
});

/*----------  Main Navbar Handler  ----------*/

function navbar_handler()
{
	var $cnt_main_nav = $('#cnt_main_nav');

	if ($cnt_main_nav.length > 0)
	{
		var $btn_open_menu = $('#btn_open_menu');
		var $btn_close_menu = $('#btn_close_menu');
		var $btn_close_window = $('#btn_close_window');

		var nav_footer_height = $cnt_main_nav.find('.nav-footer').innerHeight();
		var height = parseInt((w_height - $('#cnt_nav_header').innerHeight()) - 1);

		$cnt_main_nav.css(
		{
			paddingBottom : nav_footer_height + 'px',
			height: height + 'px'
		});

		if (($btn_open_menu.length > 0) && ($btn_close_menu.length > 0) && ($btn_close_window.length > 0))
		{
			$btn_open_menu.off('click').on('click', function()
			{

				if (!$cnt_main_nav.is(':visible'))
				{
					$cnt_main_nav.fadeIn('fast', function()
					{
						nav_footer_height = $cnt_main_nav.find('.nav-footer').innerHeight();
						height = parseInt((w_height - $('#cnt_nav_header').innerHeight()) - 1);

						$cnt_main_nav.css(
						{
							paddingBottom : nav_footer_height + 'px',
							height: height + 'px'
						})
					});

					$('body').css('overflow', 'hidden');

					$btn_close_window.fadeOut('fast', function()
					{
						$btn_close_menu.fadeIn('fast');
					});
				}
				else
				{
					$('body').css('overflow', '');

					$cnt_main_nav.fadeOut('fast');

					$btn_close_menu.fadeOut('fast', function()
					{
						$btn_close_window.fadeIn('fast');
					});
				}

				return false;
			});

			$btn_close_menu.off('click').on('click', function()
			{
				$btn_open_menu.trigger('click');

				return false;
			});;
		}

		console.log('Initialized: navbar_handler();');
	}
}

/*----------  Init Custom Scroll  ----------*/

function init_custom_scroll()
{
	var $cnt_custom_scroll = $('.cnt_custom_scroll');

	if ($cnt_custom_scroll.length > 0)
	{
		$cnt_custom_scroll.each(function()
		{
			var axis = $(this).data('mcs-axis');

			if (axis === '')
			{
				axis = 'y';
			}

			$(this).mCustomScrollbar(
			{
				axis : axis
			})
		});

		console.log('Initialized: init_custom_scroll();');
	}
}

/*----------  Group Chat Handler  ----------*/

function group_chat_handler()
{
	var blocks_total_width = null;
	var $cnt_users_blocks = $('#cnt_users_blocks');

	if ($cnt_users_blocks.length > 0)
	{
		var $user_block = $cnt_users_blocks.find('.user-block');

		if ($user_block.length > 0)
		{
			$user_block.each(function()
			{
				var single_block_width = $(this).innerWidth();

				blocks_total_width += single_block_width;
			});

			setTimeout(function()
			{
				$cnt_users_blocks.css('width', blocks_total_width + 'px');
			}, 200);
		}

		console.log('Initialized: group_chat_handler();');
	}
}

/*----------  Init iCheck  ----------*/

function init_icheck()
{
	var $icheck = $('.icheck');

	if ($icheck.length > 0)
	{
		$icheck.iCheck(
		{
			checkboxClass : 'icheckbox_minimal',
			radioClass : 'iradio_minimal',
			increaseArea : '20%'
		});

		console.log('Initialized: init_icheck();');
	}
}

/*----------  Modals Handler  ----------*/

function modal_handler()
{
	var $modal = $('.modal');

	if ($modal.length > 0)
	{
		$modal.each(function()
		{
			$(this).on('show.bs.modal', function()
			{
				if ($('#cnt_main_nav').is(':visible'))
				{
					$('#btn_open_menu').trigger('click');
				}
			});
		});

		console.log('Initialized: modal_handler();');
	}
}