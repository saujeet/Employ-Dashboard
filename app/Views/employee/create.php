<?php $this->extend('layouts/base'); ?>

<?php $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Add Employee
                        <a href="<?= base_url('employeedata'); ?>" class="btn btn-danger float-right">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('employee-store'); ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control"
                                        placeholder="Enter First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" class="form-control"
                                        placeholder="Enter Last Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label>Mobile</label>
                                    <input type="text" name="phone" class="form-control"
                                        placeholder="Enter Mobile Number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label>Designation</label>
                                    <input type="text" name="designation" class="form-control"
                                        placeholder="Your Designation">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-groups">
                                    <button type="submit" class="btn btn-primary px-4">
                                        Save Employee
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>