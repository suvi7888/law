
    <script type="text/javascript">
        var windowWidth = $(window).width(); if(windowWidth > 640){ 
            function ShowcaseLoading() {
                var ShowcaseCreated = false;
                isPhoneDevice = "ontouchstart" in document.documentElement;
                Showcase();

                $(window).on('load resize', function() {
                    if ($(this).width() < 1028) {
                        ShowcaseCreated = true;
                        $.fn.fullpage.destroy('all');
                    } else {
                        Showcase();
                    }
                });

                function Showcase() {
                    $('.showcase').each(function() {
                        var $this = $(this);
                        if (ShowcaseCreated === false) {
                            ShowcaseCreated = true;
                            $this.fullpage({
                                anchors: ['Home', 'Overview', 'OurStory', 'OurValue', 'OurSolution', 'OurSelectionBrand','CaseStudy', 'News', 'GetInTouch', 'Footer'],
                                navigation: true,
                                navigationPosition: 'left',
                                scrollBar: true,
                            });
                        }
                    });
                }
            }

            if ($('.showcase').length > 0) {
                ShowcaseLoading();
            }

        }
        
    </script>
    <script type="text/javascript">
        $(".fa-check").click(function() {
                $(this).parent().addClass("accepted");
        });
    </script>
