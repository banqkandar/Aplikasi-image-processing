<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
<div class="container">
  <div class="my-3 p-3 bg-white rounded">
    <div class="row mt-5">
      <div class="col-md-3 mr-4">
        <div class="card border-0" style="width: 18rem;">
          <div class="card-body text-center">
            <img src="layers.png" width="30%">
          </div>
          <div class="m-3">
            <label for="image-up">Upload Image</label>
            <input class="btn btn-primary" id="image-up" name="image" type="file" style="width:260px" accept="image/*" onchange="original()">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <button class="shadow btn btn-primary m-1" data-toggle="tooltip" data-placement="top" title="Original" onclick="original()">Original</button>
        <button class="shadow btn btn-primary m-1" data-toggle="tooltip" data-placement="top" title="Grayscale" onclick="grayscale()">Grayscale</button>
        <button class="shadow btn btn-primary m-1" data-toggle="tooltip" data-placement="top" title="Brightness (x2)" onclick="kalibright('kali')">Brightness (x2)</button>
        <button class="shadow btn btn-primary m-1" data-toggle="tooltip" data-placement="top" title="Brightness (:2)" onclick="kalibright('bagi')">Brightness (:2)</button>
        <button class="shadow btn btn-primary m-1" data-toggle="tooltip" data-placement="top" title="Sharpen" onclick="sharpen()">Sharpen</button>
        <button class="shadow btn btn-primary m-1" data-toggle="tooltip" data-placement="top" title="Edge Detection" onclick="edge()">Edge Detection</button>
        <button class="shadow btn btn-primary m-1" data-toggle="tooltip" data-placement="top" title="Dilation" onclick="dilation()">Dilation</button>
        <button class="shadow btn btn-primary m-1" data-toggle="tooltip" data-placement="top" title="Rotate Kiri" onclick="rotate('left')"><i class="material-icons">rotate_left</i></button>
        <button class="shadow btn btn-primary m-1" data-toggle="tooltip" data-placement="top" title="Rotate Kanan" onclick="rotate('right')"><i class="material-icons">rotate_right</i></button>
        <a class="shadow btn btn-primary m-1" data-toggle="tooltip" data-placement="top" title="Hapus Gambar" href="index.php">Hapus Gambar</a>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col m6">
        <div class="row center-align">
          <h4>Original Image</h4>
        </div>
        <div class="row center-align">
          <img id="ori-image" width="75%">
        </div>
      </div>
      <div class="col m6">
        <div class="row center-align">
          <h4>Edited Image</h4>
        </div>
        <div class="row center-align">
          <img id="edit-image" width="75%">
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>