<!-- puru added for news ticker START  -->
<link href="news-bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="news-bootstrap/css/site.css" rel="stylesheet" type="text/css" />
    <script src="news-bootstrap/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
    <script src="news-bootstrap/scripts/jquery.bootstrap.newsbox.js" type="text/javascript"></script>
<!-- puru added for news ticker END -->


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