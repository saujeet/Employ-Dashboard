<?php $this->extend('layouts/base'); ?>

<?php $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <?php
            if (session()->getFlashData('status')) {
                echo "<h4>" . session()->getFlashData('status') . "</h4>";
            }
            ?>
            <div class="card">
                <div class="card-header">
                    <h3>Employee Data
                        <a href="<?= base_url('employee-add'); ?>" class="btn btn-primary float-right">Add Employee</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Designation</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($employee as $row): ?>
                                <tr>
                                    <td>
                                        <?= $row['id']; ?>
                                    </td>
                                    <td>
                                        <?= $row['first_name']; ?>
                                    </td>
                                    <td>
                                        <?= $row['last_name']; ?>
                                    </td>
                                    <td>
                                        <?= $row['email']; ?>
                                    </td>
                                    <td>
                                        <?= $row['phone']; ?>
                                    </td>
                                    <td>
                                        <?= $row['designation']; ?>
                                    </td>
                                    <td>
                                        <?= $row['created_at']; ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('employeedata/edit/' . $row['id']); ?>"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <a href="<?= base_url('employeedata/delete/' . $row['id']); ?>"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>