<?php include 'head.php'; ?>

<div class="container-fluid">
                   
                    <div class="row">
                       <div class="col-xl-12">
                           <div class="card spur-card">
                               <div class="card-header">
                                   <div class="spur-card-icon">
                                       <i class="fas fa-chart-bar"></i>
                                   </div>
                                   <div class="spur-card-title"> Complex layout </div>
                               </div>
                               <div class="card-body ">
                                   <form>
                                       <div class="form-row">
                                           <div class="form-group col-md-6">
                                               <label for="inputEmail4">Email</label>
                                               <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                           </div>
                                           <div class="form-group col-md-6">
                                               <label for="inputPassword4">Password</label>
                                               <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <label for="inputAddress">Address</label>
                                           <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                       </div>
                                       <div class="form-group">
                                           <label for="inputAddress2">Address 2</label>
                                           <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                       </div>
                                       <div class="form-row">
                                           <div class="form-group col-md-6">
                                               <label for="inputCity">City</label>
                                               <input type="text" class="form-control" id="inputCity">
                                           </div>
                                           <div class="form-group col-md-4">
                                               <label for="inputState">State</label>
                                               <select id="inputState" class="form-control">
                                                   <option selected>Choose...</option>
                                                   <option>...</option>
                                               </select>
                                           </div>
                                           <div class="form-group col-md-2">
                                               <label for="inputZip">Zip</label>
                                               <input type="text" class="form-control" id="inputZip">
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <div class="custom-control custom-checkbox">
                                               <input type="checkbox" class="custom-control-input" id="customCheck4">
                                               <label class="custom-control-label" for="customCheck4">Check this custom checkbox</label>
                                           </div>
                                       </div>
                                       <button type="submit" class="btn btn-primary">Sign in</button>
                                   </form>!-- put your rows / columns here -->
               </div>
               <?php include 'footer.php'; ?>