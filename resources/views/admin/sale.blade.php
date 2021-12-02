@extends('layouts.admin-master')

@section('title')
  Admin Sale | Car Site 
@endsection

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add About Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="/save-sale" method="POST">
          {{ csrf_field() }}
          <div class="modal-body">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">User ID:</label>
                <input type="integer" name="user_id" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Vehicle ID:</label>
                <input type="integer" name="vehicle_id" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Date:</label>
                <input type="date" name="date" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Payment Mode:</label>
                <select name="payment_mode" class="form-control">
                  <option>Bank transfer</option>
                  <option>Cash</option>
                  <option>POS</option>
                </select>
              </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
    </div>
  </div>
</div>

  <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Sale Information</h4>
                  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>

                
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      
                      <th class="w-10p">
                        Date
                      </th>
                      <th class="w-10p">
                        Payment mode
                      </th>
                     
                      <th class="w-20p">
                        EDIT
                      </th>
                      <th class="w-20p">
                        DELETE
                      </th>
                    </thead>

                    <tbody>
                      @foreach ($sale as $data)
                      <tr>

                        <td>
                          {{ $data->date }}
                        </td>
                        <td>
                          {{ $data->payment_mode }}
                        </td>
                        
                        <td>
                          <a href="{{ url('sale-'.$data->id) }}" class="btn btn-success">EDIT</a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-danger">DELETE</a>
                        </td>
                      </tr>
                      @endforeach
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
@endsection
