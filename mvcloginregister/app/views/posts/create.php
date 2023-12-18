<?php
   require APPROOT . '/views/includes/head_new.php';
?>

<?php
   require APPROOT . '/views/includes/header.php';
?>

<!-- container starts -->
<div class="container-fluid">
  <div class="row">

  <?php
   require APPROOT . '/views/includes/sidebar.php';
  ?>

  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <?php
   require APPROOT . '/views/includes/dashboard_title.php';
  ?>


  <!-- your content will be here -->
  <div class="container center">
    <h1>
        Create new post
    </h1>

    <form action="<?php echo URLROOT; ?>/posts/create" method="POST">
        <div class="form-item">
            <input type="text" name="title" placeholder="Title...">
            
            <span class="invalidFeedback">
                <?php echo $data['titleError']; ?>
            </span>
        </div>

        <div class="form-item">
            <textarea name="body" placeholder="Enter your post..."></textarea>
            
            <span class="invalidFeedback">
                <?php echo $data['bodyError']; ?>
            </span>
        </div>

        <button class="btn green" name="submit" type="submit">Submit</button>
    </form>
</div>
  




  <!-- end of content -->

  </main>

  



  </div>
</div>
<!-- container ends -->

<?php
   require APPROOT . '/views/includes/footer_new.php';
?>

