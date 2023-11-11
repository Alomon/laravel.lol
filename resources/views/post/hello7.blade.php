<x-layout>

    <x-slot:title>
       {{$title}}
    </x-slot:title>

    <x-slot:content>
        <button> <?php echo $name; ?> </button>
        <button> <?= $name; ?> </button>
        <button> {{ $name }} </button>
    </x-slot:content>

</x-layout>
