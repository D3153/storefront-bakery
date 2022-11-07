<html>
<head>
	<title>Customize Cake</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<style>
  body{
      background-color: lightpink;
  }
</style>
</head>

<body>
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">
              <h2 class="text-center mb-5">Customize cake</h2>

                <form action='' enctype="multipart/form-data" method='post'>
                <div class="form-outline mb-4">
                  <input type="file" name="picture" class="form-control form-control-lg" />
                  <label class="form-label">Select Picture</label>
                </div>

                <div class="form-outline mb-4">
                  <label>Descrption</label>
                  <textarea class="form-control" rows="3" name="description"></textarea>
                </div>

                <div class="form-outline mb-4">
                  <label>Size</label>
                  <select name="size" id="size">
                    <option value="small">6 inches</option>
                    <option value="medium">8 inches</option>
                    <option value="big">10 inches</option>
                  </select>
                </div>

                <div class="form-outline mb-4">
                  <label>Price</label>
                  <input type="text" name="Price">
                </div>
                
                <div class="d-flex justify-content-center">
                  <button type="submit"  name="action" class="btn btn-primary" id="confirmBtn">Confirm</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>