<?php include 'inc/default_header.php'; ?>
<div class="rnd-form">
    
</div>
<section class="hidden" id="content">
  
</section>
<section class="hidden" id="upload">
  <form method="post" action="app/upload.php" id="submit" enctype="multipart/form-data">
    <input id="browse" type="file" name="upl" multiple>
  </form>
  <header>
    <span class="icon-envelope-alt"></span>
    Submit your Exam
  </header>
  <div class="instructions">
    <p>Please zip compress your files before uploading...</p>
  </div>
  <div class="upload-container">
    <section class="controls">
      <a href="#" class="browse rnd-btn">Browse <span class="icon-folder-open-alt"></span></a>
      <a href="#" class="cancel rnd-btn">Cancel <span class="icon-ban-circle"></span></a>
    </section>
    <section class="result"></section>
    <section class="drop" id="dropzone">
      DROP YOUR FILES HERE
    </section>
    <section class="upload-list">
      <ul></ul>
    </section>
  </div>
</section>
<?php include 'inc/default_footer.php'; ?>