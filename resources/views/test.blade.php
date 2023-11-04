@extends('admin.layouts.app', ['pageTitle' => 'Dashboard Management'])
@push('css')
    @include('admin.layouts.includes.style')
@endpush
@section('content')
 <div>
    <h1>Welcome Admin</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top"
        title="Tooltip on Top">Tooltip</button>

    <button type="button" class="btn btn-primary text-nowrap" data-bs-toggle="popover" data-bs-offset="0,14"
        data-bs-placement="right" data-bs-html="true"
        data-bs-content="<h1>OK</h1>"
        title="Popover Title">
        Popover on right
    </button><br><br>

    <div class="form-group">
        <label for="datepicker">Select Date:</label>
        <input type="text" class="form-control" id="datepicker" name="date">
    </div><br><br>

    <div class="row">
        <div class="col-md-6">
            <input name="file1" type="file" class="dropify"/>
        </div>
    </div>
    <form method="post">
        <textarea id="summernote" name="editordata"></textarea>
      </form>

      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
        Launch modal
      </button>
      <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <label for="nameBasic" class="form-label">Name</label>
                  <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name" />
                </div>
              </div>
              <div class="row g-2">
                <div class="col mb-0">
                  <label for="emailBasic" class="form-label">Email</label>
                  <input type="text" id="emailBasic" class="form-control" placeholder="xxxx@xxx.xx" />
                </div>
                <div class="col mb-0">
                  <label for="dobBasic" class="form-label">DOB</label>
                  <input type="text" id="dobBasic" class="form-control" placeholder="DD / MM / YY" />
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
              </button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div><br><br>
      <select class="js-example-basic-single form-control" name="state">
        <option value="AL">Alabama</option>
        <option value="AL">Alabama</option>
        <option value="AL">Alabama</option>
        <option value="AL">Alabama</option>
        <option value="AL">Alabama</option>
        <option value="AL">Alabama</option>
        <option value="AL">Alabama</option>
        <option value="WY">Wyoming</option>
        <option value="WY">Ahmed Emon</option>
        <option value="WY">Mahabub</option>
      </select><br><br>
</div>
<div class="table-responsive text-nowrap">
<table class="table table-bordered table-hover table-sm table-striped data-table">
    <thead class="bg-dark">
        <tr>
            <th class="text-white">#</th>
            <th class="text-white">Name</th>
            <th class="text-white">Email</th>
            <th class="text-white">Action</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</div>
@endsection
@push('script')
    @include('admin.layouts.includes.script')

     <script type="text/javascript">
        $(function () {

          var table = $('.data-table').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('users.index') }}",
              columns: [
                  {data: 'id', name: 'id'},
                  {data: 'name', name: 'name'},
                  {data: 'email', name: 'email'},
                  {data: 'action', name: 'action', orderable: false, searchable: false},
              ]
          });

        });
      </script>
@endpush
