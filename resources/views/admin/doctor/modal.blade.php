<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $doctor->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Informações do Médico</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
              <img src="{{ asset('images')}}/{{$doctor->image}}" width="200" alt="">
                <p class="badge badge-pill badge-dark">
                    Perfil: {{ $doctor->role->name }}
                </p>
                <p>Nome: {{ $doctor->name }}</p>
                <p>E-mail: {{ $doctor->email }}</p>
                <p>Endereço: {{ $doctor->address }}</p>
                <p>Telefone: {{ $doctor->phone_number }}</p>
                <p>Departamento: {{ $doctor->department }}</p>
                <p>Especilidade: {{ $doctor->education }}</p>
                <p>Biografia: {{ $doctor->description }}</p>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>

        </div>
      </div>
    </div>
  </div>
