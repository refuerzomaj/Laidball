<?php include('include/header.php');?>
    <!-- Header -->
	
    <section>
       
	   <!-- Left Sidebar -->
<?php include('include/sidebar.php');?>
        <!-- #END# Left Sidebar -->

        
    </section>

    <div id="content">
        <!-- Content will be loaded here -->
    </div>

    <script>
        $(document).ready(function() {
            // Initial page load
            loadPage('dashboard.php');

            // Handle navigation click event
            $(document).on('click', '.nav-link', function(e) {
                e.preventDefault();
                var page = $(this).data('page');
                loadPage(page);
            });

            // Handle links within loaded content
            $(document).on('click', '#content a', function(e) {
                e.preventDefault();
                var href = $(this).attr('href');
                loadPage(href);
            });

            // Handle navigation click event
            /*$('.nav-link').click(function(e) {
                e.preventDefault();
                var page = $(this).data('page');
                loadPage(page);
            });*/

            function loadPage(page) {
                $('.page').removeClass('current-page');
                $('#' + page).addClass('current-page');

                $.ajax({
                    url: page,
                    method: 'GET',
                    success: function(data) {
                        $('#content').html(data);
                    },
                    error: function() {
                        $('#content').html('<p>Error loading the page.</p>');
                    }
                });
            }
        });
    </script>

    <!-- Additional pages -->
    <div id="page1" class="page"></div>
    <div id="page2" class="page"></div>
    <div id="page3" class="page"></div>
    <div id="page4" class="page"></div>
    <div id="page5" class="page"></div>
    <!-- Add more divs for additional pages -->
<?php include'include/footer.php';?>
	
    