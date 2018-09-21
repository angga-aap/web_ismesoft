<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center">Request <span class="text-green">ME</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
                <div class="col-md-6">
                    <form id="form1">
                        <div class="form-group">
                            <label for="">Company</label>
                            <input type="text" class="form-control" id="company" placeholder="Company">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="">Country</label>
                            <select class="form-control" id="country">
                                <option value="" selected="selected"></option>
                                <option value="Indonesia">Indonesia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Type of Company</label>
                            <select class="form-control" id="type_of_company">
                                <option value="" selected="selected"></option>
                                <option value="Retail">Retail</option>
                                <option value="Food & Beverage">Food & Beverage</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Company Needs</label>
                            <select class="form-control" id="company_need">
                                <option value="" selected="selected"></option>
                                <option value="Box Office">Box Office</option>
                                <option value="POS & Box Office">POS & Box Office</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Type of Implementation</label>
                            <select class="form-control" id="type_of_implementation">
                            <option value="" selected="selected"></option>
                                <option value="">AA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Additional Demand</label>
                            <textarea class="form-control" id="additional"></textarea>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form id="form2">
                        <h2>Contact Person</h2>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control" id="phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </form>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="send">Send</button>
      </div>
    </div>
  </div>
</div>