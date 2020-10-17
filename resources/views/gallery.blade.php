<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,400italic'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/ekko-lightbox.min.css">
   <link rel="stylesheet" type="text/css" href="css/ekko-lightbox-dark.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="fonts/BloodThirst-GWZy.ttf">
    <title>images</title>
    <style>
        body{
            background-color: #000;
        }
    </style>
</head>

<body>

<header id="top">

	<div class="container">
    
        <div class="row">
        
            <div class="col-lg-4 col-md-12 site-title">
                <a style="margin-top: 8px; color: red; text-decoration: none; font-family: BloodThirst;" href="/">#ENDSARS</a>
                <h5 style="margin-top: 8px; color: red;">October 8, 2020</h5>
                
            </div> 
        </div>
        
        <div class="row">
            <div class="col-md-12">
            	<hr class="sigma-hr">
            </div>
        </div>

    </div>
    
</header>

<section id="gallery">

	<div class="container">

        <div class="row">
        
			<a href="images/tm-sigma-01.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 01">
            <img src="images/tm-sigma-01.jpg" alt="Image 1" class="img-fluid sigmapad col-lg-4 col-md-6 col-sm-6"></a>

			<a href="images/tm-sigma-02.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 02"
            	data-footer="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non nunc dictum.">
            <img src="images/tm-sigma-02.jpg" alt="Image 2" class="img-fluid sigmapad col-lg-4 col-md-6 col-sm-6"></a>

			<a href="images/tm-sigma-02.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 03">
			<img src="images/tm-sigma-03.jpg" alt="Image 3" class="img-fluid sigmapad col-lg-4 col-md-8 col-sm-12"></a>

			<a href="images/tm-sigma-04.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 04"
            	data-footer="Aenean et tortor nec odio tempor volutpat nec in dui. Etiam libero turpis, accumsan nec.">
			<img src="images/tm-sigma-04.jpg" alt="Image 4" class="img-fluid sigmapad col-lg-8 col-md-4 col-sm-6"></a>

			<a href="images/tm-sigma-05.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 05">
			<img src="images/tm-sigma-05.jpg" alt="Image 5" class="img-fluid sigmapad col-lg-4 col-md-4 col-sm-6"></a>
			
            <a href="images/tm-sigma-06.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 06">
            <img src="images/tm-sigma-06.jpg" alt="Image 6" class="img-fluid sigmapad col-lg-4" title="Bicycle"></a>
            

			<a href="images/tm-sigma-07.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 07">
			<img src="images/tm-sigma-07.jpg" alt="Image 7" class="img-fluid sigmapad col-sm-6" title="Walking"></a>

			<a href="images/tm-sigma-08.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 08">
			<img src="images/tm-sigma-08.jpg" alt="Image 8" class="img-fluid sigmapad col-sm-6" title="Camera"></a>
            
            <a href="images/tm-sigma-01.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 09">
			<img src="images/tm-sigma-01.jpg" alt="Image 9" class="img-fluid sigmapad col-lg-3 col-md-8 col-sm-12"></a>


			<a href="images/tm-sigma-02.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 10">
			<img src="images/tm-sigma-02.jpg" alt="Image 10" class="img-fluid sigmapad col-lg-3 col-md-4 col-sm-6"></a>

			<a href="images/tm-sigma-03.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 11">
			<img src="images/tm-sigma-03.jpg" alt="Image 11" class="img-fluid sigmapad col-lg-3 col-md-4 col-sm-6"></a>

			<a href="images/tm-sigma-04.jpg" data-toggle="lightbox" data-gallery="sigma-gallery" data-title="Image Title 12">
			<img src="images/tm-sigma-04.jpg" alt="Image 12" class="img-fluid sigmapad col-lg-3 col-sm-12"></a>

        </div>
        
    </div>

</section>


            

<footer>

	<div class="container">
    
    	<div class="row">
            <div class="col-md-12">
            	<hr class="sigma-hr">
            </div>
        </div>

        <div class="row">
        	<div class="sigma-copyright col-lg-8">
            	<p style=" font-size: 0.7em; font-weight: bold; color: red;">#ENDPOLICEBRUTALITY</p>
            </div>
            
            <div class="sigma-copyright col-lg-4 single-page-nav text-right">
            	<p style="float: right;"><a style="font-size: 0.7em;  color: #fff;" href="#top">Back to top</a></p>
            </div>
        </div>
        
    </div>   

</footer>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="js/ekko-lightbox.min.js"></script>
        <script src="js/jquery.singlePageNav.min.js"></script>
        <script>

            // Prevent console.log from generating errors in IE for the purposes of the demo
            if ( ! window.console ) console = { log: function(){} };

            // The actual plugin
            $('.single-page-nav').singlePageNav({
                offset: $('.single-page-nav').outerHeight(),
                filter: ':not(.external)',
                updateHash: true,
                beforeStart: function() {
                    console.log('begin scrolling');
                },
                onComplete: function() {
                    console.log('done scrolling');
                }
            });
			
			$(document).ready(function ($) {

				// delegate calls to data-toggle="lightbox"
				$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						always_show_close: true
					});
				});

			});
			
        </script>

</body>
</html>