@extends('layouts.app')

@section('auth_form')

<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-header-content text-center">
                    <h1 class="mb-4">My Learning</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Logout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <!-- form  -->
                        <div class="row" style="margin : 10px 0 ; ">
                            <form action="" method="post">
                                <div style="max-width:500px ; display : flex ; align-items:center; gap:10px ; ">
                                    <div>
                                        <input type="text" style="border:1px solid blue;" class="form-control" placeholder="Enter Course Code">
                                    </div>
                                    <div>
                                        <button class="btn btn-primary btn-small">Enroll</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- table  -->
                        <div style="overflow-x: scroll;">
                            
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>Code</th>
                                        <th>Content</th>
                                        <th>Status</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                    <tr>
                                        <td>Digital Marketing
                                        </td>
                                        <td>148212</td>
                                        <td>
                                            254
                                        </td>
                                        <td>
                                          
                                            <span class="badge badge-success">Active</span>
                                            
                                           
                                        </td>
                                        <td class="text-center">
                                            <form action="">
                                                <button class="btn btn-success btn-small">View</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Video Editing</td>
                                        <td>145852</td>
                                        <td>
                                            124
                                        </td>
                                        <td>
                                          
                                            <span class="badge badge-success">Active</span>
                                            
                                           
                                        </td>
                                        <td class="text-center">
                                            <form action="">
                                                <button class="btn btn-success btn-small">View</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Photo Editing </td>
                                        <td>11451</td>
                                        <td>
                                            125
                                        </td>
                                        <td>
                                          
                                            <span class="badge badge-success">Active</span>
                                            
                                           
                                        </td>
                                        <td class="text-center">
                                            <form action="">
                                                <button class="btn btn-success btn-small">View</button>
                                            </form>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop



<script>
    $(document).ready(function() {
        $('#data-table').DataTable({
            responsive: true,
            autoWidth: true,
            columnDefs: [{
                    orderable: false,
                    targets: 2
                } // Disable sorting for WhatsApp column
            ]
        });
    });
</script>
