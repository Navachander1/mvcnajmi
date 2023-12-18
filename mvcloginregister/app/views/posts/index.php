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
  <div class="container">
    <?php if(isLoggedIn()): ?>
        <a class="btn green" href="<?php echo URLROOT; ?>/posts/create">
            Create
        </a>

    <?php endif; ?>
    <?php foreach($data['posts'] as $post): ?>
        <div class="container-item">
            <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $post->user_id): ?>
                <a class="btn orange" href="<?php echo URLROOT . "/posts/update/" . $post->id ?>">
                    Update
                </a>

                <form action="<?php echo URLROOT . "/posts/delete/" . $post->id ?>" method="POST">
                    <input type="submit" name="delete" value="Delete" class="btn red">
                </form>

            <?php endif; ?>
            <h2>
                <?php echo $post->title ?>
            </h2>

            <h3>
                <?php echo 'Created on: ' .date('F j h:m', strtotime($post->created_at)) ?>
            </h3>

            <p>
                <?php echo $post->body ?>
            </p>
        </div>

    <?php endforeach; ?>
</div>





  <!-- end of content -->

  </main>

  



  </div>
</div>
<!-- container ends -->

<?php
   require APPROOT . '/views/includes/footer_new.php';
?>

