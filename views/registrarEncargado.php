
<?php include '../includes/header.php'; ?>
<?php include '../includes/navbarEncargado.php'; ?>
<div class="mx-auto pt-5" style="width: 65%"  >
<form class="row g-3">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Nombres</label>
    <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Matricula</label>
    <div class="input-group">
      <input type="number" maxlength="8" minlength="5" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
<div class="col-md-6">
    <label for="validationDefault03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationDefault03" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">State</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationDefault05" required>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<?php include '../includes/footer.php'; ?>