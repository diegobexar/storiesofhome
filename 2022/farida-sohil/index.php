
<!DOCTYPE HTML>
<html lang="en-US">
<!-- use this template for creating single participant page with audio or text and save: /year/participant/index.php -->
<?php
  $FirstName = 'Farida & Sohil';
  $FirstNameL = 'farida-sohil';
  $PageTitle = 'STORIES OF HOME - '.$FirstName;
  $Country = 'Afghanistan';


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
                                    <h1 class="info-code-title text-uppercase"><?php echo $FirstName; ?></h1>
                                    <p class="info-code-content"><?php echo $Country; ?></p>
                                </div>
                              <!--  <div class="info-code ">
                                    <p class="info-code-title"></p>
                                    <p class="info-code-content"></p>
                                </div> -->
                            </div>
                            <div class="single-photo"><img src="/2022/images/<?php echo $FirstNameL; ?>-1.jpg" /></div>
                        </div>
                        <div class="content-wrapper">
                            <?php include ('' . $FirstNameL .'.php'); ?>
                        </div>
                        <div class="clear"></div>
                        <p class="text-end fw-light fst-italic mt-2">Story by <strong>Carly Graf</strong>. Photos by <strong>Madeline Jorden</strong></p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <!--Footer-->
  <?php require '../../footer.php'; ?>
</html>
