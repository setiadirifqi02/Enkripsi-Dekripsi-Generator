 <?php require('components/head.php') ?>
 <?php require('components/hero.php') ?>
 
 <!-- Enkripsi Section -->
  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3" id="enkripsi">
    <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Enkripsi</h2>
        <p class="lead">Silahkan masukkan teks yang ingin di Enkripsi.</p>
      </div>
      <!-- Form Enkripsi -->
      <div class="bg-light shadow-sm mx-auto" style="width: 90%; height: 340px; border-radius: 21px 21px 0 0">
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
          <div class="row px-4">
            <div class="col-md-12">
              <form action="enkripsi.php" method="post">
                <textarea name="input"class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Masukkan Teks...."></textarea>
                <div class="row text-start">
                <div class="col-md-4">
                  <button type="submit" class="btn btn-dark text-light mt-4 text-left" value="Enkripsi">Enkripsi</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- End Form Enkripsi -->
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Dekripsi</h2>
        <p class="lead">Silahkan masukkan teks yang ingin di Enkripsi.</p>
      </div>

      <!-- Form Dekripsi -->
      <div class="bg-dark shadow-sm mx-auto" style="width: 90%; height: 340px; border-radius: 21px 21px 0 0">
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <div class="row px-4">
          <div class="col-md-12">
            <form action="dekripsi.php" method="post">
              <textarea name="input"class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Masukkan Teks...."></textarea>
              <div class="row text-start">
                <div class="col-md-4">
                  <button type="submit" class="btn btn-light mt-4 text-left" value="Enkripsi">Dekripsi</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> <!-- End Form Dekripsi -->
    </div>
  </div>

<?php require('components/footer.php') ?>