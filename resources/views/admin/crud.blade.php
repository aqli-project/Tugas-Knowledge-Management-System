<div class="wrapper">
  <div class="container-fluid">
      <div class="row">
          <div class="col-12">
              <div class="page-title-box">
                  <div class="page-title-right"></div>
                  <h4 class="page-title"></h4>
              </div>
          </div>
      </div>
<div class="row">
<div class="col-12" id="sess-result">
</div>
</div>
<div class="row">
  <div class="col-12 px-5">
  <div class="card">
    <div class="card-body">
        <h4 class="header-title text-montserrat">CRUD</h4>
        <hr>


        <form method="POST">
            <input type="hidden" id="csrf_token" name="csrf_token" value="d2ec6ddafea6bf857130f91f833236680431e936f26958a47489507ca46e34d9">
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category" id="category">

                </select>
            </div>
            <div class="form-group">
                <label>Images</label>
                <select class="form-control" name="service" id="service">
                    <option value="0" selected="" disabled="">- Select One -</option>
                </select>
            </div>


            <div class="form-group">
                <label>Description</label>
                <div class="form-control" style="height:auto !important;" id="note"></div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 col-12">
                    <label>Price/1000</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><div class="input-group-text">Rp. </div></div>
                        <input type="text" class="form-control" id="price" value="0" readonly="">
                    </div>
                </div>
                <div class="form-group col-md-4 col-12">
                    <label>Min.</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="min" value="0" readonly="">
                    </div>
                </div>
                <div class="form-group col-md-4 col-12">
                    <label>Max.</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="max" value="0" readonly="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Link / Username</label>
                <input type="text" class="form-control" id="target" name="target">
            </div>
            <div class="row">
                <input type="hidden" id="rate" value="0">
                <div class="form-group col-md-6 col-12">
                    <label>Amount</label>
                    <input type="number" class="form-control" name="quantity" id="quantity" onkeyup="get_total(this.value).value;">
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Price</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"> Rp. </div>
                        </div>
                        <input type="text" class="form-control" id="total-price" value="0" readonly="">
                    </div>
                </div>
            </div>
            <div class="form-label-group">
                <div class="input-group">
                    <input type="password" inputmode="numeric" class="form-control" id="password" name="pin" data-toggle="password" maxlength="6" minlength="6" onkeyup="this.value=this.value.replace(/[^\d]+/g,'')" placeholder="Two-Factor Authorization (PIN/2FA)">
                    <div class="input-group-append">
                        <span class="input-group-text input-password-hide" style="cursor: pointer;"><i class="fa fa-eye"></i></span>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group col-6">
                    <button type="button" class="btn btn-outline-danger btn-block"> RESET </button>
                </div>
                <div class="form-group col-6">
                    <button type="submit" id="actionbutton" name="order" class="btn  btn-outline-success btn-block"> SUBMIT </button>
                    <div id="timerdiv" style="display:none;"></div>
                </div>
            </div>
        </form>
    </div>
  </div>
  </div>

  </div>
</div>


