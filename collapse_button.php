<style>
  .d-flex.justify-content-center {
    justify-content: center;
    align-items: center;
  }

  .btn.btn-rounded.btn-outline-primary.shadow {
    width: 350px;
    margin: 50px 10px; /* Adjust the margin to add space between the buttons */
  }

  .content {
    display: none; /* Initially hide the content */
  }
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<div class="d-flex justify-content-center">
  <button class="btn btn-rounded btn-outline-primary shadow" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample1" id="toggleButton1">Content 1</button>
  <button class="btn btn-rounded btn-outline-primary shadow" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample2" id="toggleButton2">Content 2</button>
</div>

<div id="content1" class="content">
  <h1>Content 1</h1>
</div>

<div id="content2" class="content">
  <h1>Content 2</h1>
</div>

<script>
  // Get references to the buttons and content divs
  const button1 = document.getElementById("toggleButton1");
  const button2 = document.getElementById("toggleButton2");
  const content1 = document.getElementById("content1");
  const content2 = document.getElementById("content2");

  // Add click event listeners to the buttons
  button1.addEventListener("click", function () {
    content2.style.display = "none";
    content1.style.display = "block";
  });

  button2.addEventListener("click", function () {
    content1.style.display = "none";
    content2.style.display = "block";
  });

  // Add double-click event listeners to close the toggles
  button1.addEventListener("dblclick", function () {
    content1.style.display = "none";
  });

  button2.addEventListener("dblclick", function () {
    content2.style.display = "none";
  });
</script>
