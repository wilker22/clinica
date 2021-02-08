@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Appointments ({{$bookings->count()}})</div>
               

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Date</th>
                            <th scope="col">User</th>
                            <th scope="col">E-Mail</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Time</th>
                            <th scope="col">Doctor</th>
                            <th scope="col">Status</th>
                            <td scope="col">Prescripction</td>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($bookings as $key=>$booking)
                          <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>
                              <img src="localhost/doctor/public/profile/{{$booking->user->image}}" width="80" style="border-radius: 50%;">
                            </td>
                            <td>{{ $booking->date }}</td>
                            <td>{{ $booking->user->name }}</td>
                            <td>{{ $booking->user->email }}</td>
                            <td>{{ $booking->user->phone_number }}</td>
                            <td>{{ $booking->time }}</td>
                            <td>{{ $booking->doctor->name }}</td>
                            <td>
                              @if($booking->status==1)
                                Checked
                              @endif
                            </td>
                            <td>
                               <!-- Button trigger modal -->
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                  Escrever Prescrição
                              </button> 
                              
                            </td>
                          </tr>

                          @empty
                          <td>There is no any Appointments Today!</td>

                          @endforelse


                        </tbody>
                      </table>
                      
                </div>
            </div>
        </div>
    </div>
</div>

@if(count($bookings) > 0)
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Prescrição</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <input type="hidden" name="user_id" value="{{$booking->user_id}}">
          <input type="hidden" name="doctor_id" value="{{$booking->doctor_id}}">
          <input type="hidden" name="date" value="{{$booking->date}}">
          <div class="form-group">
            <label for="">Disease</label>
            <input type="text" name="name_of_disease" class="form-control" placeholder="Disease">
          </div>

          <div class="form-group">
            <label for="">Symptoms</label>
            <textarea name="symptoms" class="form-control" required placeholder="Symptoms"></textarea>
          </div>

          <div class="form-group">
            <label for="">Procedure to use medicine</label>
            <textarea name="procedure_to_use_medicine" class="form-control" required placeholder="Procedures with medicines"></textarea>
          </div>

          <div class="form-group">
            <label for="">Feedback</label>
            <textarea cols="30" rows=3" name="feedback" class="form-control" required placeholder="Feedback"></textarea>
          </div>

          <div class="form-group">
            <label for="">Signature</label>
            <input type="text" name="signature" class="form-control" required>
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endif

@endsection
