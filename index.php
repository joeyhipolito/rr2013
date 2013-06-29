<?php include 'inc/default_header.php'; ?>
<aside id="content-nav">
  <h1>Quick Links</h1>
  <div class="container">
    
  </div>
</aside>
<section id="content">
  
</section>
<section id="submit">
  <h1>Please zip compress your upload.</h1>
  <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
    <div id="drop">
      Drop Here
      <a>Browse</a>
      <input type="file" name="upl" multiple />
    </div>
    <ul>
      <!-- The file uploads will be shown here -->
    </ul>
    <p></p>
  </form>
</section>
<?php include 'inc/default_footer.php'; ?>