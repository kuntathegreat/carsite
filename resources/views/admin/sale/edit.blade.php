@extends('layouts.admin-master')

@section('title')
	Admin Sale Edit | Car Site 
@endsection

@section('content')

	<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Sale - Edit Data</h4>
<form action='/sale-update/{{  $sale->id  }}' method="POST">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="modal-body">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">User ID:</label>
                <input type="integer" name="user_id"  value="{{ $sale->user_id }}" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Vehicle ID:</label>
                <input type="integer" name="vehicle_id" value="{{ $sale->vehicle_id }}" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Date:</label>
                <input type="date" name="date"  value="{{ $sale->date }}" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Payment Mode:</label>
                <select name="payment_mode" class="form-control">
                  <option>Bank transfer</option>
                  <option>Cash</option>
                  <option>POS</option>
                </select>
              </div>
         
          <div class="modal-footer">
            <a href=" {{ url('sale') }}" class="btn btn-secondary" >Back</a>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>             

            </div>
          </div>
        </div>
  </div>


@endsection