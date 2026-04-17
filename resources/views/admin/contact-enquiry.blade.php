@extends('admin.master')

@section('content')

<div class="container mt-4">

    <!-- TITLE -->
    <h4 class="mb-3">Enquiry Data</h4>

    <!-- TABLE CARD -->
    <div class="card shadow-sm">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table align-middle mb-0">

                    <thead class="bg-light">
                        <tr>
                            <th>S.No.</th>
                            <th>name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <!-- ROW 1 -->
                        <tr>
                            <td>1</td>
                            <td>admin</td>
                            <td>asthasahagal960@gmail.com</td>
                            <td>irshad ali</td>
                            <td>cvfd</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>

                        <!-- ROW 2 -->
                        <tr>
                            <td>2</td>
                            <td>LeeGat</td>
                            <td>dinanikolskaya99@gmail.com</td>
                            <td>Hallo write about your the prices</td>
                            <td style="max-width:300px; white-space:normal;">
                                Hi, გთხოვთ დაგვიკავშირდეთ თქვენთან დაკავშირებით.
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>

                        <!-- ROW 3 -->
                        <tr>
                            <td>3</td>
                            <td>Emmamum</td>
                            <td>isabellasi685@hotmail.com</td>
                            <td>Your site got me curious</td>
                            <td style="max-width:300px; white-space:normal;">
                                Hey, I just stumbled onto your site... are you always this good at catching attention, or did you make it just for me? Write to me on this website --- rb.gy/3pma6x?mum --- my username is the same, I'll be waiting.
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>

                        <!-- ROW 4 -->
                        <tr>
                            <td>4</td>
                            <td>DanielLob</td>
                            <td>j-jurjahn@web.de</td>
                            <td>Sehr sexy Madchen wollen nur auf dieser Dating-Seite Sex mit dir</td>
                            <td style="max-width:300px; white-space:normal;">
                                SEHR ATTRAKTIVE FRAUEN MOCHTEN SICH AUF DIESER SEITE NUR ZUM SEX TREFFEN https://aboutlist.org/go/...
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>

                        <!-- ROW 5 -->
                        <tr>
                            <td>5</td>
                            <td>DanielLob</td>
                            <td>hda23641@gmail.com</td>
                            <td>DEPRAVED GIRLS WANT TO MEET FOR SEX ONLY HERE</td>
                            <td style="max-width:300px; white-space:normal;">
                                VERY ATTRACTIVE WOMEN MEET FOR SEX ONLY ON THIS DATING SITE https://jaytwink.com/...
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>

        </div>

    </div>

</div>

@endsection