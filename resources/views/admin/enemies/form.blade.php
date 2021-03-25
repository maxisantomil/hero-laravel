@csrf <!-- se agrega por seguridad -->

<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" @isset($enemy) value=" {{ $enemy->name }}" @endisset aria-describedby="emailHelp" placeholder="Ingrese un nombre" required>
  </div>
  <div class="form-group">
      <label for="hp">HP</label>
      <input type="number" class="form-control" id="hp" name="hp" @isset($enemy) value="{{ $enemy->hp }}" @endisset aria-describedby="emailHelp" placeholder="Ingrese los puntos de vida" required>
    </div>
    <div class="form-group">
      <label for="atq">Ataque</label>
      <input type="number" class="form-control" id="atq" name="atq" @isset($enemy) value="{{ $enemy->atq }}" @endisset aria-describedby="emailHelp" placeholder="Ingrese los puntos de ataque"required>
    </div>
    <div class="form-group">
      <label for="def">Defensa</label>
      <input type="number" class="form-control" id="def" name="def" @isset($enemy) value="{{ $enemy->def }}" @endisset aria-describedby="emailHelp" placeholder="Ingrese los puntos de defensa" required>
    </div>
    <div class="form-group">
      <label for="coins">Monedas</label>
      <input type="number" class="form-control" id="coins" name="coins" @isset($enemy) value="{{ $enemy->coins }}" @endisset aria-describedby="emailHelp" placeholder="Ingrese la cantidad de monedas" required>
    </div>
    <div class="form-group">
      <label for="xp">Experiencia</label>
      <input type="number" class="form-control" id="xp" name="xp" @isset($enemy) value="{{ $enemy->xp }}" @endisset aria-describedby="emailHelp" placeholder="Ingrese la experiencia" required>
    </div>