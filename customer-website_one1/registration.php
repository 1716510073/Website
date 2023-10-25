<?php include 'header.php'; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Registration</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Regitration</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="form">                       
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form">
                        <div class="row">
                            <div class="col-sm-11 area">
                               <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" id="retailer_signup" enctype="multipart/form-data"   name="f1">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="name" placeholder="Full Name" required/>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                               <input type="text" class="form-control" name="mobile" id="mobile_number"  onblur="check_mobile(this.value)"  placeholder="Mobile Number" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required />
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                               <input type="email" name="email" class="form-control" placeholder="Email" id="email" onblur="check_email(this.value)" required />
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <select class="form-control" id="sel1" name="type">
                                                  <option>Retailer</option>
                                                  <option>Distributor</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                              <input type="text" class="form-control" name="cname" placeholder="Shop Name" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <select class="form-control" name="state" onchange="get_city(this.value)" required>
                                                   <option value="">Select State</option>

                                                    <?php if($resRC['ERROR_CODE']==0 && isset($resRC['DATA']) && count($resRC['DATA']) > 0) {
                                                    foreach($resRC['DATA'] as $key=>$state) {
                                                    ?>
                                                    <option value="<?=$state['id']?>"><?=$state['state_name']?></option>
                                                    <?php } } ?>
                                                    <option value="saab">Uttar Pradesh</option>
                                                    <option value="opel">Opel</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                        </div><br>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <select class="form-control" name="city" id="city" required>
                                                  <option value="">Select City</option> 
                                                  <option value="volvo">Noida</option>
                                                    <option value="saab">Kanpur</option>
                                                    <option value="opel">Opel</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                           <div class="form-group">
                                              <input type="text" class="form-control" name="pincode" placeholder="Zip Code" maxlength="6" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                              <input type="text" class="form-control" name="aadhar" placeholder="Aadhar Number" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength="12" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                           <div class="form-group">
                                              <input class="form-control" type="text" name="pan" placeholder="PAN No." required maxlength="10">
                                            </div>

                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                               <textarea class="form-control" name="address"  rows="5" id="address" placeholder="Address"required ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div>
                                       <button type="submit" class="btn btn-danger" id="submit" name="add" onclick="ValidatePAN()" style="width: 50%;">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php include 'footer.php'; ?>