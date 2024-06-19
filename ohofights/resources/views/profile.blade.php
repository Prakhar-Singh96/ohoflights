<!doctype html>
<html lang="en">

@include('layouts.head')

<body>

    <div id="main-wrapper">

        <!-- header -->
        @include('layouts.header')
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Main content -->
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">User Information</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <th style="width: 30%">User ID:</th>
                                                <td>{{ Session::get('userid') }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email:</th>
                                                <td>{{ Session::get("email_" . Session::get('userid')) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Role:</th>
                                                <td>
                                                    @if(Session::get("role_" . Session::get('userid')) == 1)
                                                        Admin
                                                    @elseif(Session::get("role_" . Session::get('userid')) == 2)
                                                        User
                                                    @else
                                                        {{ Session::get("role_" . Session::get('userid')) }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Last Login Time:</th>
                                                <td>{{ Session::get("login_time_" . Session::get('userid')) }}</td>
                                            </tr>
                                            <!-- Add more fields as per your session data -->
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- footer -->
        @include('layouts.footer')
        <div class="overlay-body"></div>
    </div>

</body>
</html>
