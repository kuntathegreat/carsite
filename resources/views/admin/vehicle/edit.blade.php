@extends('layouts.admin-master')

@section('title')
	Admin Home | Car Site 
@endsection

@section('content')

	<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Vehicle - Edit Data</h4>

        <form action="/vehicle-update/{{  $vehicle->id  }}" method="POST">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="modal-body">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Price:</label>
                <input type="integer" name="price" value="{{ $vehicle->price }}"  class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Color:</label>
                <select name="color" class="form-control">
                  <option>{{ $vehicle->color }}</option>
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
                <select name="model"   class="form-control">
                  <option>{{ $vehicle->model }}</option>
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
                <input type="integer" name="year" value="{{ $vehicle->year }}" class="form-control" id="recipient-name">
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">User ID:</label>
                <input type="text" value="{{ $vehicle->user_id }}" name="user_id" class="form-control" id="recipient-name">
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Model ID:</label>
                <input type="text" value="{{ $vehicle->model_id }}" name="model_id" class="form-control" id="recipient-name">
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Category ID:</label>
                <input type="text" value="{{ $vehicle->category_id }}" name="category_id" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="message-text" name="description" class="col-form-label">Image:</label>
                <input name="image"  value="{{ $vehicle->image }}" class="form-control" id="message-text">
              </div>
          </div>
         
          <div class="modal-footer">
            <a href=" {{ url('vehicle') }}" class="btn btn-secondary" >Back</a>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>             

            </div>
          </div>
        </div>
  </div>


<!--   <div class="modal-dialog" role="document">
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
</div> -->

@endsection