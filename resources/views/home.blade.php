@extends('components/layout')
@section('pagetitle', 'Homepage')
@section('externalscript')
<script src=" {{asset('/js/admin.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
<h1>
    Welcome 
</h1>
<table class="table container" id="table">
    <tr>
        <th>
            Name
        </th>
        <th>
            Firstname
        </th>
        <th>
            Lastname
        </th>
        <th>
            Address
        </th>
        <th>
            Picture
        </th>
        <th>
            Department
        </th>
        <th>
            Date Of Birth
        </th>
        <th>
            Action
        </th>
    </tr>
</table>

<div class="container">
    <h2>Modal Example</h2>

    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
      Open modal
    </button> --}}
  
    <div class="modal" id="editModal">
      <div class="modal-dialog">
        <div class="modal-content">
        
        
          <div class="modal-header">
            <h4 class="modal-title">Edit Data</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
        
          <div class="modal-body">
            <form action="" method="post">
                <table class="table">
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Address</th>
                        <th>Picture</th>
                        <th>Department</th>
                        <th>Date Of Birth</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="mFirstname" id="mUsername"></td>
                    </tr>
                </table>
            </form>
          </div>
          
         
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
</div>

