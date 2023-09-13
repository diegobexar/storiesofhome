
<!DOCTYPE HTML>
<html lang="en-US">
<!-- use this template for creating single participant page with audio or text and save: /year/participant/index.php -->
<?php
  $FirstName = 'esther';
  $PageTitle = 'STORIES OF HOME - '.$FirstName;
  $Country = 'Haiti'; //Democratic Republic of Congo<br />Burundi


?>
<?php require '../../header.php'; ?>
<?php require '../../menu.php'; ?>

    <div id="content" class="site-content">
        <div class="content-1140 center-relative bottom-100">
            <div class="center-relative clear">
                <div class="entry-content">
                    <div class="top-content">
                    </div>
                    <div class="content-970 center-relative">
                        <div class="story-item-info">
                            <div class="item-info-content">
                                <div class="info-code text-end"">
                                    <h1 class="info-code-title text-uppercase" style="line-height:0;"><?php echo $FirstName; ?></h1>
                                    <p class="info-code-content long-country"><?php echo $Country; ?></p>
                                </div>
                              <!--  <div class="info-code ">
                                    <p class="info-code-title"></p>
                                    <p class="info-code-content"></p>
                                </div> -->
                            </div>
                            <div class="single-photo"><img src="/2023/images/<?php echo $FirstName; ?>-5.jpg" /></div>
                        </div>
                        <div class="content-wrapper">
                            <?php include ('' . $FirstName .'.php'); ?>
                        </div>
                        <div class="clear"></div>
                        <p class="text-end fw-light fst-italic mt-2">Story and photos by <strong>Carly Graf</strong></p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <!--Footer-->
  <?php require '../../footer.php'; ?>
</html>
