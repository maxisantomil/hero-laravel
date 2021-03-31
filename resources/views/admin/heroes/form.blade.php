
  @csrf <!-- se agrega por seguridad -->
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" @isset($hero) value=" {{ $hero->name }} @endisset " aria-describedby="emailHelp" placeholder="Ingrese un nombre" required>
    </div>
    <div class="form-group">
        <label for="hp">HP</label>
        <input type="number" class="form-control" id="hp" name="hp" @isset($hero) value="{{ $hero->hp }}" @endisset aria-describedby="emailHelp" placeholder="Ingrese los puntos de vida" required>
      </div>
      <div class="form-group">
        <label for="atq">Ataque</label>
        <input type="number" class="form-control" id="atq" name="atq" @isset($hero) value="{{ $hero->atq }}" @endisset aria-describedby="emailHelp" placeholder="Ingrese los puntos de ataque"required>
      </div>
      <div class="form-group">
        <label for="def">Defensa</label>
        <input type="number" class="form-control" id="def" name="def" @isset($hero) value="{{ $hero->def }}" @endisset aria-describedby="emailHelp" placeholder="Ingrese los puntos de defensa" required>
      </div>
      <div class="form-group">
        <label for="luck">Suerte</label>
        <input type="number" class="form-control" id="luck" name="luck" @isset($hero) value="{{ $hero->luck }}" @endisset aria-describedby="emailHelp" placeholder="Ingrese los puntos de suerte" required>
      </div>
      <div class="form-group">
        <label for="coins">Monedas</label>
        <input type="number" class="form-control" id="coins" name="coins" @isset($hero) value="{{ $hero->coins }}" @endisset aria-describedby="emailHelp" placeholder="Ingrese la cantidad de monedas" required>
      </div>
      <div class="form-group">
        <label for="img_path">Imagen</label>
        <input type="file" name="img_path" id="img_path">
      </div>