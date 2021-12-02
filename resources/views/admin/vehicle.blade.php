@extends('layouts.admin-master')

@section('title')
	Admin Home | Car Site 
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
        <form action="/save-vehicle" method="POST">
          {{ csrf_field() }}
          <div class="modal-body">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Price:</label>
                <input type="integer" name="price" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Color:</label>
                <select name="color" class="form-control">
                  <option>Red</option>
                  <option>Orange</option>
                  <option>Yellow</option>
                  <option>Green</option>
                  <option>Blue</option>
                  <option>Indigo</option>
                  <option>Violet</option>
                  <option>Grey</option>
                  <option>Black</option>
                </select>
              </div>
              <div class="form-group">
                <label for="message-text" name="description" class="col-form-label">Model:</label>
                <select name="model" class="form-control">
                  <option>Corolla</option>
                  <option>Cammry</option>
                  <option>Highlander</option>
                  <option>Avalon</option>
                  <option>86</option>
                  <option>Solara</option>
                  <option>Sienna</option>
                  <option>Maximus</option>
                  <option>Prime</option>
                </select>
              </div>
				<div class="form-group">
                <label for="recipient-name" class="col-form-label">Availability:</label>
                <select name="availability" class="col-form-label">
                  <option>YES</option>
                  <option>NO</option>
                </select>
            </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Year:</label>
                <input type="text" name="year" class="form-control" id="recipient-name">
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">User ID:</label>
                <input type="text" name="user_id" class="form-control" id="recipient-name">
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Model ID:</label>
                <input type="text" name="model_id" class="form-control" id="recipient-name">
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Category ID:</label>
                <input type="text" name="category_id" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="message-text" name="description" class="col-form-label">Image:</label>
                <input name="image" class="form-control" id="message-text">
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
                <h4 class="card-title"> Vehicle Information</h4>
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
                        Price
                      </th>
                      <th class="w-10p">
                        Availability
                      </th>
                      <th class="w-10p">
                        Model
                      </th>
                      <th class="w-10p">
                        Year
                      </th>
                      <th class="w-10p">
                        Color
                      </th>
                      <th class="w-10p">
                        Image
                      </th>
                      <th class="w-20p">
                        EDIT
                      </th>
                      <th class="w-20p">
                        DELETE
                      </th>
                    </thead>

                    <tbody>
                      @foreach ($vehicle as $data)
                      <tr>
                        <td>
                          {{ $data->price }}
                        </td>
                        <td>
                          {{ $data->availability }}
                        </td>
                        <td>
                          {{ $data->model }}
                        </td>
                        <td>
                          {{ $data->year }}
                        </td>
                        <td>
                          {{ $data->color }}
                        </td>
                        <td>
                          {{ $data->image }}
                        </td>
                        
                        <td>
                          <a href="{{ url('vehicle-'.$data->id) }}" class="btn btn-success">EDIT</a>
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
