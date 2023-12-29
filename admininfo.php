<?php
// Start the output buffer
ob_start();
?>

<style>
  /* Style the button */
  .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin-left: 10px;
  }

  /* Center the button inside a div element */
  .container {
    height: 770px;
    position: relative;
    border: 3px solid green;
  }

  .center {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }
  /* Change the background color and text color on hover */
.button:hover {
  background-color: white;
  color: green;
}

/* Add a border and a box shadow on hover */
.button:hover {
  border: 2px solid green;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

/* Add a transition effect to make the hover smooth */
.button {
  transition-duration: 0.4s;
}
</style>

<div class="container">
  <div class="center">
    <button class="button" onclick="window.location.href = 'admin.php';">Insert data </button><button class="button">view Data</button>
  </div>
</div>

<?php
// Get the contents of the output buffer
$html = ob_get_clean();
// Display the html
echo $html;
?>