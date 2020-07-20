<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" data-toogle="validator">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    @csrf {{ method_field('POST') }}
                    <div class="form-group">
                        <input type="hidden" name="id" id="id">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Full Name"
                               required="" autofocus="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address"
                               required="" autofocus="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone </label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number"
                               required="" autofocus="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Religion</label>
                        <select class="form-control" name="religion" id="religion" required="">
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Christian">Christian</option>
                            <option value="Buddhism">Buddhism</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="insertbutton"></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--SIngle data show are here-->
<div class="modal fade" id="single-data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" align="center"></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item">ID: <b><span class="text-dark" id="contactid"></span></b></li>
                    <li class="list-group-item">Name: <b><span class="text-dark" id="fullname"></span></b></li>
                    <li class="list-group-item">Email: <b><span class="text-dark" id="contactemail"></span></b></li>
                    <li class="list-group-item">Phone: <b><span class="text-dark" id="contactnumber"></span></b></li>
                    <li class="list-group-item">Religion: <b><span class="text-dark" id="creligion"></span></b></li>
                </ul>
            </div>
        </div>
    </div>
</div>
