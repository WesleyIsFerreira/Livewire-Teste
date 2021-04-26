<div>

    <input wire:model="item" type="text">
    @if ($funcao == 'Adicionar')
    <button wire:click="add" >Adicionar</button>
    @else
    <button wire:click="atualizar" >Editar</button>
    @endif
    
    <ul>
        @foreach ($lista as $key => $item)
            <li>{{$item}} <button wire:click="editar({{ $key }})">Edit</button> <button wire:click="deletas({{ $key }})" >X</button></li>
        @endforeach
    </ul>

</div>
