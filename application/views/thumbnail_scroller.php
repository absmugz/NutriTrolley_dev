<div class="container">
    <div class="col-md-12">


        <div class="well-none">
            <div id="myCarousel" class="carousel slide">

                <!-- Carousel items -->
                <div class="carousel">
                    <div class="carousel-inner">

                        <?php
                        $open = 0;
                        $close = 1;
                        $active = 0;
                        $didClose = false;
                        $caseStudies = array("Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo");
                        foreach ($caseStudies as $caseStudy) {



                            $activeCss = "";

                            if (($open) % 4 == 0) {
                                if ($active == 0)
                                    $activeCss = " active";
                                echo '<div class="item' . $activeCss . '">';
                            }
                            ?>



                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a></div>

                            <?php
                            if (($close) % 4 == 0) {
                                echo "</div>";
                                $didClose = true; // Maybe the carousel has less than 4 items ...
                            }

                            $open++;
                            $close++;
                            $active++;
                        }
                        if ($didClose == false)
                            echo "</div></div>"; // If has less than 4 items in the carousel close the tags.
                        ?>

                    </div><!--/.caroussel-inner -->

                    <!--/carousel-inner-->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left fa-4"></i></a>

                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right fa-4"></i></a>
                </div>
                <!--/myCarousel-->
            </div>
            <!--/well-->
        </div>
    </div>
</div>














