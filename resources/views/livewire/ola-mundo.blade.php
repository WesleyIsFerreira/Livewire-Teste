<div>
    <label for="nome">Nome:</label>
    <input type="text" wire:model="name">
    <br>
    <label for="surpreso">Surpreso! </label>
    <input type="checkbox" wire:model="surpreso">
    <br>
    <label for="comprimento">Comprimento</label>
    <select wire:model="comprimento" multiple>
        <option>Salve quebrada</option>
        <option>Corre maluco</option>
        <option>Mão na parede</option>
    </select>

    <h1>{{implode(',',$comprimento)}}, Sr.{{ $name }} @if ($surpreso) !!! @endif</h1>
    <button wire:click="resetaNome">Resetar nome</button>
</div>
