require.config({
	baseUrl: '//cdnjs.cloudflare.com/ajax/libs/qoopido.js/3.5.3'
});

;(function(window, document, undefined) {
	require([ 'base' ], function() {
		require([ 'component/remux' ], function(remux) {
			'use strict';

			var fontsize = document.getElementById('fontsize'),
				layout   = document.getElementById('layout');

			remux
				.on('statechanged', function(event, state) {          
					fontsize.innerText = state.fontsize + 'px';
					layout.innerText   = state.layout;
				})
				.addLayout({
					mobile: { width: 480, base: 16, min: 10, max: 20 },
					desktop: { width: 800, base: 16, min: 12, max: 48 }
				});
		});
	});
}(window, document));