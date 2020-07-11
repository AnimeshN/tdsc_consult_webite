<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://html5-templates.com/" />
    <title>TDSC @ IIT Bombay</title>
	<meta name="description" content="A minimalist Bootstrap theme by StartBootstrap. Contains everything you need to get started building your website. All you have to do is change the text and images.">
    <link href="css/bootstrap.min.css" rel="stylesheet">


<!-- puru added for news ticker START  -->
    <link href="news-bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="news-bootstrap/css/site.css" rel="stylesheet" type="text/css" />
<!-- puru added for news ticker END -->

</head>

<body>

<!-- news ticker -->
<div class="col-md-5">
    <div class="panel panel-default">
        <div class="panel-heading">
	     <span class="glyphicon glyphicon-list-alt"></span><b>News</b>
	</div>
	<div class="panel-body">
	    <div class="row">
		<div class="col-xs-12">
		   <ul class="demo2">

	    <?php 
	    	$fname = "news.txt";       // read news items from this file
		$fn = fopen($fname,"r");
                $line1 = fgets($fn);       // first line is number of items 
		$nitems = intval($line1);
		for ($x = 0; $x < $nitems; $x++) {
		// each entry has two lines, a date and the one line news item.
                    $line1 = fgets($fn);       // first line is date
                    $line2 = fgets($fn);       // second line is news
		    $line1 = "<b>" . $line1 . "</b>";
		    $line = nl2br($line1 . "" . $line2);  
	     ?>

		   <li class="news-item"><?php echo $line ?></li>

	    <?php   // finish for loop for all news items
	        }

		fclose($fn);

	    ?>
	           </ul>
		</div>
	    </div>
	</div>
	<div class="panel-footer">

	</div>
    </div>
</div>


<!-- news ticker end -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <!-- script for news ticker -->
    <script src="news-bootstrap/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
    <script src="news-bootstrap/scripts/jquery.bootstrap.newsbox.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });

		$(".demo2").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
			pauseOnHover: true,
			navigation: false,
            direction: 'down',
            newsTickerInterval: 2000,
            onToDo: function () {
                //console.log(this);
            }
        });

        $("#demo3").bootstrapNews({
            newsPerPage: 3,
            autoplay: false,

            onToDo: function () {
                //console.log(this);
            }
        });
    });

</script>

</body>

</html>
