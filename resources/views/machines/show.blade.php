<x-layout title='Visualizar Maquina'>

    <a href="{{ route('machines.index')}}">Listar</a>

    <h1>Visualizar Máquina</h1>

    ID: {{$machine->id}}<br>
    Nome: {{$machine->name}}<br>

</x-layout>
