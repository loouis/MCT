jQuery(document).ready(function(){

	// upon clicking a simple share buttons plus button
	jQuery('.ssbp-btn').click(function(event){

		// don't go the the href yet
		event.preventDefault();

        // ignore ellipsis and email popup
        if (jQuery(this).data("ssbp-site") == 'Ellipsis') {
            return true;
        }

		// collect and compile posted data to an array
		var data = {
			    action: 'ssbp_standard',
			    security : ssbpAjax.security,
			    title: jQuery(this).data("ssbp-title"),
			    url: jQuery(this).data("ssbp-url"),
			    site: jQuery(this).data("ssbp-site"),
			    href: jQuery(this).attr("href"),
			};

		// these share options don't need to have a popup
		if (data['site'] == 'Email' || data['site'] == 'Print' || data['site'] == 'Pinterest' || data['site'] == 'WhatsApp') {
			// not email popup button
			if (! jQuery(this).hasClass('ssbp-email-popup')) {
				// just redirect
				window.location.href = data['href'];
			}
		} else {

			// prepare popup window
			var width  = 575,
			    height = 520,
			    left   = (jQuery(window).width()  - width)  / 2,
			    top    = (jQuery(window).height() - height) / 2,
			    opts   = 'status=1' +
			             ',width='  + width  +
			             ',height=' + height +
			             ',top='    + top    +
			             ',left='   + left;

			// open the share url in a smaller window
		    window.open(data['href'], 'SSBP', opts);
		}

		// log the share via ajax
		jQuery.post(ssbpAjax.ajax_url, data, function(response) {console.log(response);	});
	});

	jQuery('.ssbp-wrap').removeClass('ssbp--state-hidden');
    jQuery('.ssbp-toggle-switch').fadeIn();

    // toggle switch
    jQuery('.ssbp-toggle-switch').on('click', function() {
  	  jQuery(this).parent().toggleClass('ssbp--state-hidden');
    });
});
