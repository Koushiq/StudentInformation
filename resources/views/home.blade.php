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
    <div class="modal" id="editModal">
      <div class="modal-dialog">
        <div class="modal-content">
        
        
          <div class="modal-header">
            <h4 class="modal-title">Edit Data</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
        
          <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Firstname</th>
                        <td><input type="text" name="mFirstname" id="mFirstname"></td>
                        
                    </tr>
                    <tr>
                        <th>Lastname</th>
                        <td><input type="text" name="mLastnaem" id="mLastname"></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>
                            <input type="text" name="mAddress" id="mAddress">
                        </td>
                        
                    </tr>
                    <tr>
                        <th>Picture</th>
                       <td>
                           <input type="file" name="mPicture" id="mPicture" enctype="multipart/form-data">
                       </td>
                    </tr>
                    <tr>
                        <th>Department</th>
                        <td>
                            <select name="mDepartment" id="mDepartment">
                                <option value="English">English</option>
                                <option value="CSE">CSE</option>
                                <option value="Bangla">Bangla</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Date Of Birth</th>
                        <td>
                            <input type="date" name="mDob" id="mDob">
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Update" id="update" name="update"></td>
                    </tr>
                </table>
            </form>
          </div>
          
         
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="mClose" data-dismiss="modal">Close</button>
          </div>
          <div id="mErrLog">

          </div>
        </div>
      </div>
    </div>
</div>

