@extends('admin.layout.index')
@section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
            <div class="card">
                        <div class="card-action">
                             Category Tables =>=><button class="show-modal btn btn-success" data-id="#" data-title="#" data-content="#">
                                        <span class="glyphicon glyphicon-eye-open"></span>Add category </button>
                        </div>
                        
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Phong tro</td>
                                            <td> <button class="show-modal btn btn-success center" data-id="#" data-title="#" data-content="#">
                                        <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                        <button class="edit-modal center btn btn-info" data-id="#" data-title="" data-content="">
                                        <span class="glyphicon glyphicon-edit"></span> Edit</button>
                                        <button class="delete-modal center btn btn-danger" data-id="#" data-title="#" data-content="#">
                                        <span class="glyphicon glyphicon-trash"></span> Delete</button></td>
                                           
                                        </tr>
                                       
                                      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    <!--End Advanced Tables -->

      
        @endsection