<script type="text/javascript">
        // Create a clone of the menu, right next to original.
        $('.menu').addClass('original').clone().insertAfter('.menu').addClass('cloned').css('position','fixed').css('top','0').css('transition','all 3s ease').css('margin-top','0').css('z-index','500').removeClass('original').hide();

        scrollIntervalID = setInterval(stickIt, 10);
					
        function stickIt() {

          var orgElementPos = $('.original').offset();
          orgElementTop = orgElementPos.top;     

          if ($(window).scrollTop() >= (orgElementTop)) {
            // scrolled past the original position; now only show the cloned, sticky element.

            // Cloned element should always have same left position and width as original element.     
            orgElement = $('.original');
            coordsOrgElement = orgElement.offset();
            leftOrgElement = coordsOrgElement.left;  
            widthOrgElement = orgElement.css('width');
            $('.cloned').css('left',leftOrgElement+'px').css('top',75).css('width',widthOrgElement).show();
            $('.original').css('visibility','hidden');
			
			/* suvi edit for padding-top */
			$('#about-us').css('padding-top','100px');
			$('#history').css('padding-top','100px');
			$('#vision').css('padding-top','100px');
			$('#corporate-value').css('padding-top','100px');
			$('#innovation').css('padding-top','100px');
			$('#business').css('padding-top','70px');
			$('#management').css('padding-top','70px');
			$('#awards').css('padding-top','100px');
			$('#csr').css('padding-top','100px');
			$('#safety').css('padding-top','100px');
			
			$('#report').css('padding-top','100px');
			
          } else {
			// not scrolled past the menu; only show the original menu.
            $('.cloned').hide();
            $('.original').css('visibility','visible');
			
			/* suvi edit for padding-top */
			$('#about-us').css('padding-top','0');
			$('#history').css('padding-top','0');
			$('#vision').css('padding-top','0');
			$('#corporate-value').css('padding-top','50px');
			$('#innovation').css('padding-top','20px');
			$('#business').css('padding-top','20px');
			$('#management').css('padding-top','20px');
			$('#awards').css('padding-top','50px');
			$('#csr').css('padding-top','50px');
			$('#safety').css('padding-top','20px');
			
			$('#report').css('padding-top','20px');
			
          }
        }
		stickIt();
    </script>
    <script type="text/javascript">
        $('.popup-player').magnificPopup({
            disableOn: 400,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false,
            iframe: {
                markup: '<div class="mfp-iframe-scaler">'+
                        '<div class="mfp-close"></div>'+
                        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                      '</div>',

                srcAction: 'iframe_src',
                }
        });
    </script>