@if(count($bookings) > 0)
  <!-- Modal -->
  <div class="modal fade" id="exampleModal{{ $booking->user_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
     <form action="{{ route('prescription') }}" method="post">
    @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Prescrição</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="app">
            
            <input type="hidden" name="user_id" value="{{$booking->user_id}}">
            <input type="hidden" name="doctor_id" value="{{$booking->doctor_id}}">
            <input type="hidden" name="date" value="{{$booking->date}}">
            <div class="form-group">
              <label for="">C.I.D. (Código e Descrição)</label>
              <input type="text" name="name_of_disease" class="form-control" placeholder="CID">
            </div>

            <div class="form-group">
              <label for="">Sintomas</label>
              <textarea name="symptoms" class="form-control" required placeholder="Sintomas"></textarea>
            </div>

            <div class="form-group">
              <label for="">Meciamentos</label>
              <add-btn></add-btn>
            </div>

            <div class="form-group">
              <label for="">Procedimento para tomar a medicação:</label>
              <textarea name="procedure_to_use_medicine" class="form-control" required placeholder="Procedimentos para tomar a medicação"></textarea>
            </div>

            <div class="form-group">
              <label for="">Diagnóstico Médico</label>
              <textarea cols="30" rows=3" name="feedback" class="form-control" placeholder="Diagnóstico"></textarea>
            </div>

            <div class="form-group">
              <label for="">C.R.M.</label>
              <input type="text" name="signature" class="form-control" required>
            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Gravar</button>
          </div>
        </div>
    </form>
    </div>
  </div>
@endif