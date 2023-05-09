@extends('admin.app')
@section('title') Location Creation @endsection
@section('content')
<!-- Main content -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
             Location Creation
          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General Information</h3>
                        <div class="form-group col-md-6">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form role="form" action="/" method="post">
                        @csrf
                        <div class="card-body">
                            <h4 style="width:100%;background-color:#3A6170;color:white">Location</h4>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Code</label>
                                    <input type="text" class="form-control" name="code" placeholder="Enter location code" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter location name" autocomplete="off" required>
                                </div>
                                <br>
                                <h4 style="width:100%;background-color:#3A6170;color:white">Address Details</h4>

                                <div class="form-group col-md-4">
                                    <label>Address 1</label>
                                    <input type="text" class="form-control" placeholder="Address 1" name="address1" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Address 2</label>
                                    <input type="text" class="form-control" placeholder="Address 2" name="address2" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Address 3</label>
                                    <input type="text" class="form-control" placeholder="Address 3" name="address3" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Place</label>
                                    <input type="text" class="form-control" placeholder="Place" name="place" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Pincode</label>
                                    <input type="text" class="form-control" placeholder="Pincode" name="pincode" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>TelephoneNo.1</label>
                                    <input type="text" class="form-control" placeholder="TelephoneNo.1" name="TelephoneNo.1" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>TelephoneNo.2</label>
                                    <input type="text" class="form-control" placeholder="TelephoneNo.2" name="TelephoneNo.2" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Email Id</label>
                                    <input type="email" class="form-control" placeholder="Email Id" name="email" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Contact Person</label>
                                    <input type="text" class="form-control" placeholder="Contact Person" name="contact_person" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Opening Date</label>
                                    <input type="date" class="form-control" placeholder="Opening Date" name="opening_date" value="<?php echo date('Y-m-d'); ?>" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for=""></label>
                                    <button class="btn btn-info btn-sm" style="align-items: center">Additional Address</button>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Location Type</label>
                                    <select class="form-control" name="location_type">
                                        <option value="Distributore">Distributore</option>
                                        <option value="Vendor">Vendor</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>GSTNumber</label>
                                    <input type="text" class="form-control" placeholder="GSTNumber" name="GSTNumber" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tally Company Code</label>
                                    <input type="text" class="form-control" placeholder="Tally Company Code" name="tally_company_code" required>
                                </div>
                                <br>
                                <h4 style="width:100%;background-color:#3A6170;color:white">Reporting Setting</h4>
                                <div class="form-check col-md-2">
                                    <input type="checkbox" class="form-check-input" name="HoldFlag" id="HoldFlag" onclick="EnableDisableTextBox(this);" onchange="changeflag(this);"> <b>On Hold</b>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="HoldReason" id="HoldReason" placeholder="Reason" disabled>
                                </div>
                                <label for="inputPassword3" class="col-2 col-form-label">In Report</label>
                                <div class="form-group col-md-4">
                                    <input type="radio" id="HoldReport1" Name="IncludeHoldLocInReport" checked="checked" value="Y" disabled> <b style="color: #000;">Yes</b>&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="HoldReport2" Name="IncludeHoldLocInReport"  value="N" disabled> <b style="color: #000;">No</b>
                                    <input type="hidden" id="Resumedate" Name="Resumedate" value="<?php echo date('Y-m-d'); ?>" >
                                </div>
                                <div class="form-check col-md-2">
                                    <input type="checkbox" class="form-check-input" name="CloseFlag" id="CloseFlag" onclick="EnableDisableclose(this)" autocomplete="off"> <b>Close Location</b>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="HoldReason" id="HoldReason" placeholder="Close Reason" disabled>
                                </div>
                                <label for="inputPassword3" class="col-2 col-form-label">In Report</label>
                                <div class="form-group col-md-4">
                                    <input type="radio" id="HoldReport1" Name="IncludeHoldLocInReport" checked="checked" value="Y" disabled> <b style="color: #000;">Yes</b>&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="HoldReport2" Name="IncludeHoldLocInReport"  value="N" disabled> <b style="color: #000;">No</b>
                                    <input type="hidden" id="Resumedate" Name="Resumedate" value="<?php echo date('Y-m-d'); ?>" >
                                </div>

                                <br>
                                <h4 style="width:100%;background-color:#3A6170;color:white">Geographical Location</h4>
                                <div class="form-group col-md-3">
                                    <label>Country</label>
                                    <select class="form-control" name="country">
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="India">India</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Zone</label>
                                    <select class="form-control" name="zone">
                                        <option value="EAST">EAST</option>
                                        <option value="NORTH">NORTH</option>
                                        <option value="SOUTH">SOUTH</option>
                                        <option value="WEST">WEST</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>State</label>
                                    <input type="text" class="form-control" name="state" id="state">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="city" id="city">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection()
