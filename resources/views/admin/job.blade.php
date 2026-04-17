@extends('admin.master')

@section('content')

<div class="container mt-4">

    <!-- TITLE -->
    <h4 class="mb-3">Job Data</h4>

    <!-- TABLE CARD -->
    <div class="card shadow-sm">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table align-middle mb-0">

                    <thead class="bg-light">
                        <tr>
                            <th>Job Title</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Education</th>
                            <th>Experience</th>
                            <th>Date of Birth</th>
                            <th>Present Salary</th>
                            <th>Expected Salary</th>
                            <th>Current Employer</th>
                            <th>Address</th>
                            <th>Resume</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <!-- ROW 1 -->
                        <tr>
                            <td>marketing</td>
                            <td>irshad ali</td>
                            <td>andinmzmnansi@gmail.com</td>
                            <td>7052605134</td>
                            <td>12th</td>
                            <td>10</td>
                            <td>2025-06-16</td>
                            <td>25.00</td>
                            <td>50.00</td>
                            <td>skiitm institute</td>
                            <td>RAJEEPUR SINGHIRAMPUR FBD</td>
                            <td><a href="#" class="text-primary">Download</a></td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>

                        <!-- ROW 2 -->
                        <tr>
                            <td>Computer operator</td>
                            <td>Gurlabh singh</td>
                            <td>gurlabhsingh198410@gmail.com</td>
                            <td>9728037436</td>
                            <td>PGDCA</td>
                            <td>8</td>
                            <td>1984-11-10</td>
                            <td>30000.00</td>
                            <td>30000.00</td>
                            <td>Self employee</td>
                            <td>Village dhanouri post office durana tehsil ambala cantt district ambala</td>
                            <td><a href="#" class="text-primary">Download</a></td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>

                        <!-- ROW 3 -->
                        <tr>
                            <td>Senior Counselor</td>
                            <td>Ashad</td>
                            <td>ashadmansoori626@gmail.com</td>
                            <td>7652041454</td>
                            <td>MCA</td>
                            <td>4 Year</td>
                            <td>1999-01-05</td>
                            <td>45.00</td>
                            <td>60.00</td>
                            <td>Vipro</td>
                            <td>Noida 62</td>
                            <td><a href="#" class="text-primary">Download</a></td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>

        </div>

        <!-- PAGINATION -->
        <div class="card-footer d-flex justify-content-between align-items-center">
            <div>Page of</div>

            <div>
                <button class="btn btn-light btn-sm me-2">Previous</button>
                <button class="btn btn-light btn-sm">Next</button>
            </div>
        </div>

    </div>

</div>

@endsection